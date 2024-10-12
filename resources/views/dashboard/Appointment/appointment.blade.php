@extends('website.web_temp')
@section('web-content')

    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Appointments</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('dashboard.includes.alerts')
    <!-- Hero End -->

    {{-- Form start --}}



   
    <div class="contact-form-main m-5">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="form-wrapper">
                        <!-- Section Title -->
                        <div class="form-tittle">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2">
                                        <span>Appointment Apply Form</span>
                                        <h2>Appointment Form</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Section Title -->
                        <form id="contact-form" action="{{ route('appointment.add') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="contact" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="select-itms">
                                        <select name="doctor" id="select2" required>
                                            <option value="">Select a Doctor</option>
                                            <option value="Health Law">Health Law</option>
                                            <option value="Saiful Islam">Saiful Islam</option>
                                            <option value="Arafath Miya">Arafath Miya</option>
                                            <option value="Shakil Miya">Shakil Miya</option>
                                            <option value="Tamim Sharker">Tamim Sharker</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box date-icon mb-30">
                                        <input type="date" name="date" placeholder="Date" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box time-icon mb-30">
                                        <input type="time" name="time" placeholder="Time" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-65">
                                        <textarea name="message" id="message" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="submit-info">
                                        <button class="btn" type="submit">Submit Now <i class="ti-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Left Image -->
        <div class="from-left d-none d-lg-block">
            <img src="{{ asset('website/assets/img/gallery/contact_form.png') }}" alt="">
        </div>
    </div>
 

    {{-- Form end --}}



@endsection
