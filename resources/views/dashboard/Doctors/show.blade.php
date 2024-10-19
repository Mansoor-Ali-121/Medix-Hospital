@extends('template')
@section('main_section')


<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
        <h4 class="mb-0">Doctor's Details</h4>
        <a href="{{ route('dashboard') }}" class="btn btn-outline-light">Back</a> <!-- Back Button -->
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th class="text-center">Picture</th>
                <th >Timing</th>
                <th>Speciality</th>
                <th>Department</th>
                <th>Qualification</th>
                <th class="text-center">Actions</th>
            </tr>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>
                        <img src="{{ asset('Doctor/picture/' . $doctor->picture) }}" class="img-fluid rounded-circle"
                            alt="Profile Picture" style="width: 150px; height: 150px;">
                    </td>
                    <td>{{ $doctor->timing }}</td>
                    <td>{{ $doctor->speciality }}</td>
                    <td>{{ $doctor->department_id }}</td>
                    <td>{{ $doctor->qualification }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-primary me-2">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <a href="{{ route('doctor.delete', $doctor->id) }}" class="btn btn-danger" 
                               onclick="return confirm('Are you sure you want to delete this doctor?');">
                                <i class="bi bi-trash"></i> Delete
                            </a>
                        </div>
                    </td>
                    
            @endforeach
        </table>
    </div>
  
@endsection
