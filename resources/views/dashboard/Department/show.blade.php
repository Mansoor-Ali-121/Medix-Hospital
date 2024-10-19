@extends('template')
@section('main_section')
    @include('dashboard.includes.alerts')



    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
            <h4 class="mb-0">Department's Details</h4>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-light">Back</a> <!-- Back Button -->
        </div>
    <div class="card-body">
        <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Department Name</th>
                    <th>Descriptions</th>
                    <th>Picture</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->description }}</td>
                        <td><img src="{{ asset('Departments/picture/'.$department->picture) }}"
                                class="img-fluid rounded-circle" style="width: 150px; height: 150px" alt="Profile Picture">
                        </td>

                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="{{ route('department.edit', $department->id) }}" class="btn btn-primary me-2">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="{{ route('department.delete', $department->id) }}" 
                                   class="btn btn-danger" 
                                   onclick="return confirm('Are you sure you want to delete this department?');">
                                    <i class="bi bi-trash"></i> Delete
                                </a>
                            </div>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
