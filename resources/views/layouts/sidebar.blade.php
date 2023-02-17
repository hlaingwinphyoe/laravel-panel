<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content">
        <a class="sidebar-brand text-center mt-3" href="{{ route('home') }}">
            <img src="{{ asset('image/me.jpg') }}" class="avatar img-fluid rounded me-1" width="30" alt="{{ auth()->user()->name }}" />
            <span class="text-white text-truncate fs-5">{{ auth()->user()->name }}</span>
        </a>

        <ul class="sidebar-nav">

           <x-menu-header header="Dashboard" />

            <x-menu-link class="fa-object-group" title="Dashboard" link="{{ route('home') }}" />
            <x-menu-link class="fa-crop-simple" title="Sample" link="{{ route('sample') }}" />

            <div class="sidebar-item">
                <a class="sub-btn sidebar-link">
                    <i class="fas fa-arrow-right-long dropdown"></i>
                    Settings
                </a>
                <div class="sub-menu">
                    <ul class="list-unstyled">
                        <li class="sidebar-dropdown">
                            <a href="{{ route('home') }}" class="text-decoration-none {{ route('home') === request()->url() ? 'active' : '' }}">
                                <i class="fa-regular fa-circle fa-2xs me-2"></i> Left Sidebar
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#" class="text-decoration-none">
                                <i class="fa-regular fa-circle fa-2xs me-2"></i> Horizontal Sidebar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <x-menu-header header="Tools & Components" />

            <x-menu-link class="fa-mobile-button" title="Buttons" />
            <x-menu-link class="fa-check-to-slot" title="Forms" />
            <x-menu-link class="fa-id-card" title="Cards" />
            <x-menu-link class="fa-hackerrank" title="Typography" />

            <x-menu-header header="System Setting" />

            <x-menu-link class="fa-sign-in" title="Sign In" />
            <x-menu-link class="fa-sign-in-alt" title="Register" />
            <x-menu-link class="fa-user" title="Profile" />


            <li class="sidebar-item position-fixed bottom-0 py-2 border-top border-light" style="width: 260px">
                <a class="sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();
            ">
                    <i class="align-middle fa-solid fa-power-off text-danger"></i> <span class="align-middle">Logout</span>
                </a>
            </li>


        </ul>
    </div>
</nav>
