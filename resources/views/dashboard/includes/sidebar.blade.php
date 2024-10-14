<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <!-- User Info Section -->
        <div class="user-info text-center py-4">
            <img src="{{ asset('Profiles/pictures/' . Auth::user()->picture) }}" class="img-fluid rounded-circle mb-2"
                alt="{{ Auth::user()->name }}" style="width: 80px; height: 80px; object-fit: cover;">
                <h2 style="color: rgb(255, 255, 255)">Admin</h2>
        </div>

        <ul class="sidebar-nav">

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

            <!-- Users Dropdown -->
            <li class="sidebar-item dropdown">
                <a class="sidebar-link dropdown" href="#" id="userDropdown" role="button"
                    data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Users</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="{{ route('user.show') }}">View Users</a></li>
                    <li><a class="dropdown-item" href="{{ route('user.register') }}">Add User</a></li>
                </ul>
            </li>

            <!-- Doctors Dropdown -->
            <li class="sidebar-item dropdown">
                <a class="sidebar-link dropdown" href="#" id="doctorDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="align-middle fas fa-user-md" data-feather="stethoscope"></i> <span
                        class="align-middle">Doctors</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="doctorDropdown">
                    <li><a class="dropdown-item" href="{{ route('doctor.show') }}">View Doctors</a></li>
                    <li><a class="dropdown-item" href="{{ route('doctor.add') }}">Add Doctor</a></li>
                </ul>
            </li>


            <!-- Departments Dropdown -->
            <li class="sidebar-item dropdown">
                <a class="sidebar-link dropdown" href="#" id="departmentDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="align-middle" data-feather="layers"></i> <span class="align-middle">Departments</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="departmentDropdown">
                    <li><a class="dropdown-item" href="{{ route('department.show') }}">View Departments</a></li>
                    <li><a class="dropdown-item" href="{{ route('department.add') }}">Add Department</a></li>
                </ul>
            </li>

            <!-- Contacts Dropdown -->
            <li class="sidebar-item dropdown">
                <a class="sidebar-link dropdown" href="#" id="contactDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="align-middle" data-feather="phone"></i> <span class="align-middle">Contacts</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="contactDropdown">
                    <li><a class="dropdown-item" href="{{ route('contact.show') }}">View Contacts</a></li>
                    <li><a class="dropdown-item" href="{{ route('contact.add') }}">Add Contact</a></li>
                </ul>
            </li>

            <!-- Appointments Dropdown -->
            <li class="sidebar-item dropdown">
                <a class="sidebar-link dropdown" href="#" id="appointmentDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Appointments</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="appointmentDropdown">
                    <li><a class="dropdown-item" href="{{ route('appointment.show') }}">View Appointments</a></li>
                    <li><a class="dropdown-item" href="{{ route('appointment.add') }}">Add Appointment</a></li>
                </ul>
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
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
