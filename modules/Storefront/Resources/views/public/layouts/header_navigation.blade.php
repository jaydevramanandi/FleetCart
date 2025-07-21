<nav class="navigation">
    <div class="container">
        <ul class="nav-menu">
            @foreach ($primaryMenu->menus() as $menu)
                @include('storefront::public.layouts.navigation.menu', ['type' => 'primary_menu'])
            @endforeach
        </ul>
    </div>
</nav>