@extends('template')

@section('main_section')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card p-5">

        <div class="card-header text-center bg-primary text-white">
            <h4>Edit Doctor Details</h4>
        </div>
        <form action="{{ route('doctor.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', $doctor->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="{{ old('email', $doctor->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="picture" class="form-label">Picture</label>
                <input type="file" class="form-control" id="picture" name="picture">
                @if ($doctor->picture)
                    <img src="{{ asset('Doctor/picture/' . $doctor->picture) }}" alt="Doctor's Picture"
                        style="width: 90px; height: 90px; border-radius: 50%; margin-top: 10px;">
                @endif
            </div>

            <div class="mb-3">
                <label for="timing" class="form-label">Timing</label>
                <select id="timing" name="timing" class="form-control" required>
                    <option value="12:00 AM - 02:00 AM" {{ $doctor->timing == '12:00 AM - 02:00 AM' ? 'selected' : '' }}>
                        12:00 AM - 02:00 AM</option>
                    <option value="01:00 AM - 03:00 AM" {{ $doctor->timing == '01:00 AM - 03:00 AM' ? 'selected' : '' }}>
                        01:00 AM - 03:00 AM</option>
                    <option value="02:00 AM - 04:00 AM" {{ $doctor->timing == '02:00 AM - 04:00 AM' ? 'selected' : '' }}>
                        02:00 AM - 04:00 AM</option>
                    <option value="03:00 AM - 05:00 AM" {{ $doctor->timing == '03:00 AM - 05:00 AM' ? 'selected' : '' }}>
                        03:00 AM - 05:00 AM</option>
                    <option value="04:00 AM - 06:00 AM" {{ $doctor->timing == '04:00 AM - 06:00 AM' ? 'selected' : '' }}>
                        04:00 AM - 06:00 AM</option>
                    <option value="05:00 AM - 07:00 AM" {{ $doctor->timing == '05:00 AM - 07:00 AM' ? 'selected' : '' }}>
                        05:00 AM - 07:00 AM</option>
                    <option value="06:00 AM - 08:00 AM" {{ $doctor->timing == '06:00 AM - 08:00 AM' ? 'selected' : '' }}>
                        06:00 AM - 08:00 AM</option>
                    <option value="07:00 AM - 09:00 AM" {{ $doctor->timing == '07:00 AM - 09:00 AM' ? 'selected' : '' }}>
                        07:00 AM - 09:00 AM</option>
                    <option value="08:00 AM - 10:00 AM" {{ $doctor->timing == '08:00 AM - 10:00 AM' ? 'selected' : '' }}>
                        08:00 AM - 10:00 AM</option>
                    <option value="09:00 AM - 11:00 AM" {{ $doctor->timing == '09:00 AM - 11:00 AM' ? 'selected' : '' }}>
                        09:00 AM - 11:00 AM</option>
                    <option value="10:00 AM - 12:00 PM" {{ $doctor->timing == '10:00 AM - 12:00 PM' ? 'selected' : '' }}>
                        10:00 AM - 12:00 PM</option>
                    <option value="11:00 AM - 01:00 PM" {{ $doctor->timing == '11:00 AM - 01:00 PM' ? 'selected' : '' }}>
                        11:00 AM - 01:00 PM</option>
                    <option value="12:00 PM - 02:00 PM" {{ $doctor->timing == '12:00 PM - 02:00 PM' ? 'selected' : '' }}>
                        12:00 PM - 02:00 PM</option>
                    <option value="01:00 PM - 03:00 PM" {{ $doctor->timing == '01:00 PM - 03:00 PM' ? 'selected' : '' }}>
                        01:00 PM - 03:00 PM</option>
                    <option value="02:00 PM - 04:00 PM" {{ $doctor->timing == '02:00 PM - 04:00 PM' ? 'selected' : '' }}>
                        02:00 PM - 04:00 PM</option>
                    <option value="03:00 PM - 05:00 PM" {{ $doctor->timing == '03:00 PM - 05:00 PM' ? 'selected' : '' }}>
                        03:00 PM - 05:00 PM</option>
                    <option value="04:00 PM - 06:00 PM" {{ $doctor->timing == '04:00 PM - 06:00 PM' ? 'selected' : '' }}>
                        04:00 PM - 06:00 PM</option>
                    <option value="05:00 PM - 07:00 PM" {{ $doctor->timing == '05:00 PM - 07:00 PM' ? 'selected' : '' }}>
                        05:00 PM - 07:00 PM</option>
                    <option value="06:00 PM - 08:00 PM" {{ $doctor->timing == '06:00 PM - 08:00 PM' ? 'selected' : '' }}>
                        06:00 PM - 08:00 PM</option>
                    <option value="07:00 PM - 09:00 PM" {{ $doctor->timing == '07:00 PM - 09:00 PM' ? 'selected' : '' }}>
                        07:00 PM - 09:00 PM</option>
                    <option value="08:00 PM - 10:00 PM" {{ $doctor->timing == '08:00 PM - 10:00 PM' ? 'selected' : '' }}>
                        08:00 PM - 10:00 PM</option>
                    <option value="09:00 PM - 11:00 PM" {{ $doctor->timing == '09:00 PM - 11:00 PM' ? 'selected' : '' }}>
                        09:00 PM - 11:00 PM</option>
                    <option value="10:00 PM - 12:00 AM" {{ $doctor->timing == '10:00 PM - 12:00 AM' ? 'selected' : '' }}>
                        10:00 PM - 12:00 AM</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="speciality" class="form-label">Speciality</label>
                <select id="speciality" name="speciality" class="form-control" required>
                    <option value="Cardiology" {{ $doctor->speciality == 'Cardiology' ? 'selected' : '' }}>Cardiology
                    </option>
                    <option value="Dermatology" {{ $doctor->speciality == 'Dermatology' ? 'selected' : '' }}>Dermatology
                    </option>
                    <option value="Neurology" {{ $doctor->speciality == 'Neurology' ? 'selected' : '' }}>Neurology</option>
                    <option value="Orthopedics" {{ $doctor->speciality == 'Orthopedics' ? 'selected' : '' }}>Orthopedics
                    </option>
                    <option value="Pediatrics" {{ $doctor->speciality == 'Pediatrics' ? 'selected' : '' }}>Pediatrics
                    </option>
                    <option value="Psychiatry" {{ $doctor->speciality == 'Psychiatry' ? 'selected' : '' }}>Psychiatry
                    </option>
                    <option value="Radiology" {{ $doctor->speciality == 'Radiology' ? 'selected' : '' }}>Radiology</option>
                    <option value="Surgery" {{ $doctor->speciality == 'Surgery' ? 'selected' : '' }}>Surgery</option>
                    <option value="Urology" {{ $doctor->speciality == 'Urology' ? 'selected' : '' }}>Urology</option>
                    <option value="Gynecology" {{ $doctor->speciality == 'Gynecology' ? 'selected' : '' }}>Gynecology
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label for="department_id" class="form-label">Department</label>
                <select id="department_id" name="department_id" class="form-control" required>
                    <option value="1" {{ $doctor->department_id == 1 ? 'selected' : '' }}>Department 1</option>
                    <option value="2" {{ $doctor->department_id == 2 ? 'selected' : '' }}>Department 2</option>
                    <option value="3" {{ $doctor->department_id == 3 ? 'selected' : '' }}>Department 3</option>
                    <!-- Add more department options as needed -->
                </select>
            </div>

            <div class="mb-3">
                <label for="qualification" class="form-label">Qualification</label>
                <input type="text" class="form-control" id="qualification" name="qualification"
                    value="{{ old('qualification', $doctor->qualification) }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update Doctor</button>
            <a href="{{ route('doctor.show') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
