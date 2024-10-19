@extends('website.web_temp')
@section('web-content')


<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                            <div class="hero__caption">
                                <span>Committed to success</span>
                                <h1 class="cd-headline letters scale">We care about your
                                    <strong class="cd-words-wrapper">
                                        <b class="is-visible">health</b>
                                        <b>sushi</b>
                                        <b>steak</b>
                                    </strong>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay="0.1s">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi uquip ex ea commodo consequat is aute irure.</p>
                                <a href="{{ route('appointment.add') }}" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Appointment <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->

        </div>
    </div>
    <!-- slider Area End-->
    <!--? About Start-->
    <div class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Title -->
                        <div class="section-tittle section-tittle2 mb-35">
                            <span>About Our Company</span>
                            <h2>Welcome To Our Hospital</h2>
                        </div>
                        <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        <div class="about-btn1 mb-30">
                            <a href="{{ route('doctor.display') }}" class="btn about-btn">Find Doctors <i class="ti-arrow-right"></i></a>
                        </div>
                        <div class="about-btn1 mb-30">
                            <a href="{{ route('appointment.add') }}" class="btn about-btn2">Appointment <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="{{ asset('website/assets/img/gallery/about2.png') }}" alt="About Image 2">
                        </div>
                        <div class="about-back-img">
                            <img src="{{ asset('website/assets/img/gallery/about1.png') }}" alt="About Image 1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- About  End-->

     <!--? Gallery Area Start -->
     <div class="gallery-area section-padding30">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Gallery</span>
                        <h2>Our Medical Camp</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Left -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img big-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery1.png') }}');"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery2.png') }}');"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery3.png') }}');"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery4.png') }}');"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery5.png') }}');"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img big-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery6.png') }}');"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Gallery Area End -->
<!--? All startups Start -->
<!-- All startups End -->
<div class="all-starups-area testimonial-area fix m-5">
    <!-- left Contents -->
    <div class="starups">
        <!--? Testimonial Start -->
        <div class="h1-testimonial-active">
            <!-- Single Testimonial -->
            <div class="single-testimonial text-center">
                <!-- Testimonial Content -->
                <div class="testimonial-caption">
                    <div class="testimonial-top-cap">
                        <img src="{{ asset('website/assets/img/gallery/testimonial.html') }}" alt="">
                        <p>“I am at an age where I just want to be fit and healthy; our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean, it will care for you hard.”</p>
                    </div>
                    <!-- founder -->
                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                        <div class="founder-img">
                            <img src="{{ asset('website/assets/img/gallery/Homepage_testi.png') }}" alt="">
                        </div>
                        <div class="founder-text">
                            <span>Margaret Lawson</span>
                            <p>Chief Photographer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    </div>
    <!-- Right Contents  -->
    <div class="starups-img"></div>
</div>
<!-- All startups End -->


<!--? Gallery Products Start -->
<div class="gallery-area fix">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery1.png') }}');"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery2.png') }}');"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery3.png') }}');"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery4.png') }}');"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery5.png') }}');"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="gallery-box">
                    <div class="single-gallery">
                        <div class="gallery-img" style="background-image: url('{{ asset('website/assets/img/gallery/gallery6.png') }}');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Products End -->

<!--? Blog start -->
<div class="home_blog-area section-padding30">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <!-- Section Title -->
                <div class="section-tittle text-center mb-70">
                    <span>Our Recent News</span>
                    <h2>Our News From Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-blogs mb-30">
                    <div class="blog-img">
                        <img src="{{ asset('website/assets/img/gallery/blog1.png') }}" alt="">
                    </div>
                    <div class="blogs-cap">
                        <div class="date-info">
                            <span>Health</span>
                            <p>Nov 30, 2020</p>
                        </div>
                        <h4><a href="blog_details.html">Amazing Places To Visit In Summer</a></h4>
                        <a href="blog_details.html" class="read-more1">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-blogs mb-30">
                    <div class="blog-img">
                        <img src="{{ asset('website/assets/img/gallery/blog2.png') }}" alt="">
                    </div>
                    <div class="blogs-cap">
                        <div class="date-info">
                            <span>Checkup</span>
                            <p>Nov 30, 2020</p>
                        </div>
                        <h4><a href="blog_details.html">Developing Creativithout Losing Visual</a></h4>
                        <a href="blog_details.html" class="read-more1">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-blogs mb-30">
                    <div class="blog-img">
                        <img src="{{ asset('website/assets/img/gallery/blog3.png') }}" alt="">
                    </div>
                    <div class="blogs-cap">
                        <div class="date-info">
                            <span>Operation</span>
                            <p>Nov 30, 2020</p>
                        </div>
                        <h4><a href="blog_details.html">Winter Photography Tips from Glenn</a></h4>
                        <a href="blog_details.html" class="read-more1">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

    <!-- Blog End -->
    </main>

    @endsection
