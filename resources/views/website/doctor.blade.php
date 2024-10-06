@extends('website.web_temp')
@section('web-content')
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Doctors</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!--? Team Start -->
    <div class="team-area section-padding30">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Doctors</span>
                        <h2>Our Specialists</h2>
                    </div>
                </div>
            </div>

            <!-- Single Row for Doctors -->
            @foreach ($doctors as $doctor)
            <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="{{ asset('Doctor/picture/'.$doctor->picture) }}" alt="{{ $doctor->name }}">
                            </div>
                            <div class="team-caption text-center">
                                <h3>{{ $doctor->name }}</h3>
                                <span>{{ $doctor->speciality }}</span>
                                <!-- Team social -->
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <!-- Team End -->
</main>
@endsection
