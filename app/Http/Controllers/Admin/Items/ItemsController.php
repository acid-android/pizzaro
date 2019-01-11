<?php

namespace App\Http\Controllers\Admin\Items;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request)
    {
        $post = $request->post();

        $model = new Item();

        $model->product_id = $post['id'];
        $model->size = $post['size'];
        $model->dimension = $post['dimension'];
        $model->price = $post['price'];

        $model->save();

        return json_encode([
            'action' => 'add',
            'status' => 'ok',
            'model' => $model
        ]);
    }

    public function update(Request $request)
    {
        $post = $request->post();

        $model = Item::find($post['id']);

        $model->size = $post['size'];
        $model->dimension = $post['dimension'];
        $model->price = $post['price'];

        $model->save();

        return json_encode([
            'action' => 'update',
            'status' => 'ok',
            'model' => $model
        ]);
    }

    public function remove(Request $request)
    {
        $post = $request->post();

        $model = Item::find($post['id']);

        $response = json_encode([
            'action' => 'delete',
            'status' => 'ok',
            'model' => $model
        ]);

        $model->delete();

        return $response;
    }
}
