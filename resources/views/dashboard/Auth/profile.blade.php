@extends('website.web_temp')

@section('web-content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Profile Card -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0 text-light text-center">User Profile</h3>
                    </div>
                    <div class="card-body">
                        @if ($user)
                            <div class="row">
                                <!-- Profile Picture -->
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('Profiles/pictures/' . $user->picture) }}"
                                        class="img-fluid rounded-circle" alt="Profile Picture"
                                        style="width: 150px; height: 150px;">
                                </div>

                                <!-- Profile Details -->
                                <div class="col-md-8">
                                    <h5 class="card-title">Details</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
                                        <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                                        <li class="list-group-item"><strong>Address:</strong> {{ $user->address }}</li>
                                        <li class="list-group-item"><strong>Contact:</strong> {{ $user->contact }}</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Display Appointments -->
                            <div class="mt-4">
                                <h2 class="card-title mb-0 text-light text-center card-header bg-primary text-white">Appointments</h2>

                                @if ($appointments->isEmpty())
                                    <p>No appointments found.</p>
                                @else
                                    <!-- Display total number of appointments -->
                                    <p>Total Appointments: {{ $appointments->count() }}</p>

                                    <ul class="list-group">
                                        @foreach ($appointments as $index => $appointment)
                                            <li class="list-group-item">
                                                <!-- Display Appointment Number -->
                                                <strong>Appointment #{{ $index + 1 }}:</strong> <br>

                                                <!-- Display Appointment Details -->
                                                <strong>Doctor:</strong> {{ $appointment->doctor }} <br>
                                                <strong>Date:</strong> {{ $appointment->date }} <br>
                                                <strong>Time:</strong> {{ $appointment->time }} <br>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>

                        @else
                            <p class="text-danger">User not found. Please log in again.</p>
                        @endif
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ route('logout') }}" class="btn btn-danger">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
