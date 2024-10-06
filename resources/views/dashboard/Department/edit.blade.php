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
            <h4>Edit Department Details</h4>
        </div>
        <form action="{{ route('department.update', $department->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Department Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', $department->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $department->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="picture" class="form-label">Picture</label>
                <input type="file" class="form-control" id="picture" name="picture">
                @if ($department->picture)
                    <img src="{{ asset('Departments/picture/' . $department->picture) }}" alt="Department Picture"
                        style="width: 90px; height: 90px; border-radius: 5px; margin-top: 10px;">
                @endif
            </div>

            <button type="submit" class="btn btn-success">Update Department</button>
            <a href="{{ route('department.show') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
