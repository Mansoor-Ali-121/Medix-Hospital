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
              <h2>Departments</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->

  <!--? department_area_start  -->
  <div class="department_area section-padding2">
    <div class="container">
      <!-- Section Title -->
      <div class="row">
        <div class="col-lg-12">
          <div class="section-tittle text-center mb-100">
            <span>Our Departments</span>
            <h2>Our Medical Services</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="depart_ment_tab mb-30">
            <!-- Tabs Buttons -->
            <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
              @foreach($departments as $department)
                <li class="nav-item flex-fill border-end {{ $loop->last ? '' : 'border-primary' }}">
                  <a
                    class="nav-link {{ $loop->first ? 'active' : '' }}"
                    id="department-{{ $department->id }}-tab"
                    data-toggle="tab"
                    href="#department-{{ $department->id }}"
                    role="tab"
                    aria-controls="department-{{ $department->id }}"
                    aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                  >
                    <h4>{{ $department->name }}</h4> <!-- Display department name -->
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      <div class="dept_main_info white-bg">
        <div class="tab-content" id="myTabContent">
          @foreach($departments as $department)
            <div
              class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
              id="department-{{ $department->id }}"
              role="tabpanel"
              aria-labelledby="department-{{ $department->id }}-tab"
            >
              <!-- single_content  -->
              <div class="row align-items-center no-gutters">
                <div class="col-lg-7">
                  <div class="dept_info">
                    <h3>{{ $department->name }}</h3>
                    <p>{{ $department->description ?: 'No description available.' }}</p> <!-- Check for description -->
                 
                      <a href="{{ route('appointment.add') }}" class="btn header-btn">Appointment</a>
                
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="dept_thumb">
                    <div class="img-container">
                      <img src="{{ $department->picture ? asset('Departments/picture/' . $department->picture) : asset('path/to/default/image.jpg') }}" alt="{{ $department->name }}" class="img-fluid" /> <!-- Check for picture -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- single_content  -->
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
  <!-- department area_end  -->
</main>

@endsection
