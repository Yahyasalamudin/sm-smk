@php
    use App\Models\Role;
    use App\Models\Menu;
    
    $menus = Menu::whereIn('id', function ($query) {
        $query
            ->select('menu_id')
            ->from('role_menus')
            ->where(
                'role_id',
                auth()
                    ->user()
                    ->roles->pluck('id')
                    ->toArray(),
            );
    })
        ->with([
            'role' => function ($query) {
                $query->orderBy('id', 'asc');
            },
        ])
        ->distinct()
        ->get();
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link" style="">
        <img src="{{ asset('img/favicon.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">SM - SMK MULU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @foreach ($menus as $menu)
                    @if ($menu->route == null)
                        <li class="nav-item has-treeview
                        {{ $menu->sub_menu->contains(function ($sub_menu) {
                            return Route::is($sub_menu->route);
                        })
                            ? 'menu-open'
                            : '' }}"
                            id="{{ 'li' . $menu->title }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon {{ $menu->icon }}"></i>
                                <p>
                                    {{ $menu->title }}
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ml-4">
                                @foreach ($menu->sub_menu as $sub_menu)
                                    <li class="nav-item">
                                        <a href="{{ route($sub_menu->route, $sub_menu->route_param ? $sub_menu->route_param : '') }}"
                                            class="nav-link {{ Route::is($sub_menu->route) && Request::route('role') == $sub_menu->route_param ? 'active' : '' }}">
                                            <i class="{{ $sub_menu->icon }} nav-icon"></i>
                                            <p>{{ $sub_menu->title }}</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @elseif($menu->menu_id == null && $menu->route)
                        <li class="nav-item">
                            <a href="{{ route($menu->route) }}"
                                class="nav-link {{ Route::is($menu->route) && Request::route('role') == $menu->route_param ? 'active' : '' }}">
                                <i class="{{ $menu->icon }} nav-icon"></i>
                                <p>{{ $menu->title }}</p>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</aside>
