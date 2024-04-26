<aside id="sidebar" class="js-custom-scroll side-nav">
    <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
        <!-- Title -->
        <li class="sidebar-heading h6">Dashboard</li>
        <!-- End Title -->

        <!-- Dashboard -->
        <li class="side-nav-menu-item {{ setActive(['admin.dashboard']) }}">
            <a class="side-nav-menu-link media align-items-center" href="{{ route('admin.dashboard') }}">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-dashboard"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard -->

        <!-- Users -->
        @if (Auth::user()->role == 'admin')
            <li class="side-nav-menu-item side-nav-has-menu {{ setActive(['admin.users.*']) }} {{ setSideNav(['admin.users.*']) }}">
                <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subUsers">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="gd-user"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Users</span>
                    <span class="side-nav-control-icon d-flex">
                        <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                    </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->

                <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0" style="{{ setDisplayBlock(['admin.users.*']) }}">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link {{ setActive(['admin.users']) }}" href="{{ route('admin.users') }}">All Users</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="#">Add new</a>
                    </li>
                </ul>
                <!-- End Users: subUsers -->
            </li>
        @endif

        @if (Auth::user()->role == 'user')
            <li
                class="side-nav-menu-item side-nav-has-menu {{ setActive(['user.inventories.*']) }} {{ setSideNav(['user.inventories.*']) }}">
                <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subInventories">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Inventories</span>
                    <span class="side-nav-control-icon d-flex">
                        <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                    </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->

                <ul id="subInventories" class="side-nav-menu side-nav-menu-second-level mb-0"
                    style="{{ setDisplayBlock(['user.inventories.*']) }}">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link {{ setActive(['user.inventories.index']) }}"
                            href="{{ route('user.inventories.index') }}">All
                            Inventories</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link {{ setActive(['user.inventories.create']) }}"
                            href="{{ route('user.inventories.create') }}">Add new Inventory</a>
                    </li>
                </ul>
            </li>
            <li class="side-nav-menu-item side-nav-has-menu {{ setActive(['user.items.*']) }} {{ setSideNav(['user.items.*']) }}">
                <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subItems">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="fa-solid fa-box"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Items</span>
                    <span class="side-nav-control-icon d-flex">
                        <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                    </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <ul id="subItems" class="side-nav-menu side-nav-menu-second-level mb-0" style="{{ setDisplayBlock(['user.items.*']) }}">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link {{ setActive(['user.items.index']) }}" href="{{ route('user.items.index') }}">All
                            Items</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link {{ setActive(['user.items.create']) }}" href="{{ route('user.items.create') }}">Add
                            new Item</a>
                    </li>
                </ul>

            </li>
        @endif
        <!-- End Users -->
    </ul>
</aside>
