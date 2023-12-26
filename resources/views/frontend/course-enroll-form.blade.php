@extends('frontend.app-layout.master')
@section('title') {{ __('') }}@endsection
@section('main-content')
 <!-- breadcrumb-area -->
 <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">Enroll Now</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Enroll Now</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape-wrap">
                <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
                <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
                <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
                
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('warning'))
            <div class="alert alert-danger">
                {{ session('warning') }}
            </div>
        @endif
        <!-- singUp-area -->
        <section class="singUp-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="singUp-wrap">
                          
                            <form action="{{route('enroll.student')}}" class="account__form" method="POST">
                                @csrf
                                <div class="form-grp">
                                    <label for="name">Name</label>
                                    <input id="name" class="@error('name') is-invalid @enderror" type="text" placeholder="name" name="name">
                                    @error('name')
                                      <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-grp">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" placeholder="email" name="email" class="@error('email') is-invalid @enderror">
                                    @error('email')
                                      <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-grp">
                                    <label for="mobile_number">Phone No.</label>
                                    <input id="mobile_number" type="tel" placeholder="Phone No." class="@error('mobile_number') is-invalid @enderror" name="mobile_number">
                                    @error('mobile_number')
                                      <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                 
                                <div class="form-grp">
                                    <label for="state">Course*</label>
                                   <select name="course_id" class="@error('course_id') is-invalid @enderror">
                                     <option value="0">Select Course</option>
                                    @foreach($courselist as $list)
                                     <option value="{{$list->id}}">{{$list->course_name}}</option>
                                    @endforeach
                                        
                                    </select>
                                    @error('course_id')
                                      <div class="text-danger">{{ $message }}</div>
                                    @enderror
                               
                                </div>


                                <div class="account__check">
                                    <div class="account__check-remember">
                                        <input type="checkbox" class="form-check-input" value="1" name="terms_conditions">
                                        <label for="terms-check" class="form-check-label">I agree to receive information from Dotfy.</label>
                                    </div>
                                   
                                </div>
                                <button type="submit" class="btn btn-two arrow-btn" name="submit">
                                    Enroll Now<img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable">
                                </button>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- singUp-area-end -->
@endsection