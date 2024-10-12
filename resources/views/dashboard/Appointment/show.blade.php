@extends('template')

@section('main_section')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <div class="card-header text-center bg-primary text-white">
        <h4>Appointments Details</h4>
    </div>
<div class="card-body">
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Doctor</th>
                <th>Date</th>
                <th>Time</th>
                <th>Message</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->contact }}</td>
                    <td>{{ $appointment->doctor }}</td>
                    <td>{{ \Carbon\Carbon::parse($appointment->date)->format('d/m/Y') }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ $appointment->message }}</td> <td class="text-center">
                        <div class="btn-group" role="group">
                            <a href="{{ route('appointment.edit',$appointment->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('appointment.delete',$appointment->id) }}" method="POST" style="display: inline;">
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
</div>
</div>
@endsection
