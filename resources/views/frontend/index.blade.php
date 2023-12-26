@extends('frontend.app-layout.master')
@section('title') {{ __('') }}@endsection
@section('main-content')


        <!-- banner-area -->
        <section class="banner-area banner-bg tg-motion-effects" style="background: #fff">
            <div class="container">
                <div class="row justify-content-between align-items-start">
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner__content">
                            <div class="slide-tag" >Level Up Your Skills</div>
   <h2 class="title tg-svg" data-aos="fade-right" data-aos-delay="400" style=" font-size: 55px;  font-family: 'gordita';   line-height: 1.16666666667; letter-spacing: -0.02em; color: #2962F6">
                              Industry-Ready 
                              
                                    <br>
                                    Course <span style="color: #000;     padding: 0 0px 0 0px;
">By</span> Industry
                               
                                <br> Trained Experts
                            </h2>
                            <p data-aos="fade-right" data-aos-delay="600" style="    font-family: 'gordita'; color: #000; font-size: 15px;">AI for creative Professionals | Graphics Design | Web design | UI/UX Design | Full Stack Development | Digital Marketing</p>
                            <div class="banner__btn-wrap" data-aos="fade-right" data-aos-delay="800">
                                <a href="login.html" class="btn arrow-btn">Book A Free Consultation <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner__images">
                            <img src="assets/img/l.png" alt="img" class="main-img">
                           <!--  <div class="shape big-shape" data-aos="fade-up-right" data-aos-delay="600">
                                <img src="assets/img/banner/banner_shape01.png" alt="shape" class="tg-motion-effects1">
                            </div> -->
                            <img src="assets/img/banner/bg_dots.svg" alt="shape" class="shape bg-dots rotateme">
                           <!--  <img src="assets/img/banner/banner_shape02.png" alt="shape" class="shape small-shape tg-motion-effects3"> -->
              
                        </div>
                    </div>
                </div>
            </div>
            <!-- <img src="assets/img/banner/banner_shape01.svg" alt="shape" class="line-shape" data-aos="fade-right" data-aos-delay="1600"> -->
        </section>
        <!-- banner-area-end -->

        <!-- categories-area -->
       <!--  <section class="categories-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Trending Categories</span>
                            <h2 class="title">Top Category We Have</h2>
                            <p class="desc">when known printer took a galley of type scrambl edmake</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="categories__wrap">
                            <div class="swiper categories-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="courses.html">
                                                <div class="icon">
                                                    <i class="flaticon-graphic-design"></i>
                                                </div>
                                                <span class="name">Graphic Design</span>
                                                <span class="courses">(22)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="courses.html">
                                                <div class="icon">
                                                    <i class="flaticon-investment"></i>
                                                </div>
                                                <span class="name">Finance</span>
                                                <span class="courses">(41)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="courses.html">
                                                <div class="icon">
                                                    <i class="flaticon-coding"></i>
                                                </div>
                                                <span class="name">Development</span>
                                                <span class="courses">(29)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="courses.html">
                                                <div class="icon">
                                                    <i class="flaticon-email"></i>
                                                </div>
                                                <span class="name">Marketing</span>
                                                <span class="courses">(31)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="courses.html">
                                                <div class="icon">
                                                    <i class="flaticon-fashion"></i>
                                                </div>
                                                <span class="name">Life Style</span>
                                                <span class="courses">(23)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="courses.html">
                                                <div class="icon">
                                                    <i class="flaticon-interaction"></i>
                                                </div>
                                                <span class="name">Management</span>
                                                <span class="courses">(19)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="courses.html">
                                                <div class="icon">
                                                    <i class="flaticon-web-design"></i>
                                                </div>
                                                <span class="name">App Design</span>
                                                <span class="courses">(18)</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="categories__nav">
                                <button class="categories-button-prev">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 7L1 7M1 7L7 1M1 7L7 13" stroke="#161439" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button class="categories-button-next">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="#161439" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- categories-area-end -->

        <!-- brand-area -->
        <div class="brand-area" style="    padding: 0px 0;">
            <div class="container-fluid">
                <div class="row">
                   <div class="col-lg-6" style="background: #c80517;padding: 119px 91px;">
                       <h1 class="text-white" style="
    font-size: 50px; font-family: 'gordita';
    line-height: 55px; text-align: right;
">
                           Where Our Students Get Hired
                       </h1>
                       <p style="color: #fff; line-height:25px;  font-family: gordita; text-align: right;">Our dedicated placement program prepares you with the skills to crack a spot in one of the top companies.</p>
                   </div>

                     <div class="col-lg-6" style="background: #f6f6f6;padding: 72px 62px;">
                        <div class="row">
                    <div class="col-lg-4 mb-15">
                       <div class="koka">
                           <img src="assets/img/brand/1.png" >
                       </div>
                   </div>

                    <div class="col-lg-4 mb-15">
                       <div class="koka">
                           <img src="assets/img/brand/2.png" >
                       </div>
                   </div>

                   <div class="col-lg-4 mb-15">
                       <div class="koka">
                           <img src="assets/img/brand/3.png" style="width: 170px;">
                       </div>
                   </div>



                <div class="col-lg-4 mb-15">
                       <div class="koka">
                           <img src="assets/img/brand/4.jpg" >
                       </div>
                   </div>

                    <div class="col-lg-4 mb-15">
                       <div class="koka">
                           <img src="assets/img/brand/5.jpg" >
                       </div>
                   </div>

                   <div class="col-lg-4 mb-15">
                       <div class="koka">
                           <img src="assets/img/brand/4.png" style="width: 130px;">
                       </div>
                   </div>


                  <div class="col-lg-4 mb-15">
                       <div class="koka">
                           <img src="assets/img/brand/d.png" >
                       </div>
                   </div>

                    <div class="col-lg-4 mb-15">
                       <div class="koka">
                           <img src="assets/img/brand/5.png" style="width: 70px;">
                       </div>
                   </div>

                   <div class="col-lg-4 mb-15">
                       <div class="koka">
                           <img src="assets/img/brand/6.png" >
                       </div>
                   </div>



                   </div>
                   </div>


                </div>
            </div>
        </div>
        <!-- brand-area-end -->

     
        <!-- course-area -->
        <section class="courses-area section-pt-120 section-pb-90" data-background="assets/img/bg/courses_bg.jpg">
            <div class="container">
                <div class="section__title-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section__title text-center mb-40">
                                <span class="sub-title">Top Class Courses</span>
                                <h1 class="title">Skills That Make You Industry-Ready</h1>
                                <p class="desc">Our industry-focused curriculum, delivered by industry-trained instructors, boosts your career growth.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-content" id="courseTabContent">
                    <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                        <div class="swiper courses-swiper-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="login.html" class="shine__animate-link">
                                                <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <!-- <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="course.html">Designing</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul> -->
                                            <h5 class="title"><a href="#">Web Designing Course </a></h5>
                                           <ul style="font-size: 13px; padding-left: 0.5rem;">
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course duration:</strong> 3 months | 2 hours/class</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course highlights:</strong> Web layouting, Javascript basics, CSS, HTML semantics</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Does this describe you?</strong><br>Creative mind | Attention to detail | Does not want to learn coding | Quick learner </li>
</ul>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="login.html">
                                                        <span class="text">Download Course</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="login.html" class="shine__animate-link">
                                                <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            
                                            <h5 class="title"><a href="login.html">AI for Creative Professionals</a></h5>
                                           <ul style="font-size: 13px; padding-left: 0.5rem;">
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course duration:</strong> 3 months | 2 hours/class</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course highlights:</strong> Prompt fundamentals, Text and image prompts, Composition & lighting</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Does this describe you?</strong><br>Creative Problem Solving | Collaborative Learning | Future Trends: </li>
</ul>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="login.html">
                                                        <span class="text">Download Course</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                               <!--  <h5 class="price">$19.00</h5> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="login.html" class="shine__animate-link">
                                                <img src="assets/img/kl.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                           
                                            <h5 class="title"><a href="login.html"> Wordpress Developer Course</a></h5>
                                           <ul style="font-size: 13px; padding-left: 0.5rem;">
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course duration:</strong> 3 months | 2 hours/class</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course highlights:</strong> WordPress fundamentals | Customizing themes | Integrating plugins</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Does this describe you?</strong><br>Problem solver | Enjoys technology | Committed to learning | Driven with passion </li>
</ul>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="login.html">
                                                        <span class="text">Download Course</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="login.html" class="shine__animate-link">
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
                                                    <a href="login.html">
                                                        <span class="text">Download Course</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="login.html" class="shine__animate-link">
                                                <img src="assets/img/courses/course_thumb08.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                           
                                            <h5 class="title"><a href="login.html">Pro Web & Graphics Design</a></h5>
                                          <ul style="font-size: 13px; padding-left: 0.5rem;">
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course duration:</strong> 8 months | 2 hours/class</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course highlights:</strong>   Design principles, HTML semantics, JavaScript functions</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Does this describe you?</strong><br>Artsy mind | Eye for detail | Dreamer | Passionate creator</li>
</ul>
                                                 <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="login.html">
                                                        <span class="text">Download Course</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="login.html" class="shine__animate-link">
                                                <img src="assets/img/courses/dm.webp" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            
                                            <h5 class="title"><a href="login.html">Digital Marketing Course</a></h5>
<ul style="font-size: 13px; padding-left: 0.5rem;">
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course duration:</strong> 8 months | 2 hours/class</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Course highlights:</strong>    Fundamentals of digital marketing, PPC, SEO, analytics, 360-degree campaign planning</li>
<li style="border-bottom: 1px dashed #ccc; padding-bottom: 6px; padding-top: 6px;"><strong>Does this describe you? </strong>Analytical skills | Quick learner | business acumen | Love for brands</li>
</ul>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="login.html">
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
                        <div class="courses__nav">
                            <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                            <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                        </div>
                    </div>
     
                  
       
                </div>
            </div>
        </section>
        <!-- course-area-end -->

        <!-- newsletter-area -->
        <section class="newsletter__area" style="background: #23262F">
            <div class="container">
                <div class="row align-items-center">
                   
                    <div class="col-lg-12 text-center">
                        <div class="newsletter__content">
                            <h2 class="title">Why Build  <span>Your Career </span> With Us?</h2>
                           <p class="text-white">Our top-notch faculty team consists of the brightest minds of industry who not only equip students with a <br>thorough theoretical knowledge, but also help them build work portfolios and provide<br> unwavering support in securing their dream job.</p>
                        </div>
                        <img src="assets/img/Line 2.png" style="width: 50%">
                    </div>

                    <div class="home-comprehensive-learning-wrapper" style="    max-width: 900px; margin:20px auto">
      
      <div class="home-comprehensive-learning-item">
        <div class="icon-image-col">
           <div class="icon-image-col-inner" style="background-image: url(assets/img/ff.png);">
          
          
          
          
          
          
          <img src="assets/img/teacher.png" alt="100% placement guarantee icon" loading="lazy" width="50" height="22" style="max-width: 100%; height: auto;">
          
        </div>
           </div>
        <div class="content-col">
                    <h4 style="color:#fff">
            Industry-Focussed Training
          </h4>
          <div class="content-inner">
            <p style="color: #fff;">Skills that are in demand. Tools that are in trend. Training that makes you ready for the industry from the word GO.</p>
          </div>

         
        </div>
      </div>
      
      <div class="home-comprehensive-learning-item">
        <div class="icon-image-col" style="    position: absolute;">
           <div class="icon-image-col-inner" style="background-image: url(assets/img/ff.png);">
          
          
          
          
          
          
          <img src="assets/img/Layer_1.png" alt="Career-oriented skill training icon" loading="lazy" width="40" height="40" style="max-width: 100%; height: auto;">
          
        </div>
           </div>
        <div class="content-col">
          <h4 style="color:#fff;">
            Career-oriented skill training
          </h4>
          <div class="content-inner">
            <p style="color: #fff;">Don’t just settle for a job. Look beyond to build a long-lasting and successful career. Our training programs are designed to prepare you for just that.</p>
          </div>
        </div>
      </div>
      
      <div class="home-comprehensive-learning-item">
        <div class="icon-image-col">
         <div class="icon-image-col-inner" style="background-image: url(assets/img/ff.png);">
          
          
          
          
          
          
          <img src="assets/img/100.png" alt="Industry-focused icon" loading="lazy" width="60" height="40" style="max-width: 100%; height: auto;">
          
        </div>
           </div>
        <div class="content-col">
          <h4 style="color:#fff;">
            100% Placement Asistance!!
          </h4>
          <div class="content-inner">
            <p style="color: #fff;">We have a dedicated placement cell that assists every student in securing a job in a renowned company.</p>
          </div>
        </div>
      </div>
      
      <div class="home-comprehensive-learning-item">
        <div class="icon-image-col">
             <div class="icon-image-col-inner" style="background-image: url(assets/img/ff.png);">
          
          
          
          
          
          
          <img src="assets/img/Layer_1-2.svg" alt="Industry-trained instructors icon" loading="lazy" width="40" height="40" style="max-width: 100%; height: auto;">
          
        </div>
           </div>
        <div class="content-col">
          <h4 style="color:#fff;">
            Industry trained instructors
          </h4>
          <div class="content-inner">
            <p style="color: #fff;">Each of our teachers has hands-on experience with industry projects, workflow, requirements and trends. That helps them deliver what works.</p>
          </div>
        </div>
      </div>
      
      <div class="home-comprehensive-learning-item">
        <div class="icon-image-col">
              <div class="icon-image-col-inner" style="background-image: url(assets/img/ff.png);">
          
          
          
          
          
          
          <img src="assets/img/Group 123.svg" alt="Holistic training program icon" loading="lazy" width="40" height="48" style="max-width: 100%; height: auto;">
          
        </div>
           </div>
        <div class="content-col">
          <h4 style="color:#fff;">
            Holistic training program
          </h4>
          <div class="content-inner">
            <p style="color: #fff">Besides imparting technical skills, we train our students in soft skills, like communication, interview skills etc. so that they perform better at interviews and the job thereafter.</p>
          </div>
        </div>
      </div>
      
  
      
      <div class="home-comprehensive-learning-item">
        <div class="icon-image-col">
           <div class="icon-image-col-inner" style="background-image: url(assets/img/xx.webp);">
          
          
          
          
          
          
          <img src="assets/img/earning.png" alt="Community ask icon" loading="lazy" width="40" height="39" style="max-width: 100%; height: auto;">
          
        </div>
           </div>
        <div class="content-col">
          <h4 style="color:#fff;">
            How To Earn Freelancing Guidance
          </h4>
          <div class="content-inner">
            <p style="color: #fff">Our mentors are in regular touch with students to provide the right career advice and support.</p>
          </div>
        </div>
      </div>
      
      <div class="home-comprehensive-learning-item">
        <div class="icon-image-col">
            <div class="icon-image-col-inner" style="background-image: url(assets/img/rr.png);">
          
          
          
          
          
          
          <img src="assets/img/certificate.png" alt="Get certified icon" loading="lazy" width="40" height="38" style="max-width: 100%; height: auto;">
          
        </div>
           </div>
        <div class="content-col">
          <h4 style="color:#fff;">
            Get Certified
          </h4>
          <div class="content-inner">
            <p style="color: #fff">Grow your career and your business by joining our exclusive industry-ready courses. Get certified today to advance your career with Dotfy Dotfy .</p>
          </div>
        </div>
      </div>
      
    </div>

                </div>
            </div>
           
        </section>
        <!-- newsletter-area-end -->

        <!-- instructor-area -->
       
        <!-- instructor-area-end -->

        <!-- fact-area -->
       
        <!-- fact-area-end -->

        <!-- faq-area -->
        <section class="faq__area">
            <div class="container">
                <div class="row align-items-center">
              
                    <div class="col-lg-12">
                        <div class="faq__content">
                            <div class="section__title pb-50 text-center">
                               
                                <h2 class="title">frequently asked questions</h2>
                            </div>
                            
                            <div class="faq__wrap" style="margin:0 auto; border:1px solid #ccc; border-radius: 8px; padding: 10px 30px;">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                What is Industrial Training at Dotfy Dotfy ?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Industrial Training at Dotfy Dotfy  is a specialized program offering practical, industry-oriented learning experiences to prepare individuals for real-world scenarios in their respective fields.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                               What disciplines or fields does Dotfy Dotfy  cover in its Industrial Training?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Dotfy Dotfy  caters to various fields, including but not limited to software development, engineering, design, data science, and digital marketing, providing tailored training programs in each area.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                How long do the Industrial Training programs typically last?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>The duration of the Industrial Training programs varies based on the specialization chosen, ranging from a few weeks to several months. The duration is structured to provide comprehensive learning and skill development.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                               How can one apply for Industrial Training at Dotfy Dotfy ?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Interested individuals can apply through the Dotfy 's official website or contact their admissions department for guidance on the application process, prerequisites, and available programs.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                               <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Is there any placement assistance or career support provided after completing the Industrial Training?
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Dotfy Dotfy  offers career support, including job placement assistance, career counseling, and guidance on building a professional portfolio, to help participants transition smoothly into the workforce.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                               <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" >
                                                Will participants receive certifications upon completion of the Industrial Training programs?
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Yes, Dotfy Dotfy  issues certifications upon successful completion of the Industrial Training programs, validating the skills acquired during the training.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" >
                                                Are there any prerequisites for enrolling in Industrial Training at Dotfy Dotfy ?
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Prerequisites may vary depending on the specific program. While some courses might have basic requirements, many are open to individuals passionate about learning and pursuing a career in the respective field.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="border-bottom: none;">
                                                Are these programs suitable for beginners or individuals with prior experience?
                                            </button>
                                        </h2>
                                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Dotfy Dotfy 's Industrial Training programs are designed to accommodate individuals at various skill levels. Whether you're a beginner seeking foundational knowledge or an experienced professional looking to enhance specific skills, there are tailored programs available.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <h5 class="pt-50 text-center">For More Information : Call or Whatsapp <span style="text-decoration: underline;"> +91 96676 63113</span> </h5>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->

        <!-- features-area -->
        <section class="features__area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section__title white-title text-center mb-50">
                            <span class="sub-title">How We Start Journey</span>
                            <h2 class="title">Start your Learning Journey Today!</h2>
                           
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pb-120">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="assets/img/icons/features_icon01.svg" class="injectable" alt="img">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Learn with Experts</h4>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="assets/img/icons/features_icon02.svg" class="injectable" alt="img">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Learn Anytime</h4>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="assets/img/icons/features_icon03.svg" class="injectable" alt="img">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Get  Certificate</h4>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="assets/img/icons/features_icon04.svg" class="injectable" alt="img">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Get 100% Placement</h4>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- instructor-area-two -->
       
        <!-- instructor-area-two-end -->

        <!-- blog-area -->
      <section class="courses-area section-pt-120 section-pb-90" data-background="assets/img/bg/courses_bg.jpg">
            <div class="container" style="padding-left: 50px; padding-right: 50px">
                <div class="section__title-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section__title text-center mb-40">
                               
                                <h1 class="title">What Industry Leaders Say About Us</h1>
                   
                            </div>
 
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="courseTabContent">
                    <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                        <div class="swiper courses-swiper-active-two">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                  
                                        <div class="courses__item-content" style="padding: 30px;">
                                            <h1 style="margin-bottom: 0px; line-height: 20px; font-size: 60px">"</h1>
                                           <p style="">I had the opportunity to collaborate with Dotfy Dotfy ,  and I must say, I was thoroughly impressed by the caliber of education and training they offered. The team displayed professionalism, expertise, and a commitment to crafting a tailored training program that precisely met my organization's unique needs. The structured curriculum emphasized practical, real-life applications, enabling my team to implement newfound skills immediately. </p>

                                            <h5 class="title"><a href="#">Yash Pathak </a></h5>
                                          <p>Sr. Developer, Rits technologies</p>

                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                  
                                        <div class="courses__item-content" style="padding: 30px;">
                                            <h1 style="margin-bottom: 0px; line-height: 20px; font-size: 60px">"</h1>
                                           <p style="">
              Dotfy Dotfy  is an impressive, practical, hands on training school providing skilled talent to the communications industry. I congratulate them and wish them the best in their endeavour to help train the next generation of UI/UX design professionals and equip them with the knowledge and tools of the trade
             </p>

                                            <h5 class="title"><a href="#">Parteek Pathak </a></h5>
                                          <p>Founder | Design Dang</p>

                                            
                                        </div>
                                    </div>
                                </div>

                          <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                  
                                        <div class="courses__item-content" style="padding: 30px;">
                                            <h1 style="margin-bottom: 0px; line-height: 20px; font-size: 60px">"</h1>
                                           <p style="">              I wish I had discovered Dotfy Dotfy  early than I did. I am truly impressed with the immense talent and skills of the students from Dotfy Dotfy . All the resources we have hired from the Dotfy  have been truly an asset to our organization. In my experience, the quality of candidature at this Dotfy  is far better than any other institutions. I would like to congratulate Dotfy Dotfy  on producing such talented and competent individuals for our industry. Looking forward for a future association as well, and wish the best for the same.
</p>

                                            <h5 class="title"><a href="#">Rajeev Nara </a></h5>
                                          <p>Sr. Developer, Hindus</p>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses__nav">
                            <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                            <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                        </div>
                    </div>
     
                  
       
                </div>
            </div>
        </section>

              <section class="newsletter__area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="newsletter__img-wrap">
                            <img src="assets/img/others/newsletter_img.png" alt="img">
                            <img src="assets/img/others/newsletter_shape01.png" alt="img" data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                            <img src="assets/img/others/newsletter_shape02.png" alt="img" class="alltuchtopdown">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="newsletter__content">
                            <h2 class="title">Get set to step into a successful career journey. Get a head start with us.</h2>
                            <div class="newsletter__form">
                                <form action="#">
                                
                                    <button type="submit" class="btn">BOOK A FREE CONSULTATION</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter__shape">
               
            </div>
        </section>
        <!-- blog-area-end -->

@endsection