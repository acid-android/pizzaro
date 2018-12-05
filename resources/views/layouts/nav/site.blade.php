@inject('menu', 'App\Services\TypesMenuService')

<nav id="site-navigation" class="main-navigation"  aria-label="Primary Navigation">
    <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span class="close-icon"><i class="po po-close-delete"></i></span><span class="menu-icon"><i class="po po-menu-icon"></i></span><span class=" screen-reader-text">Menu</span></button>
    <div class="primary-navigation">
        <ul id="menu-main-menu" class="menu nav-menu" aria-expanded="false">
            <li class="menu-item"><a href="{{route('food.all')}}">Order Online</a></li>
            <li class="menu-item"><a href="{{route('blog')}}">News</a></li>
            <li class="menu-item"><a href="{{route('store-locator')}}">Store Locator</a></li>
        </ul>
    </div>
    <div class="handheld-navigation">
        <span class="phm-close">Close</span>
        <ul  class="menu">
            @foreach($menu() as $item)
                <li class="menu-item"><a href="{{route('food', ['key' => $item->key])}}"><i class="po {{$item->icon}}"></i>{{$item->name}}</a></li>
            @endforeach
        </ul>
    </div>
</nav>