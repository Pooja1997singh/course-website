@extends('frontend.app-layout.master')
@section('title') {{ __('') }}@endsection
@section('main-content')
  <!-- breadcrumb-area -->
  <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">All Courses</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{route('home')}}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Courses</span>
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
                <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- breadcrumb-area-end -->
<!-- all-courses -->
<section class="all-courses-area section-py-120">
            <div class="container">
                <div class="row">

                    <div class="col-xl-12 col-lg-12">
               
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                <div class="row courses__grid-wrap row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
                                     <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="{{route('course.enroll)}}" class="shine__animate-link">
                                                <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            
                                            <h5 class="title"><a href="#">Web Designing Course </a></h5>
                                           <ul style="font-size: 13px; padding-left: 0.5rem;">
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course duration:</strong> 3 months | 2 hours/class</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course highlights:</strong> Web layouting, Javascript basics, CSS, HTML semantics</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Does this describe you?</strong><br>Creative mind | Attention to detail | Does not want to learn coding | Quick learner </li>
</ul>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="{{route('course.enroll')}}">
                                                        <span class="text">Download Course</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="{{route('course.enroll')}}" class="shine__animate-link">
                                                <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            
                                            <h5 class="title"><a href="{{route('course.enroll')}}">AI for Creative Professionals</a></h5>
                                           <ul style="font-size: 13px; padding-left: 0.5rem;">
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course duration:</strong> 3 months | 2 hours/class</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course highlights:</strong> Prompt fundamentals, Text and image prompts, Composition & lighting</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Does this describe you?</strong><br>Creative Problem Solving | Collaborative Learning | Future Trends: </li>
</ul>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="{{route('course.enroll')}}">
                                                        <span class="text">Download Course</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                               <!--  <h5 class="price">$19.00</h5> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="{{route('course.enroll')}}" class="shine__animate-link">
                                                <img src="assets/img/kl.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                           
                                            <h5 class="title"><a href="{{route('course.enroll')}}"> Wordpress Developer Course</a></h5>
                                           <ul style="font-size: 13px; padding-left: 0.5rem;">
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course duration:</strong> 3 months | 2 hours/class</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course highlights:</strong> WordPress fundamentals | Customizing themes | Integrating plugins</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Does this describe you?</strong><br>Problem solver | Enjoys technology | Committed to learning | Driven with passion </li>
</ul>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="{{route('course.enroll')}}">
                                                        <span class="text">Download Course</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="{{route('course.enroll')}}" class="shine__animate-link">
                                                <img src="assets/img/courses/course_thumb10.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                           
                                            <h5 class="title"><a href="#">Full Stack Development Course</a></h5>
<ul style="font-size: 13px; padding-left: 0.5rem;">
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course duration:</strong> 8 months | 2 hours/class</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course highlights:</strong>  PHP, Javascript, Laravel, React, Data modelling | My SQL | Live Server</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Does this describe you?</strong><br>Problem solver | Enjoys technology | Committed to learning | Driven with passion </li>
</ul>
                                                  <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="{{route('course.enroll')}}">
                                                        <span class="text">Download Course</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="{{route('course.enroll)}}" class="shine__animate-link">
                                                <img src="assets/img/courses/course_thumb08.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                           
                                            <h5 class="title"><a href="{{route('course.enroll)}}">Pro Web & Graphics Design</a></h5>
                                          <ul style="font-size: 13px; padding-left: 0.5rem;">
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course duration:</strong> 8 months | 2 hours/class</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course highlights:</strong>   Design principles, HTML semantics, JavaScript functions</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Does this describe you?</strong><br>Artsy mind | Eye for detail | Dreamer | Passionate creator</li>
</ul>
                                                 <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="{{route('course.enroll)}}">
                                                        <span class="text">Download Course</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                                         <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="{{route('course.enroll)}}" class="shine__animate-link">
                                                <img src="assets/img/courses/dm.webp" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            
                                            <h5 class="title"><a href="{{route('course.enroll)}}">Digital Marketing Course</a></h5>
<ul style="font-size: 13px; padding-left: 0.5rem;">
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course duration:</strong> 8 months | 2 hours/class</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course highlights:</strong>    Fundamentals of digital marketing, PPC, SEO, analytics, 360-degree campaign planning</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Does this describe you? </strong>Analytical skills | Quick learner | business acumen | Love for brands</li>
</ul>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="{{route('course.enroll)}}">
                                                        <span class="text">Download Course</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                  
                             
                                </div>
                               
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- all-courses-end -->
@endsection