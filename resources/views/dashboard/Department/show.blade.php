@extends('template')
@section('main_section')
    @include('dashboard.includes.alerts')


    <div class="card p-5">
        <h2>Departments</h2>

        <table class="table table-hover">
            <thead>
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
                                <a href="{{ route('department.edit', $department->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="{{ route('department.delete', $department->id) }}"
                                    class="btn btn-sm btn-danger delete-confirmation" data-id="{{ $department->id }}">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
