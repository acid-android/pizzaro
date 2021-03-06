<?php

namespace App\Services;


use App\Cart\CartStorage;
use Illuminate\Support\Facades\URL;

class Cart
{
    protected $cart;

    protected $total;
    protected $count;

    /** @var CartStorage */
    protected $storage;


    protected $response;

    public function __construct(CartStorage $storage)
    {
        $this->storage = $storage;

        if (!$cartStorage = CartStorage::find(session()->getId())) {
            $this->storage->id = session()->getId();
            $this->storage->item = serialize([
                'total' => 0,
                'count' => 0,
                'items' => []
            ]);
            $this->storage->save();
        } else {
            $this->storage = $cartStorage;
        }

        $this->cart = unserialize($this->storage->item);

    }

    /**
     * @return mixed
     */
    public function getCart()
    {
        return $this->cart;
    }

    public function getHeaderCart()
    {
        $quantity = 0;
        foreach ($this->cart['items'] as $item) {
            $quantity += $item['quantity'];
        }

        return [
            'quantity' => $quantity,
            'total' => $this->cart['total']
        ];
    }

    public function push($items, $quantity)
    {
        foreach ($items as $item) {
            $id = $item->id;
            if (isset($this->cart['items'][$id])) {
                $this->cart['items'][$id]['quantity'] += $quantity;
            } else {
                $this->cart['items'][$id]['price'] = $item->price;
                $this->cart['items'][$id]['size'] = $item->size;
                $this->cart['items'][$id]['dimension'] = $item->dimension;
                $this->cart['items'][$id]['name'] = $item->product->name;
                $this->cart['items'][$id]['key'] = $item->product->key;
                $this->cart['items'][$id]['image'] = URL::to('/') . $item->product->image;
                $this->cart['items'][$id]['quantity'] = $quantity;
            }
        }

        $this->updateCart();

        $this->setResponse($this->cart);
    }

    public function getResponse()
    {
        return response($this->response);
    }

    protected function setResponse($response)
    {
        $this->response = json_encode($response);
    }

    public function updateCart()
    {
        $total = 0;
        $count = 0;
        $items = $this->cart['items'];
        foreach ($items as $item) {
            $total += $item['price'] * $item['quantity'];
            $count += $item['quantity'];
        }
        $this->cart['total'] = $total;
        $this->cart['count'] = $count;

        $this->storage->item = serialize($this->cart);
        $this->storage->save();
    }

    public function increaseItem($id, $quantity)
    {
        $this->cart['items'][$id]['quantity'] += $quantity;

        $this->updateCart();

        $response = [
            'item_id' => $id,
            'quantity' => $this->cart['items'][$id]['quantity'],
            'price' => $this->cart['items'][$id]['quantity'] * $this->cart['items'][$id]['price'],
            'total' => $this->cart['total'],
            'count' => $this->cart['count']
        ];

        $this->setResponse($response);
    }

    public function decreaseItem($id, $quantity)
    {
        $this->cart['items'][$id]['quantity'] -= $quantity;

        if ($this->cart['items'][$id]['quantity'] == 0) {
            $this->removeItem($id);
            return;
        }
        $response = [
            'item_id' => $id,
            'quantity' => $this->cart['items'][$id]['quantity'],
            'price' => $this->cart['items'][$id]['quantity'] * $this->cart['items'][$id]['price'],
            'total' => $this->cart['total'],
            'count' => $this->cart['count']
        ];

        $this->updateCart();

        $this->setResponse($response);
    }

    public function removeItem($id)
    {
        unset($this->cart['items'][$id]);
        $this->updateCart();

        $response = [
            'item_id' => $id,
            'quantity' => 0,
            'price' => 0,
            'total' => $this->cart['total'],
            'count' => $this->cart['count']
        ];

        $this->setResponse($response);
    }

    public function erase()
    {
        $this->storage->delete();
    }
}