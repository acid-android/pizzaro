@inject('menu', 'App\Services\TypesMenuService')

<div class="pizzaro-secondary-navigation">
    <nav class="secondary-navigation"  aria-label="Secondary Navigation">
        <ul  class="menu">
            @foreach($menu() as $item)
            <li class="menu-item"><a href="{{route('food', ['key' => $item->key])}}"><i class="po {{$item->icon}}"></i>{{$item->name}}</a></li>
            @endforeach
        </ul>
    </nav>
</div>