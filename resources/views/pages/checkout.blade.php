@inject('cart', '\App\Services\Cart')

@extends('layouts.layout')

@section('body-class', 'woocommerce-checkout')

@section('content')

<div id="content" class="site-content" tabindex="-1" >
    <div class="col-full">
        <div class="pizzaro-breadcrumb">
            <nav class="woocommerce-breadcrumb" ><a href="index.html">Home</a>
                <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Checkout
            </nav>
        </div>
        <!-- .woocommerce-breadcrumb -->
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
                <div id="post-9" class="post-9 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            <form name="checkout"  class="checkout woocommerce-checkout" action="{{ route('order-received') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="col2-set" id="customer_details">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Billing Details</h3>
                                            <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
                                                <label for="billing_first_name" class="">First Name </label>
                                                <input type="text" class="input-text " name="first_name" id="billing_first_name" placeholder=""  autocomplete="given-name" value=""  />
                                            </p>
                                            <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
                                                <label for="billing_last_name" class="">Last Name </label>
                                                <input type="text" class="input-text " name="last_name" id="billing_last_name" placeholder=""  autocomplete="family-name" value=""  />
                                            </p>
                                            <div class="clear"></div>

                                            <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
                                                <label for="billing_email" class="">Email Address </label>
                                                <input type="email" class="input-text " name="email" id="billing_email" placeholder=""  autocomplete="email" value=""  />
                                            </p>
                                            <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                                                <label for="billing_phone" class="">Phone </label>
                                                <input type="tel" class="input-text " name="phone" id="billing_phone" placeholder=""  autocomplete="tel" value=""  />
                                            </p>
                                            <div class="clear"></div>

                                            <div class="clear"></div>
                                            <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                                <label for="billing_address_1" class="">Address </label>
                                                <input type="text" class="input-text " name="street" id="billing_address_1" placeholder="Street address"  autocomplete="address-line1" value=""  />
                                            </p>
                                            <p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
                                                <input type="text" class="input-text " name="apartment" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)"  autocomplete="address-line2" value=""  />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="woocommerce-shipping-fields">
                                            <h3>Additional Information</h3>
                                            <p class="form-row form-row notes" id="order_comments_field">
                                                <label for="order_comments" class="">Order Notes</label>
                                                <textarea name="notes" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery."    rows="2" cols="5"></textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <h3 id="order_review_heading">Your order</h3>
                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cart->getCart()['items'] as $id => $item)
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                {{ $item['name'] }}&nbsp;<strong class="product-quantity">&times; {{ $item['quantity'] }}</strong>
                                                <dl class="variation">
                                                    <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>{{ $item['price'] }}</span> ):
                                                    </dt>
                                                    <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                        <p>{{ $item['size'] }}  {{ $item['dimension'] }}</p>
                                                    </dd>
                                                </dl>
                                            </td>
                                            <td class="product-total">
                                                <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $item['quantity'] * $item['price'] }}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $cart->getCart()['total'] }}</span></strong>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <div id="payment" class="woocommerce-checkout-payment">
                                        <ul class="wc_payment_methods payment_methods methods">
                                            <li class="wc_payment_method payment_method_bacs">
                                                <input id="payment_method_bacs" type="radio" class="input-radio" name="payment" value="bank"  checked='checked' data-order_button_text="" />
                                                <label for="payment_method_bacs">Direct Bank Transfer</label>
                                                <div class="payment_box payment_method_bacs" >
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won&#8217;t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </li>
                                            <li class="wc_payment_method payment_method_cheque">
                                                <input id="payment_method_cheque" type="radio" class="input-radio" name="payment" value="cheque"  data-order_button_text="" />
                                                <label for="payment_method_cheque">Check Payments  </label>
                                                <div class="payment_box payment_method_cheque" style="display:none;">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </li>
                                            <li class="wc_payment_method payment_method_cod">
                                                <input id="payment_method_cod" type="radio" class="input-radio" name="payment" value="delivery"  data-order_button_text="" />
                                                <label for="payment_method_cod">Cash on Delivery   </label>
                                                <div class="payment_box payment_method_cod" style="display:none;">
                                                    <p>Pay with cash upon delivery.</p>
                                                </div>
                                            </li>
                                            <li class="wc_payment_method payment_method_paypal">
                                                <input id="payment_method_paypal" type="radio" class="input-radio" name="payment" value="paypal"  data-order_button_text="Proceed to PayPal" />
                                                <label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"/>
                                                    <a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/us/webapps/mpp/paypal-popup"   >What is PayPal?</a>  </label>
                                                <div class="payment_box payment_method_paypal" style="display:none;">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don&#8217;t have a PayPal account.</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-row place-order">
                                            <noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.<br/>
                                                <input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" />
                                            </noscript>
                                            <p class="form-row terms wc-terms-and-conditions">
                                                <input type="checkbox" class="input-checkbox" name="terms"  id="terms" />
                                                <label for="terms" class="checkbox">I&rsquo;ve read and accept the <a href="terms-and-conditions.html" target="_blank">terms &amp; conditions</a> <span class="required">*</span></label>
                                                <input type="hidden" name="terms-field" value="1" />
                                            </p>
                                            <input class="button alt" type="submit" style="text-align: center;" value="Place order">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- .entry-content -->
                </div>
                <!-- #post-## -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .col-full -->
</div>

@endsection