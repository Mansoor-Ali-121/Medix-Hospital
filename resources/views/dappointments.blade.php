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
                        <th class="text-center">Visit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->doctor }}</td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->time }}</td>
                        <td class="text-center">
                            @if ($appointment->is_confirmed)
                                <button class="btn btn-success" disabled>✔</button>
                            @else
                                <form method="POST" action="{{ route('appointment.update', $appointment->id) }}">
                                    @csrf
                                    @method("PATCH")
                                    <input type="hidden" name="response" value="yes">
                                    <button type="submit" class="btn btn-outline-success btn-yes">
                                        Yes
                                    </button>
                                </form>
                            @endif
                            <form method="POST" action="{{ route('appointment.delete', $appointment->id) }}">
                                @csrf
                                @method("DELETE")
                                <input type="hidden" name="response" value="no">
                                <button type="submit" class="btn btn-outline-danger btn-no">
                                    No
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
