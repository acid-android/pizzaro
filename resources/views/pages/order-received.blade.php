@extends('layouts.layout')

@section('body-class', 'woocommerce-page woocommerce-order-received woocommerce-checkout')

@section('content')

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb">
                    <a href="index.html">Home</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>
                    <a href="checkout.html">Checkout</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Order Received
                </nav>
            </div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
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
                    <div id="post-9" class="post-9 page type-page status-publish hentry">
                        <header class="entry-header">
                            <h1 class="entry-title">Order Received</h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <div class="woocommerce">
                                <p class="woocommerce-thankyou-order-received">Thank you. Your order has been
                                    received.</p>
                                <ul class="woocommerce-thankyou-order-details order_details">
                                    <li class="order">Order Number:<strong>{{ $model->id }}</strong></li>
                                    <li class="date">Date:<strong>{{ $model->created_at }}</strong></li>
                                    <li class="total">Total:<strong><span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">{{ $order['total'] }}</span></span></strong>
                                    </li>
                                    <li class="method">Payment Method:<strong>{{ $model->payment }}</strong></li>
                                </ul>
                                <div class="clear"></div>
                                <p>Make your payment directly into our bank account. Please use your Order ID as the
                                    payment reference. Your order won’t be shipped until the funds have cleared in our
                                    account.</p>
                                <h2>Order Details</h2>
                                <table class="shop_table order_details">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order['items'] as $item)
                                    <tr class="order_item">
                                        <td class="product-name">
                                            <span>{{ $item['name'] }}</span> <strong
                                                    class="product-quantity">× {{ $item['quantity'] }}</strong>
                                            <dl class="variation">
                                                <dt class="variation-PickSize362590"><span id="1">Pick Size</span>
                                                    (<span class="woocommerce Price amount amount"><span
                                                                class="woocommerce Price currencySymbol">$</span>{{ $item['price'] }}</span>):
                                                </dt>
                                                <dd class="variation-PickSize362590">
                                                    <p>{{ $item['size'] }} {{ $item['dimension'] }}</p>
                                                </dd>
                                            </dl>
                                        </td>
                                        <td class="product-total"><span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{ $item['price'] * $item['quantity'] }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th scope="row">Payment Method:</th>
                                        <td>{{ $model->payment }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total:</th>
                                        <td><span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{ $order['total'] }}</span>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <header>
                                    <h2>Customer Details</h2>
                                </header>
                                <table class="shop_table customer_details">
                                    <tbody>
                                    <tr>
                                        <th>Email:</th>
                                        <td>{{ $model->customer->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Telephone:</th>
                                        <td>{{ $model->customer->phone }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <header class="title">
                                    <h3>Billing Address</h3>
                                </header>
                                <address>
                                    {{ $model->address->street }} street
                                    <br>
                                    apartment {{ $model->address->apartment }}
                                </address>
                            </div>
                        </div>
                        <!-- .entry-content -->
                    </div>
                    <!-- #post-## -->
                </main>
                <!-- #main -->
            </div>
        </div>
        <!-- .col-full -->
    </div>

@endsection