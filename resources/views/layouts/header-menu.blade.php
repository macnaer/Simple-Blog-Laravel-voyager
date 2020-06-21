<ul class="navbar-nav ml-auto">
    @foreach ($items as $menu_item )
        @php
            $isActive = null;

            if (url($menu_item->link()) == url()->current()){
                $isActive = 'active';
            }
        @endphp
        <li class="nav-item {{ $isActive }}">
            <a class="nav-link" href="{{$menu_item->url}}">{{$menu_item->title}}</a>
        </li>
    @endforeach
</ul>