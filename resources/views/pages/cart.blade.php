@extends('layouts.layout')

@section('body-class', 'woocommerce-cart')

@section('content')


@inject('cart', '\App\Services\Cart')

<div id="content" class="site-content" tabindex="-1" >
    <div class="col-full">
        <div class="pizzaro-breadcrumb">
            <nav class="woocommerce-breadcrumb" >
                <a href="{{route('home')}}">Home</a>
                <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Cart
            </nav>
        </div>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" >
                <div class="pizzaro-order-steps">
                    <ul>
                        <li class="cart">
                            <span class="step">1</span>Shopping Cart
                        </li>
                        <li class="checkout">
                            <span class="step">2</span>Checkout
                        </li>
                        <li class="complete">
                            <span class="step">3</span>Order Complete
                        </li>
                    </ul>
                </div>
                <div id="post-8" class="post-8 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            <form>
                                <table class="shop_table shop_table_responsive cart order-cart" >
                                    <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($cart->getCart()['items'] as $id => $item)
                                    <tr class="cart_item" data-item-id="{{ $id }}" id="item_{{ $id }}">
                                        <td class="product-remove">
                                            <div class="remove static-remove" style="cursor: pointer;font-size: 24px" data-item_id="{{ $id }}">&times;</div>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="{{route('product', ['key' => $item['key']])}}">
                                                <img width="180" height="180" src="{{ $item['image'] }}" alt=""/>
                                            </a>
                                        </td>
                                        <td class="product-name" data-title="Product">
                                            <a href="{{route('product',['key' => $item['key']])}}">{{ $item['name'] }}</a>
                                            <dl class="variation">
                                                <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>{{ $item['price'] }}</span> ):
                                                </dt>
                                                <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                    <p>{{ $item['size'] }}  {{ $item['dimension'] }}</p>
                                                </dd>
                                            </dl>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $item['price'] }}</span>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="qty-btn">
                                                <label>Quantity</label>
                                                <div class="quantity">
                                                    <span style="margin: 0 5px; cursor: pointer; font-size: 1.25em;" class="decrease-button" data-item_id="{{ $id }}" data-quantity="1">-</span>
                                                    <span class="quantity-span" style="padding: 5px; width: 3em; height: auto; font-weight: normal; text-align: center;">{{ $item['quantity'] }}</span>
                                                    <span style="margin: 0 5px; cursor: pointer; font-size: 1.25em;" class="increase-button" data-item_id="{{ $id }}" data-quantity="1">+</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="product-total-price">{{ $item['quantity'] * $item['price'] }}</span></span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="6" class="actions">
                                            <div class="coupon">
                                                <label for="coupon_code">Coupon:</label>
                                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
                                                <input type="submit" class="button" name="apply_coupon" value="Apply Coupon" />
                                            </div>
                                            <div class="wc-proceed-to-checkout">
                                                <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                            </div>
                                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="21ca9d92f8" /><input type="hidden" name="_wp_http_referer" value="/pizzaro/cart/" />
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                            <div class="cart-collaterals">
                                <div class="cart_totals ">
                                    <h2>Cart Totals</h2>
                                    <table  class="shop_table shop_table_responsive">
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td data-title="Total">
                                                <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="total-price cart-static-total-price">{{ $cart->getCart()['total'] }}</span></span></strong>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .entry-content -->
            </main><!-- #main -->
        </div>
        <!-- #post-## -->

    </div>
    <!-- #primary -->
</div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('assets/js/cart/order_cart_component.js')}}"></script>

@endsection