<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            {{-- Admin Panel --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('Profiles/pictures/' . Auth::user()->picture) }}"
                        class="avatar img-fluid rounded-circle me-2" 
                        style="width: 80px; height: 90px; object-fit: cover;" 
                        alt="{{ Auth::user()->name }}" />
                    <span class="text-dark">{{ Auth::user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                        <i class="align-middle me-1" data-feather="user"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- Bootstrap 5 Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
