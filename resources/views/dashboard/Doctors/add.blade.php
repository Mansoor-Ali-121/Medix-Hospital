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

    @include('dashboard.includes.alerts')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-light">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Doctor Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('doctor.add') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Enter doctor's name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Enter doctor's email" required>
                            </div>

                            <div class="form-group">
                                <label for="picture">Picture:</label>
                                <input type="file" id="picture" name="picture" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="timing">Timing:</label>
                                <select id="timing" name="timing" class="form-control" required>
                                    <option value="12:00 AM - 02:00 AM">12:00 AM - 02:00 AM</option>
                                    <option value="01:00 AM - 03:00 AM">01:00 AM - 03:00 AM</option>
                                    <option value="02:00 AM - 04:00 AM">02:00 AM - 04:00 AM</option>
                                    <option value="03:00 AM - 05:00 AM">03:00 AM - 05:00 AM</option>
                                    <option value="04:00 AM - 06:00 AM">04:00 AM - 06:00 AM</option>
                                    <option value="05:00 AM - 07:00 AM">05:00 AM - 07:00 AM</option>
                                    <option value="06:00 AM - 08:00 AM">06:00 AM - 08:00 AM</option>
                                    <option value="07:00 AM - 09:00 AM">07:00 AM - 09:00 AM</option>
                                    <option value="08:00 AM - 10:00 AM">08:00 AM - 10:00 AM</option>
                                    <option value="09:00 AM - 11:00 AM">09:00 AM - 11:00 AM</option>
                                    <option value="10:00 AM - 12:00 PM">10:00 AM - 12:00 PM</option>
                                    <option value="11:00 AM - 01:00 PM">11:00 AM - 01:00 PM</option>
                                    <option value="12:00 PM - 02:00 PM">12:00 PM - 02:00 PM</option>
                                    <option value="01:00 PM - 03:00 PM">01:00 PM - 03:00 PM</option>
                                    <option value="02:00 PM - 04:00 PM">02:00 PM - 04:00 PM</option>
                                    <option value="03:00 PM - 05:00 PM">03:00 PM - 05:00 PM</option>
                                    <option value="04:00 PM - 06:00 PM">04:00 PM - 06:00 PM</option>
                                    <option value="05:00 PM - 07:00 PM">05:00 PM - 07:00 PM</option>
                                    <option value="06:00 PM - 08:00 PM">06:00 PM - 08:00 PM</option>
                                    <option value="07:00 PM - 09:00 PM">07:00 PM - 09:00 PM</option>
                                    <option value="08:00 PM - 10:00 PM">08:00 PM - 10:00 PM</option>
                                    <option value="09:00 PM - 11:00 PM">09:00 PM - 11:00 PM</option>
                                    <option value="10:00 PM - 12:00 AM">10:00 PM - 12:00 AM</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="speciality">Speciality:</label>
                                <select id="speciality" name="speciality" class="form-control" required>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Dermatology">Dermatology</option>
                                    <option value="Neurology">Neurology</option>
                                    <option value="Orthopedics">Orthopedics</option>
                                    <option value="Pediatrics">Pediatrics</option>
                                    <option value="Psychiatry">Psychiatry</option>
                                    <option value="Radiology">Radiology</option>
                                    <option value="Surgery">Surgery</option>
                                    <option value="Urology">Urology</option>
                                    <option value="Gynecology">Gynecology</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="department_id">Department:</label>
                                <select id="department_id" name="department_id" class="form-control" required>
                                    <!-- Assuming you manually provide department options here -->
                                    <option value="1">Department 1</option>
                                    <option value="2">Department 2</option>
                                    <option value="3">Department 3</option>
                                    <!-- Add more department options as needed -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="qualification">Qualification:</label>
                                <input type="text" id="qualification" name="qualification" class="form-control"
                                    placeholder="Enter doctor's qualification" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
