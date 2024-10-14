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

            <!-- Row for Doctors -->
            <div class="row">
                @foreach ($doctors as $doctor)
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="single-team bg-light p-3 text-center rounded hover-shadow">
                        <div class="team-img">
                            <img src="{{ asset('Doctor/picture/'.$doctor->picture) }}" alt="{{ $doctor->name }}" class="img-fluid rounded">
                        </div>
                        <div class="team-caption p-5">
                            <h3 class="mt-3 mb-1 transition">{{ $doctor->name }}</h3>
                            <span class="d-block mb-2">{{ $doctor->speciality }}</span>
                            <!-- Team social -->
                            <div class="team-social">
                                <a href="#" class="fab fa-twitter me-2"></a>
                                <a href="#" class="fas fa-globe me-2"></a>
                                <a href="#" class="fab fa-facebook-f me-2"></a>
                                <a href="#" class="fab fa-pinterest-p"></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
</main>

<style>
    .hover-shadow:hover {
        background-color: #000;
        transition: background-color 0.9s ease;
    }
    .hover-shadow:hover h3 {
        font-weight: bold;
        color: #fff;
    }
</style>
@endsection
