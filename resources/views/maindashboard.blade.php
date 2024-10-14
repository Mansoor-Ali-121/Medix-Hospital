@extends('template')

@section('main_section')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h2>Today's Appointments</h2>
                    <a href="{{ route('dashboardappointment') }}" class="btn btn-primary">Show Today's Appointments</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h2>Another Section</h2>
                    <a href="{{ route('dashboardappointment') }}" class="btn btn-primary">Show Today's Appointments</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
