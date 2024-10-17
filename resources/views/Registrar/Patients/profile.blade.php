<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Profile</title>
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('website/assets/img/logo/loder.png') }}" />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-header {
            background-color: #567da8;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid white;
        }

        .profile-info {
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .info-label {
            font-weight: bold;
            color: #343a40;
        }

        .info-value {
            margin-bottom: 15px;
            color: #495057;
        }

        .navbar {
            padding: 0.5rem 1rem;
        }

        .navbar-nav {
            margin-left: auto;
        }


        .custom-navbar {
            background-color: #567da8;
            /* Change to your preferred color */
            color: white;
            /* Set text color */
        }

        .custom-navbar .nav-link {
            color: white;
            /* Set link color */
        }

        .custom-navbar .nav-link:hover {
            color: #ffcc00;
            /* Set hover color */
        }

        .custom-navbar .dropdown-menu {
            background-color: #0056b3;
            /* Dropdown background color */
        }

        .custom-navbar .dropdown-item {
            color: white;
            /* Dropdown item color */
        }

        .custom-navbar .dropdown-item:hover {
            background-color: #003d80;
            /* Dropdown item hover color */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('website/assets/img/logo/logo.png') }}" alt="Logo" style="height: 40px;">
            </a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto"> <!-- Adjusted to push items to the right -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('Profiles/pictures/' . Auth::user()->picture) }}"
                                class="avatar img-fluid rounded-circle me-1" alt="{{ Auth::user()->name }}" />
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('patient.add') }}">
                                    <i class="bi bi-arrow-left me-2"></i> Back
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('registrar.profile') }}">
                                    <i class="bi bi-person me-2"></i> Profile
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    <i class="bi bi-box-arrow-right me-2"></i> Log out
                                </a>
                            </li>
                        </ul>
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-5 mb-5">
        <div class="card shadow-lg">
            <div class="profile-header">
                <h2>Registrar Profile</h2>
                <img src="{{ asset('Profiles/pictures/' . Auth::user()->picture) }}" class="avatar mb-3"
                    alt="{{ Auth::user()->name }}">
            </div>
            <div class="card-body profile-info">
                <div class="info-label">Name:</div>
                <div class="info-value">{{ Auth::user()->name }}</div>

                <div class="info-label">Email:</div>
                <div class="info-value">{{ Auth::user()->email }}</div>

                <div class="info-label">Contact:</div>
                <div class="info-value">{{ Auth::user()->contact }}</div>

                <div class="info-label">Address:</div>
                <div class="info-value">{{ Auth::user()->address }}</div>

                <div class="info-label">User Type:</div>
                <div class="info-value">{{ Auth::user()->usertype }}</div>


            </div>
        </div>
    </div>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
