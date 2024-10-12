<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        
            <h2 class="align-middle text-light text-center">Morning</h2>
        

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-profile.html">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('user.show') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Users</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('doctor.show') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Doctors</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('department.show') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Departments</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('contact.show') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Contacts</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('appointment.show') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Appointments</span>
                </a>
            </li>

            <!-- Logout Button -->
            <li class="sidebar-item">
                <a class="sidebar-link text-danger" href="{{ route('logout') }}" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>
