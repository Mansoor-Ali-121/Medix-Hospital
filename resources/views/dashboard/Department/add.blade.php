@extends('template')

@section('main_section')

@include('dashboard.includes.alerts')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <h2>Add Department</h2>

    <form action="{{ route('department.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Select Department:</label>
            <select name="name" id="name" class="form-control" required>
                <option value="" disabled selected>Select a department</option>
                <option value="Emergency Department">Emergency Department</option>
                <option value="Surgery Department">Surgery Department</option>
                <option value="Intensive Care Unit (ICU)">Intensive Care Unit (ICU)</option>
                <option value="Radiology">Radiology</option>
                <option value="Pharmacy">Pharmacy</option>
                <option value="Laboratory Services">Laboratory Services</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Nursing Services">Nursing Services</option>
                <option value="Rehabilitation Services">Rehabilitation Services</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="picture">Picture:</label>
            <input type="file" id="picture" name="picture" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add Department</button>
    </form>
</div>

@endsection
