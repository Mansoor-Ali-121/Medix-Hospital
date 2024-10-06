@extends('website.web_temp')

@section('web-content')
    @include('dashboard.includes.alerts')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="card shadow-lg border-light">
                    <div class="card-header text-center bg-primary text-white">
                        <img src="{{ asset('website/assets/img/logo/logo.png') }}" alt="Logo" class="img-fluid mb-2"
                            style="max-width: 150px;">
                        <h4>Create Your Account</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.register') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Enter your name" required>
                                @if ($errors->has('name'))
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Enter your email" required>
                                @if ($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Enter your password" required>
                                @if ($errors->has('password'))
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="picture">Profile Picture:</label>
                                <input type="file" id="picture" name="picture" class="form-control">
                                @if ($errors->has('picture'))
                                    <small class="text-danger">{{ $errors->first('picture') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="contact">Contact:</label>
                                <input type="tel" id="contact" name="contact" class="form-control"
                                    placeholder="Enter your contact number" required>
                                @if ($errors->has('contact'))
                                    <small class="text-danger">{{ $errors->first('contact') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" id="address" name="address" class="form-control"
                                    placeholder="Enter your address" required>
                                @if ($errors->has('address'))
                                    <small class="text-danger">{{ $errors->first('address') }}</small>
                                @endif
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Register</button>
                            </div>

                            <div class="text-center mt-3">
                                <p>Already have an account? <a href="{{ route('login') }}" class="text-primary">Login
                                        here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
