<nav class="navbar flex-nowrap p-0">
    <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
        <!-- Logo For Mobile View -->
        <a class="navbar-brand navbar-brand-mobile" href="/">
            <img class="img-fluid w-100" src="{{ asset('assets/public') }}/img/logo-mini.png" alt="inventory">
        </a>
        <!-- End Logo For Mobile View -->

        <!-- Logo For Desktop View -->
        <a class="navbar-brand navbar-brand-desktop" href="/">
            <img class="side-nav-show-on-closed" src="{{ asset('assets/public') }}/img/logo-mini.png" alt="inventory"
                style="width: auto; height: 30px;">
            <img class="side-nav-hide-on-closed" src="{{ asset('assets/public') }}/img/logo-big.png" alt="inventory"
                style="width: auto; height: 44px;">
        </a>
        <!-- End Logo For Desktop View -->
    </div>

    <div class="header-content col px-md-3">
        <div class="d-flex align-items-center">
            <!-- Side Nav Toggle -->
            <a class="js-side-nav header-invoker d-flex mr-md-2" href="" data-close-invoker="#sidebarClose" data-target="#sidebar"
                data-target-wrapper="body">
                <i class="gd-align-left"></i>
            </a>
            <!-- End Side Nav Toggle -->

            <!-- User Notifications -->
            <div class="dropdown ml-auto">
            </div>
            <!-- End User Notifications -->
            <!-- User Avatar -->
            <div class="dropdown mx-3 dropdown ml-2">
                <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true"
                    aria-expanded="false" data-unfold-event="click" data-unfold-target="#profileMenu" data-unfold-type="css-animation"
                    data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                    <img class="avatar-lg rounded-circle" src="{{ asset(Auth::user()->image) }}" alt="{{ Auth::user()->name }} Avatar">
                    <i class="gd-angle-down d-none d-md-block ml-2"></i>
                </a>

                <ul id="profileMenu"
                    class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut"
                    aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                    <li class="unfold-item">
                        <a class="unfold-link d-flex align-items-center text-nowrap" href="{{ route('profile') }}">
                            <span class="unfold-item-icon mr-3">
                                <i class="gd-user"></i>
                            </span>
                            My Profile
                        </a>
                    </li>
                    <li class="unfold-item unfold-item-has-divider">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="unfold-link d-flex align-items-center text-nowrap" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            this.closest('form').submit();">
                                <span class="unfold-item-icon mr-3">
                                    <i class="gd-power-off"></i>
                                </span>
                                Log Out
                            </a>

                        </form>
                    </li>
                </ul>
            </div>
            <!-- End User Avatar -->
        </div>
    </div>
</nav>
