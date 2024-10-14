<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <!-- User Info Section -->
        <div class="user-info text-center py-4">
            <div class="profile-pic-container">
                <img src="{{ asset('Profiles/pictures/' . Auth::user()->picture) }}"
                    class="profile-pic rounded-circle shadow" alt="{{ Auth::user()->name }}">
            </div>

            <h2 class="user-role fancy-text">Admin</h2>
        </div>

        <!-- Add the following CSS for styling -->
        <style>
.profile-pic-container {
    display: inline-block;
    background: linear-gradient(145deg, #34495e, #2c3e50); /* Dark blue gradient for a modern look */
    border-radius: 50%;
    padding: 5px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    position: relative; /* Required for positioning the pseudo-element */
    overflow: hidden; /* Prevents overflow of the pseudo-element */
}

.profile-pic {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
}

.profile-pic-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 50%;
    box-shadow: 
        0 0 20px rgb(171, 15, 233), /* Bright purple glow */
        0 0 40px rgba(188, 81, 255, 0.7); /* Softer purple glow */
    opacity: 0.5; /* Start with some opacity for the glow */
    animation: glow-picture 1.5s infinite alternate; /* Apply the glow animation here */
}

.user-info {
    background: linear-gradient(145deg, #2c3e50, #1c1c1c); /* Slightly lighter gradient for contrast */
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
}

.user-role {
    margin-top: 10px;
    color: #ecf0f1; /* Light gray for readability */
    font-weight: 600;
    font-size: 2.5rem; /* Slightly smaller for better fit */
}

.fancy-text {
    background: linear-gradient(90deg, #12c2f3, #e74c3c); /* Orange to red gradient */
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    font-family: 'Satisfy', cursive;
    text-shadow: 
        2px 2px 10px rgb(114, 60, 231), /* Matching purple shadow */
        0 0 20px rgba(114, 60, 231, 0.5), 
        0 0 30px rgba(114, 60, 231, 0.3); 
    animation: text-glow 1.5s ease-in-out infinite alternate;
}

@keyframes text-glow {
    from {
        text-shadow: 
            2px 2px 10px rgba(109, 86, 159, 0.8), 
            0 0 20px rgba(126, 71, 160, 0.963), 
            0 0 30px rgb(75, 59, 110); 
    }
    to {
        text-shadow: 
            2px 2px 10px rgba(46, 204, 113, 0.5), 
            0 0 20px rgba(46, 204, 113, 0.3), 
            0 0 30px rgba(46, 204, 113, 0.1);
    }
}

@keyframes glow-picture {
    0% {
        box-shadow: 
            0 0 20px rgb(126, 48, 157), 
            0 0 40px rgba(90, 48, 116, 0.7); 
        opacity: 0.5; /* Starting opacity */
        transform: scale(1);
    }
    100% {
        box-shadow: 
            0 0 30px rgba(46, 204, 113, 1), /* Bright green glow */
            0 0 60px rgba(46, 204, 113, 0.7); /* Softer green glow */
        opacity: 1; /* Ending opacity */
        transform: scale(1.1); /* Slightly increase size */
    }
}

        </style>


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
