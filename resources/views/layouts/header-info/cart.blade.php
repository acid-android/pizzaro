@inject('cart','\\App\Services\Cart')
<ul class="site-header-cart-v2 menu">
    <li class="cart-content ">
        <a href="{{route('cart')}}" title="View your shopping cart">
            <i class="po po-scooter"></i>
            <span>Go to Your Cart</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{route('cart')}}" title="View your shopping cart">
                    <span class="count">{{ $cart->getHeaderCart()['quantity'] }} items</span> <span class="amount">${{ $cart->getHeaderCart()['total'] }}</span>
                </a>
            </li>
        </ul>
    </li>
</ul>