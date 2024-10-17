<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Patient</title>
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    {{-- Icon --}}
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

        .btn{
            color: white;
            background-color: #0056b3;
 
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover{
            color: white;
            
            background-color: #567da8;
            
        }
   .card-header{
    background-color: #0056b3;

   }
    .custom-navbar {
        background-color: #567da8; /* Change to your preferred color */
        color: white; /* Set text color */
    }

    .custom-navbar .nav-link {
        color: white; /* Set link color */
    }

    .custom-navbar .nav-link:hover {
        color: #ffcc00; /* Set hover color */
    }

    .custom-navbar .dropdown-menu {
        background-color: #0056b3; /* Dropdown background color */
    }

    .custom-navbar .dropdown-item {
        color: white; /* Dropdown item color */
    }

    .custom-navbar .dropdown-item:hover {
        background-color: #003d80; /* Dropdown item hover color */
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow-lg">
            <div class="card-header text-white text-center">
                <h2>Create New Patient</h2>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('patient.add') }}" method="POST"> <!-- Update with your route -->
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            <i class="bi bi-person-fill"></i> Name
                        </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter patient's full name" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contact" class="form-label">
                            <i class="bi bi-telephone-fill"></i> Contact
                        </label>
                        <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" placeholder="e.g. +1234567890" required>
                        @error('contact')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">
                            <i class="bi bi-geo-alt-fill"></i> Address
                        </label>
                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="3" placeholder="Enter complete address" required></textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">
                            <i class="bi bi-gender-ambiguous"></i> Gender
                        </label>
                        <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">
                            <i class="bi bi-calendar-fill"></i> Age
                        </label>
                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" placeholder="Enter patient's age" required>
                        @error('age')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="disease" class="form-label">
                            <i class="bi bi-heart-pulse-fill"></i> Disease
                        </label>
                        <select class="form-select @error('disease') is-invalid @enderror" id="disease" name="disease" required>
                            <option value="">Select Diagnosed Disease</option>
                            <option value="Diabetes">Diabetes</option>
                            <option value="Hypertension">Hypertension</option>
                            <option value="Asthma">Asthma</option>
                            <option value="Cardiovascular Disease">Cardiovascular Disease</option>
                            <option value="COVID-19">COVID-19</option>
                            <option value="Cancer">Cancer</option>
                            <option value="Arthritis">Arthritis</option>
                            <option value="Chronic Kidney Disease">Chronic Kidney Disease</option>
                            <option value="Alzheimer's Disease">Alzheimer's Disease</option>
                            <option value="Influenza">Influenza</option>
                            <option value="Migraine">Migraine</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('disease')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="symptoms" class="form-label">
                            <i class="bi bi-clipboard2-heart"></i> Symptoms
                        </label>
                        <input type="text" class="form-control @error('symptoms') is-invalid @enderror" id="symptoms" name="symptoms" placeholder="Enter symptoms separated by commas, e.g., Fever, Cough, Headache" required>
                        @error('symptoms')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Enter multiple symptoms separated by commas.</small>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn w-50">
                            <i class="bi bi-check-circle"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (optional, for better Bootstrap functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
