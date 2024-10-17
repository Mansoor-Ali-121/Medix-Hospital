@extends('template')

@section('main_section')
<div class="container mt-5">
    <div class="row g-4">
        <!-- Card for Today's Appointments -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <h2 class="card-title mb-3">
                        <i class="bi bi-calendar2-check" style="font-size: 1.5rem;"></i> Today's Appointments
                    </h2>
                    <p class="card-text text-muted">
                        View and manage today's appointments with ease.
                    </p>
                    <a href="{{ route('dashboardappointment') }}" class="btn btn-primary">
                        <i class="bi bi-eye"></i> Show Today's Appointments
                    </a>
                </div>
            </div>
        </div>

        <!-- Card for Total Patients -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <h2 class="card-title mb-3">
                        <i class="bi bi-people-fill" style="font-size: 1.5rem;"></i> Total Patients
                    </h2>
                    <p class="card-text text-muted">
                        You have <span class="fw-bold">{{ $totalPatients }}</span> patients registered.
                    </p>
                    <a href="{{ route('patient.show') }}" class="btn btn-primary">
                        <i class="bi bi-people"></i> View Patients
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Row for Total Doctors -->
    <div class="row g-4 mt-3">
        <div class="col-md-12">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <h2 class="card-title mb-3">
                        <i class="bi bi-person-badge" style="font-size: 1.5rem;"></i> Total Doctors
                    </h2>
                    <p class="card-text text-muted">
                        You have <span class="fw-bold">{{ $totalDoctors }}</span> doctors available.
                    </p>
                    <a href="{{ route('doctor.show') }}" class="btn btn-primary">
                        <i class="bi bi-person-lines-fill"></i> View Doctors
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
