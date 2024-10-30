@extends('template')
@section('main_section')

@include('dashboard.includes.alerts')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
        <h4 class="mb-0">Department's Details</h4>
        <a href="{{ route('dashboard') }}" class="btn btn-outline-light">Back</a>
    </div>
    
    <div class="card-body">
        @if ($departments->isEmpty())
            <div class="alert alert-info text-center">No department records found.</div>
        @else
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Department Name</th>
                        <th class="text-center">Descriptions</th>
                        <th class="text-center p-4">Picture</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $department)
                        <tr>
                            <td>{{ $department->id }}</td>
                            <td>{{ $department->name }}</td>
                            <td>{{ $department->description }}</td>
                            <td class="text-center">
                                <img src="{{ asset('Departments/picture/' . $department->picture) }}"
                                     class="img-fluid rounded-circle" 
                                     style="width: 80px; height: 80px;" 
                                     alt="Department Picture">
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('department.edit', $department->id) }}" class="btn btn-sm btn-primary me-2">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('department.delete', $department->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" 
                                                onclick="return confirm('Are you sure you want to delete this department?');">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

@endsection
