@extends('./front.master')
      @section('content')
       <!-- start of banner section--------------------------------- -->
    <!-- data-aos="fade-left"  data-aos-easing="ease-in-out" -->

    <section id="banner">
      <div class="video-container">
        <video id="background-video" autoplay muted loop>
          <source src="{{asset('front/assets/video.mp4')}}" type="video/mp4">
        </video>
      </div>
      <div class="over-lay">
      <div class="banner-img-mob d-flex justify-content-center align-items-center ">
        <img src="{{asset('front/assets/images/img.png')}}" alt="" class="w-50 d-none">
      </div>
       <section class="banner">
        <div class="banner-img   ">
          <img src="{{asset('front/assets/images/img.png')}}" alt="" class="w-50">
          </div>
      <div class="container">
       
  
        <div class="banner-content  " data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">
          <p>A young advertising company that have a Connect
            With extensive knowledge of integrated marketing in Kingdom of Saudi Arabia.</p>
        </div>
      </div>
      </section> 
      </div>
    </section>



    <!-- end of banner section ------------------------------------------------ -->

       <!-- start about-us section --------------------------- -->
       <section class="about" id="about">
        <div class="container">
          <div class="about-content  d-flex justify-content-center align-items-center">
            <div class="title">
              <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
              data-aos-easing="ease-in-out">WHAT WE DO?</h2>
            </div>
              <div class="line"></div>
            <div class="content" data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
            data-aos-easing="ease-in-out">
              <p>Connect is a creative Saudi company in the field of marketing and advertising.
                 We excel in providing a comprehensive range of services that help promote and enhance brands. We also strive to be a leader for our clients and partners locally and globally.</p>
            </div>
          </div>
        </div>
      </section>
     
      <!-- end about section ----------------------------------------------- -->
          <!-- start brand section ------------------------------------------------ -->
    <section class="brand">
      <div class="container-with-left-img">
        <div class="brand-bg  left-side-img  ">
          <div class="img-bg   ">
            <img src="{{asset('front/assets/images/brand-img-bg.png')}}" alt="" class="bg">
            <div class="img-layer   ">
              <img src="{{asset('front/assets/images/brand-img.png')}}" alt="" class="img-fluid layer">
            </div>
          </div>
         
        </div>
        <div class="brand-content  section-content">
          <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">Brand Activation</h2>
          <p data-aos="zoom-in" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">Connect is known for its success in
            managing branding events in Saudi Arabia.
            It features an integrated team that covers
            all parts of the event marketing strategy
            from start to finish</p>
        </div>

        <div class="brand-img mob-img " data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">
          <img src="{{asset('front/assets/images/brand-mob-img.png')}}" alt="" class="d-none">
        </div>
      </div>
    </section>

        <!-- start poms section --------------------------------------- -->
        <section class="posm ">
          <div class="container-with-right-img">
            <div class="content">
               <h2 class="desktop-heading" data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
               data-aos-easing="ease-in-out" >POSM Promotional and Advertising Materials</h2>
               <h2 class="mob-heading d-none"  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
               data-aos-easing="ease-in-out">POSM</h2>
              
               <div class="posm-content " data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
               data-aos-easing="ease-in-out">
               <p>Creating brand awareness and a lasting impression
                with the target audience to engage them in
                achieving desired goals through promotions,
                banners, and other digital and print means that
                meet the highest standards</p>
            </div></div>
           
              <div class="bg  right-side-img ">
                <div class="img-bg">
                <img src="{{asset('front/assets/images/poms-bg.png')}}" alt="">
                <div class="img-layer ">
                  <img src="{{asset('front/assets/images/posm-mg.png')}}" alt="" class="img-fluid layer">
                  <div class="flag-img">
                    <img src="{{asset('front/assets/images/flag.png')}}" alt="">
                  </div>
                </div> 
               </div> </div>
             
               <div class="mob-img" data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
               data-aos-easing="ease-in-out">
                <img src="{{asset('front/assets/images/posm-mob-img.png')}}" alt="" class="d-none">
               </div>
            </div>
        </section>
    <!-- end of poms section -------------------------------------------------- -->

    <!-- start graphic section ----------------------------------------- -->
    <section class="graphic-design ">
      <div class="container-with-left-img ">
        <div class="bg left-side-img ">
          <div class="img-bg">
          <img src="{{asset('front/assets/images/graphic-bg.png')}}" alt="">
        </div>
        <div class="img-layer">
          <img src="{{asset('front/assets/images/graphic-img.png')}}" alt="">
        </div>
      </div>

      <div class="graphic-design-content   ">
        <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">Graphic Design</h2>

        <p data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
           data-aos-easing="ease-in-out" >The design team of CONNECT does not
          set any limits to its creativity; it works
          according to marketing-psychological
          principles in order to achieve the greatest
          possible impact on the target audience and
          to reach the desired goals.</p>
      </div>
      <div class="mob-img" data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
      data-aos-easing="ease-in-out">
        <img src="{{asset('front/assets/images/graphic-mob-img.png')}}" alt="" class="d-none">
       </div>
      </div>
    </section>

    <!-- end graphic design ------------------------------------- -->
      <!-- start gifts section ------------------------------------ -->
      <section class="gifts  ">
        <div class="container-with-right-img ">
        <div class="gifts-content">
          <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">Personalized Gifts</h2>
          <p data-aos="zoom-in" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">At Connect, we focus on providing unique
            promotional gifts specifically designed
            to help brands leave a lasting impression
            on their customers and partners. With
            our exceptional promotional gifts, they
            can highlight their logo or convey their
            message to the target audience.</p>
        </div>
      
        <div class="bg right-side-img ">
          <div class="img-bg">
          <img src="{{asset('front/assets/images/gifts-bg.png')}}" alt="">
          <div class="img-layer">
             <img src="{{asset('front/assets/images/gifts-img.png')}}" alt="">
          </div>
        </div>
      </div>
  
      <div class="mob-img bg-nfo" data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
      data-aos-easing="ease-in-out">
        <img src="{{asset('front/assets/images/gifts-mob-img.png')}}" alt="" class="d-none">
       </div>
      </section>
  
      <!-- end of gifts section ---------------------------------------- -->
        <!-- start management section -------------------------------------- -->
    <section class="management">
      <div class="container-with-left-img">

        <div class="bg left-side-img">
          <img src="{{asset('front/assets/images/mang-img.png')}}" alt="">
          <div class="img-layer ">
            <img src="{{asset('front/assets/images/mang-bg.png')}}" alt="">
          </div>
       
         </div>
      <div class="management-content ">
        
        <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">Exhibition Management</h2>
        <div class="content">

        <p data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">CONNECT offers creative solutions for all
          trade show needs to participate in local,
          regional and global forums, from planning
          and design to execution and management.
          Engage partners and customers with your
          brand.</p>
      </div></div>

      <div class="mob-img " data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
      data-aos-easing="ease-in-out">
        <img src="{{asset('front/assets/images/mang-mob-img.png')}}" alt="" class="d-none">
       </div>
   
    </div>
    </section>
<!-- end management section -------------------------------------- -->

<!-- start event section ------------------------------------------ -->
<section class="event">
  <div class="container-with-right-img">
      <div class="event-content">
        <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">Event Management</h2>
        <div class="content"  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">
        <p>We have a cohesive team with experience
          in managing all types of marketing
          initiatives. Whether you are planning
          a business event, a conference or a
          marketing event, we are the ideal choice
          to create a seamless and memorable
          experience.</p>

          
      </div>
      <div class="img ">
      <img src="{{asset('front/assets/images/event-left-img.png')}}" alt="" class="mt-5">
      </div>
    
    </div>

    <div class="mob-img d-none "  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
    data-aos-easing="ease-in-out">
    <div class="d-flex justify-content-center w-100">
      <img src="{{asset('front/assets/images/event-mob-img.png')}}" alt="" class="d-none">
      </div>
     </div>

     <div class="event-left-img w-100 d-flex justify-content-center d-none ">
      <img src="{{asset('front/assets/images/event-left-img.png')}}" alt="" class="d-none"  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
      data-aos-easing="ease-in-out"   >
     </div>

     

      <div class="bg right-side-img">
        <img src="{{asset('front/assets/images/event-bg1.png')}}" alt="">

        <div class="img-layer">
          <img src="{{asset('front/assets/images/event-img.png')}}" alt="">
        </div>
      </div>
  </div>
</section>
<!-- end of events section ----------------------------- -->

<!-- start of social-media section -------------------------- -->
 <section class="social-media ">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6">
        <div class="social-media-content w-100">
          <h2  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">Managing Social Media Accounts</h2>
          <div class="content">
          <p data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">We create marketing plans, create content
            of all kinds, manage pages and run
            advertising campaigns to improve your
            presence on digital platforms and reach
            your target audiences and customers.</p>
        </div></div>
      </div>

      <div class="col-lg-5">
        <div class="social-media-links d-flex">
          <div class="left-links d-flex flex-column"  data-aos="zoom-in" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">
            <!-- <a href=""><i class="fa-brands fa-whatsapp"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a> -->
            <a href=""><img src="{{asset('front/assets/images/whatsapp.png')}}" alt=""></a>
            <a href=""><img src="{{asset('front/assets/images/insta.png')}}" alt=""></a>
          </div>
          <div class="right-links d-flex flex-column">
            <!-- <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-linkedin-in"></i></a> -->

            <a href=""><img src="{{asset('front/assets/images/twitter.png')}}" alt=""></a>
            <a href=""><img src="{{asset('front/assets/images/linkedin.png')}}" alt=""></a>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
    <!-- start why-connect-section -------------------------------- -->
<section class="why-connect">
  <div class="yellow-layer">
    <div class="yellow-layer-content">
    <div class="man-img">
      <img src="{{asset('front/assets/images/man.png')}}" alt="">
    </div>

    <div class="content "  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
    data-aos-easing="ease-in-out">
      <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
      data-aos-easing="ease-in-out">WHY CONNECT</h2>
      <p class="why-connect-text">We have contributed to the success of many projects
        and brands, proving that we have sufficient skills and
        experience to make your brand a success.</p>
    </div>
  </div>

  <div class="pink-layer">
    <div class="pink-layer-content ps-4   pe-4">
      <div class="">
        <div class="our-vision-content">
          <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">OUR VISION</h2>
          <p class=""  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">We aim to be a leading and respected brand in the
            field of «marketing and advertising» at the local,
            regional and global level, contributing to the
            development of the economy and the “2030”
            vision of the Kingdom through our contribution
            to the success of our partners.</p>
        </div>
  
        <div class="our-msg-content">
          <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">Our Message</h2>
          <p data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">At CONNECT we are always working to meet
            the needs of our customers to the highest
            quality standards.</p>
        </div>
      </div>
      <div class="woman-img">
        <img src="{{asset('front/assets/images/woman.png')}}" alt="">
      </div>
    </div>
  </div>
  </div>

<div class="aqua-layer"></div>
</section>


<!-- start our-parteners-section ------------------------------ -->
<!-- section.our-parteners-section------------------------------------- -->
<section class="our-parteners  "  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
data-aos-easing="ease-in-out">
        <div class="container">
          <div class="title d-flex justify-content-center w-100 ">
            <h2 class="mb-5 mt-5"   data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
            data-aos-easing="ease-in-out">OUR <br>PARTENERS</h2>
          </div>
 
    <article class="">
    <div class="">
  
        <div class="parteners">
        <div class="  img-box">
      <img src="{{asset('front/assets/images/logo1.png')}}" alt="">
  
      </div>

      <div class="  img-box">
      <img src="{{asset('front/assets/images/logo2.png')}}" alt="">
    
      </div>
     
      <div class="  img-box">
      <img src="{{asset('front/assets/images/logo3.png')}}" alt="">
    
     
      </div>

      <div class="  img-box">
      <img src="{{asset('front/assets/images/logo4.png')}}" alt="">
      </div>

      <div class="  img-box">
      <img src="{{asset('front/assets/images/logo5.png')}}" alt="">
      </div>

      <div class="  img-box">
      <img src="{{asset('front/assets/images/logo6.png')}}" alt="">
      </div>

      <div class="  img-box">
        <img src="{{asset('front/assets/images/logo7.png')}}" alt="">
        </div>

        <div class="  img-box">
          <img src="{{asset('front/assets/images/logo8.png')}}" alt="">
      
          </div>

          <div class="  img-box">
            <img src="{{asset('front/assets/images/logo9.png')}}" alt="">
          
            </div>

            <div class="  img-box">
              <img src="{{asset('front/assets/images/logo10.png')}}" alt="">
         
              </div>
      </div></div></div>
  
  
  
  </article>
</section>

@endsection('content')