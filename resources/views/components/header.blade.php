@guest
    <x-navbar-guest />
@else
    <x-navbar-dashboard />
    <x-sidebar>
        <x-slot name="link">
            <li class="nav-item">
                <x-hyperlink route="#" style="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Dashboard</p>
                </x-hyperlink>
            </li>
            <li class="nav-item">
                <x-hyperlink :route="route('users.index')" style="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Usuarios</p>
                </x-hyperlink>
            </li>
        </x-slot>
    </x-sidebar>
@endguest
