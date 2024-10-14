@extends('template')

@section('main_section')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center bg-primary">
        <h4 class="mb-0 text-light">Today's Appointments</h4>
        <a href="{{ route('dashboard') }}" class="btn btn-outline-light">Back</a> <!-- Back Button -->
    </div>

    <div class="card-body">
        <div id="appointmentsContainer" class="mt-3" style="display: block;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->id }}</td> <!-- Assuming you want to show the ID here -->
                            <td>{{ $appointment->name }}</td>
                            <td>{{ $appointment->email }}</td>
                            <td>{{ ($appointment->doctor) }}</td> <!-- Use optional to avoid errors -->
                            <td>{{ $appointment->date }}</td>
                            <td>{{ $appointment->time }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
