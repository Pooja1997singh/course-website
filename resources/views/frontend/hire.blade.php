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
                             Recruit Top Design Talents The Easy Way
                            </h2>
                            <p data-aos="fade-right" data-aos-delay="600" style="    font-family: 'gordita'; color: #000; font-size: 15px;">For a decade now, over 300 companies have hired graphic designers, website designers, UI/UX designers, and developers from us. We are committed to easing the hiring process of talent acquisition teams by providing them with the right candidates that suit their job profiles.</p>
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner__images">
                            <img src="assets/img/ri.jpg" alt="img" class="main-img">
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


        <!-- categories-area-end -->

        <!-- brand-area -->
       
     

        <!-- course-area -->
        <section class="courses-area section-pt-120 section-pb-90" data-background="assets/img/bg/courses_bg.jpg">
            <div class="container">
                <div class="section__title-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section__title text-center mb-40">
                               
                                <h1 class="title">Want To Hire Skilled Super heros ?</h1>
                                
                            </div>

                        </div>
                        <div class="col-lg-10">
                            <form action="#" class="account__form singUp-wrap">
                                <div class="row gutter-20">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="fast-name">Company Name</label>
                                            <input type="text" id="fast-name" placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="last-name">Phone No.</label>
                                            <input type="text" id="last-name" placeholder="Phone No.">
                                        </div>
                                    </div>
                               <div class="col-md-6">
                                     <div class="form-grp">
                                    <label for="email">Company Email</label>
                                    <input type="email" id="email" placeholder="Company email">
                                </div>
                            </div>
                                
                                
                                 <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="email">City</label>
                                    <input type="text" id="email" placeholder="City Name">
                                </div>
                            </div>
                            
                                 <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="state">Pincode*</label>
                                    <input type="text"  placeholder="Pincode">
                                </div>
                                </div>

                                

                               



                                  <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="state">Company Domain URL*</label>
                                    <input type="text"  placeholder="">
                                </div>
                                </div>

                                 <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="state">Contact Person Name*</label>
                                    <input type="text"  placeholder="">
                                </div>
                                </div>

                                 <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="state">Contact Person No.*</label>
                                    <input type="text"  placeholder="">
                                </div>
                                </div>

                                 <div class="col-md-12">
                                <div class="form-grp">
                                    <label for="state">Job Profile*</label>
                                   <select>
                                        <option>Select Course</option>
                                        <option value="Web Design">Web Design</option>
                                       <option value="Web Design">Pro Web & Graphics Design</option>
                                        <option value="Graduate"> Full Stack Developer</option>
                                        <option value="Pursuing Graduation">Digital Marketing</option>
                                    </select>
                                </div>
                                </div>


                                 <div class="col-md-12">
                                <div class="form-grp">
                                    <label for="state">Job Opening*</label>
                                  <input type="number" value="1" name="">
                                </div>
                                </div>


                                

                                 <div class="col-md-12">
                                <div class="form-grp">
                                    <label for="state">Job Description*</label>
                                   <textarea></textarea>
                                </div>
                                </div>

                  


                                 
                                </div>

                                <button type="submit" class="btn btn-two arrow-btn">Hire Now<img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
       
@endsection