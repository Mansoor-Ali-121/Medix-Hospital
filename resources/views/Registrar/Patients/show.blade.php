@extends('template')

@section('main_section')

@include('dashboard.includes.alerts')

    <div class="container mt-5 mb-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h2>Patient Records</h2>
            </div>
            <div class="card-body p-4">
                @if ($patients->isEmpty())
                    <div class="alert alert-info text-center">No patient records found.</div>
                @else
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Disease</th>
                                <th>Symptoms</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $patient->id }}</td>
                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->contact }}</td>
                                    <td>{{ $patient->address }}</td>
                                    <td>{{ $patient->gender }}</td>
                                    <td>{{ $patient->age }}</td>
                                    <td>{{ $patient->disease }}</td>
                                    <td>{{ $patient->symptoms }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('patient.edit', $patient->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('patient.delete', $patient->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger delete-confirmation">
                                                    <i class="fas fa-trash"></i> Delete
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
    </div>
@endsection