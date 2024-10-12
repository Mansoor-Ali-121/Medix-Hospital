@extends('template')

@section('main_section')
<div class="container mt-5">
    
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    <form action="{{ route('appointment.update', $appointment->id) }}" method="POST" class="border p-4 rounded shadow">
        <h2 class="mb-4 bg-primary text-light p-2 text-center">Edit Appointment</h2>
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-lg-6 col-md-6 mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $appointment->name }}" placeholder="Enter Name" required>
            </div>

            <div class="col-lg-6 col-md-6 mb-3">
                <label for="contact" class="form-label">Phone</label>
                <input type="text" id="contact" name="contact" class="form-control" value="{{ $appointment->contact }}" placeholder="Enter Phone" required>
            </div>

            <div class="col-lg-6 col-md-6 mb-3">
                <label for="doctor" class="form-label">Doctor</label>
                <select id="doctor" name="doctor" class="form-select" required>
                    <option value="{{ $appointment->doctor }}">{{ $appointment->doctor }}</option>
                    <option value="Health Law">Health Law</option>
                    <option value="Saiful Islam">Saiful Islam</option>
                    <option value="Arafath Miya">Arafath Miya</option>
                    <option value="Shakil Miya">Shakil Miya</option>
                    <option value="Tamim Sharker">Tamim Sharker</option>
                </select>
            </div>

            <div class="col-lg-6 col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $appointment->email }}" placeholder="Enter Email" required>
            </div>

            <div class="col-lg-6 col-md-6 mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" id="date" name="date" class="form-control" value="{{ $appointment->date }}" required>
            </div>

            <div class="col-lg-6 col-md-6 mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="time" id="time" name="time" class="form-control" value="{{ $appointment->time }}" required>
            </div>

            <div class="col-lg-12 mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" class="form-control" placeholder="Enter Message">{{ $appointment->message }}</textarea>
            </div>

            <div class="col-lg-12">
                <button class="btn btn-primary" type="submit">Update Appointment</button>
            </div>
        </div>
    </form>
</div>
@endsection
