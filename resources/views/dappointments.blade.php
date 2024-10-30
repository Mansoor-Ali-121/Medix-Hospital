@extends('template')

@section('main_section')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center bg-primary">
        <h4 class="mb-0 text-light">Today's Appointments</h4>
        <a href="{{ route('dashboard') }}" class="btn btn-outline-light">Back</a>
    </div>

    <div class="card-body">
        @if ($appointments->isEmpty())
            <div class="alert alert-info" role="alert">
                No appointments scheduled for today.
            </div>
        @else
            <div id="appointmentsContainer" class="mt-3">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Doctor</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th class="text-center">Actions</th>
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
                                    <button class="btn btn-success" disabled>✔ Confirmed</button>
                                @else
                                    <button class="btn btn-outline-success btn-confirm" data-id="{{ $appointment->id }}">Yes</button>
                                @endif
                                <button class="btn btn-outline-danger btn-delete" data-id="{{ $appointment->id }}">No</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

<!-- Confirmation Modals -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirm Action</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to confirm this appointment?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="confirmYes">Yes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Action</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to decline this appointment?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="deleteYes">No</button>
            </div>
        </div>
    </div>
</div>

<script>
    let confirmId, deleteId;

    document.querySelectorAll('.btn-confirm').forEach(button => {
        button.addEventListener('click', function() {
            confirmId = this.getAttribute('data-id');
            const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
            confirmModal.show();
        });
    });

    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function() {
            deleteId = this.getAttribute('data-id');
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            deleteModal.show();
        });
    });

    document.getElementById('confirmYes').addEventListener('click', function() {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/appointment/update/${confirmId}`;
        form.innerHTML = `
            @csrf
            @method('PATCH')
            <input type="hidden" name="response" value="yes">
        `;
        document.body.appendChild(form);
        form.submit();
    });

    document.getElementById('deleteYes').addEventListener('click', function() {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/appointment/delete/${deleteId}`;
        form.innerHTML = `
            @csrf
            @method('DELETE')
            <input type="hidden" name="response" value="no">
        `;
        document.body.appendChild(form);
        form.submit();
    });
</script>
@endsection
