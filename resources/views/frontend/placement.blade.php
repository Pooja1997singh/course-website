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
                                <a href="contact.html" class="btn arrow-btn">Book A Free Consultation <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
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
                           Top Recruiters
                       </h1>
                       <p style="color: #fff; line-height:25px;  font-family: gordita; text-align: right;">We are partners with some of the biggest names in the industry when it comes to recruitment. Backed with an extensive placement program, our training helps you secure a spot in one of these organisations.</p>
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
                               
                                <h1 class="title">Placement Application Form</h1>
                                
                            </div>

                        </div>
                        <div class="col-lg-10">
                            <form action="#" class="account__form singUp-wrap">
                                <div class="row gutter-20">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="fast-name">Full Name</label>
                                            <input type="text" id="fast-name" placeholder="Full Name">
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
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="email">
                                </div>
                            </div>
                                <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="password">Gender</label>
                                    <select>
                                        <option>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                </div>  
                                
                                 <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="email">Student ID</label>
                                    <input type="text" id="email" placeholder="Student ID">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="password">Location</label>
                                  <select>
                                 <option disabled="" value="">Please Select</option>
                                 <option value="South Delhi">South Delhi</option>
                                 <option value="North Delhi">North Delhi</option>
                                 <option value="East Delhi">East Delhi</option>
                                 <option value="West Delhi">West Delhi</option>
                                 <option value="Gurgaon">Gurgaon</option>
                                 <option value="Noida">Noida</option>
                                 <option value="Greater Noida">Greater Noida</option>
                                 <option value="Central Delhi">Central Delhi</option>
                                 <option value="Faridabad">Faridabad</option>
                                 <option value="Ghaziabad">Ghaziabad</option>
                                 <option value="Out of Delhi NCR">Out of Delhi NCR</option>
                                    </select>
                                </div>
                                </div>
                                 <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="state">State/Region*</label>
                                    <input type="text"  placeholder="State/Region">
                                </div>
                                </div>

                                 <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="state">Highest Qualification</label>
                                    <select>
                                        <option>Select Qualification</option>
                                        <option value="Pursuing Graduation">12th</option>
                                        <option value="Pursuing Graduation">Pursuing Graduation</option>
                                        <option value="Graduate"> Graduate</option>
                                        <option value="Pursuing Graduation">Post Graduate</option>
                                    </select>
                                </div>
                                </div>


                               

                                 <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="state">Upload Resume</label>
                                    <input type="file"  placeholder="">
                                </div>
                                </div>


                                 <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="state">Upload Photo</label>
                                    <input type="file"  placeholder="">
                                </div>
                                </div>


                                  <div class="col-md-12">
                                <div class="form-grp">
                                    <label for="state">Portfolio Link</label>
                                    <input type="text"  placeholder="">
                                </div>
                                </div>

                                 <div class="col-md-12">
                                <div class="form-grp">
                                    <label for="state">Course*</label>
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
                              
                                   <p>
                                    <span style="float: left;"><input type="checkbox" name="" style=""></span>
                                    <span style="padding-left: 6px;"> Terms and Conditions</span></p>

                                     <p>
                                        1. If you’re looking for placement assistance, you need to mandatorily submit your details at www.dotfyDotfy .com/placement; no request/application for placement will be entertained in any other format. 2. Additionally, you also need to submit links to your resume and portfolio to your trainer 3. As mentioned under Section (Academic Integrity) Point (4 & 5), anyone receiving a grade below C will not be eligible for placement services. 4. In case you clear an interview that is arranged by Dice Dotfy , you are liable to appear for the next round or join the said job, whichever is applicable. Any failure to do so will make you ineligible for further placement assistance. 5. After you are placed in a company, you are required to inform us by mailing at placementsdotfyDotfy .com 
                                    </p>

                                </div>
                                </div>


                                 
                                </div>

                                <button type="submit" class="btn btn-two arrow-btn">Submit<img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- course-area-end -->

        <!-- newsletter-area -->
        
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

           
        <!-- blog-area-end -->
@endsection