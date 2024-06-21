@extends('layouts.app')
@section('content')

<style type="text/css">
    .contact-top{
        margin-top: 70px;   
    }
    .btn-new{
        margin-top: 40px;
        margin-bottom: 20px;
        width: 11rem;
    }
    .box-new{
        margin-bottom: 50px;
    }
    .box{
        height: 200px;
}
.icon-new{
    width: 60px;
}
.nav-item{
    margin-bottom: 5px;
    color: #fff;
}
.form-control {
    
    padding: 0.875rem 0.75rem !important;
    margin-top: 30px !important;
    background-color: #e9f5f3 !important;
  }
   /*.lablel-new{
    margin-top: 25px !important;
  }*/

</style>


  <main>
        <!-- Banner start -->
        <section class="banner-area-2 pt-145" style="background-image: url(http://jfinserv.vshoppng.tech/images/contact.jpg);">
            <div class="container">
                <div class="row align-items-center pt-130 pb-140">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-content py-5">
                            <div class="section-title text-start">
                                <span class="short-title wow fadeInUp" style="font-size: 50px;">CONTACT US</span>
                                <p class="wow fadeInUp mb-0" data-wow-delay='0.2s' style="color: white; font-size: 25px">Contact Us For Loan Details, Assistance Or Any Queries.</p>
                            </div>
                            <!-- <a class="theme-btn-2 theme-btn-primary mt-45 wow fadeInUp" data-wow-delay="0.4s" href="#">
                                <span class="arrow">
                                    <span class="horizontal-line"></span>
                                </span>View our 2019 Annual Report
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner end -->
 <section class="pb-0 section-padding">
    <div class="container">
      <div class="row section-title justify-content-center text-center">
        <div class="col-md-10 col-lg-9 col-xl-8 col-new">
          <h3 class="contact-top">Get in touch</h3>
          <p>Fill Out The form And We’ll Be In Touch As Soon As Possible.</p>
          
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8 col-xl-8" style="margin-top: 70px; margin-bottom: 200px;">
          <form action="{{config('app.baseURL')}}/contact-us" method="post" class="card card-body shadow">
            {{csrf_field()}}
            <div class="form-row">
              <div class="col-sm-12">
                <div class="form-group">
                  <!-- <label for="contact-name" class="lablel-new">Name</label> -->
                  <input type="text" name="name" class="form-control" id="contact-name" required name="name" placeholder=" Name">
                  <div class="invalid-feedback">
                    Please type your name.
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <div class="form-group">
                  <!-- <label for="contact-email" class="lablel-new">Email Address</label> -->
                  <input type="email" name="email" class="form-control" id="contact-email" placeholder="email" required="Email">
                  <div class="invalid-feedback">
                    Please provide your email address.
                  </div>
                </div>
              </div>
            </div>

            <div class="form-row">
             <div class="col-sm">
              <div class="form-group">
               <!--  <label for="contact-phone" class="lablel-new">Phone </label> -->
                <input type="tel" name="phone" class="form-control" id="contact-phone" required="phone" placeholder="Phone Number">
              </div>
            </div>
          </div>
          <div class="form-group">
            <!-- <label for="contact-message" class="lablel-new">Message </label> -->
            <textarea id="contact-message" name="message" rows="5" class="form-control"  placeholder="Message"></textarea>

          </div>
              
              <div class="form-row">
                <div class="col">

                  <div class="d-flex justify-content-center">
                    <button class="btn btn-md btn-primary btn-loading btn-primary-new btn-new" type="submit" data-loading-text="Sending">
                     

                      <span>Submit</span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="box-new">
      <div class="container">
        <div class="row justify-content-center text-center">
          
          <div class="col-md-4 mb-3 mb-md-0 box" data-aos="fade-up"  data-aos-delay="200" >
            
              <div class="card h-100 hover-box-shadow">
              <div class="card card-body bg-white h-100">
              <div class="icon"><img class="icons icon-new" alt="Enterprise software" src="{{asset('images\email.png')}}"></div>
              <a href="mailto:contact@chatbot.com" class="lead mt-10">contact@finserv.com</a>
            </div>
          </div>
         
          </div>
          <div class="col-md-4 mb-3 mb-md-0 box" data-aos="fade-up" data-aos-delay="200">
            
              <div class="card h-100 hover-box-shadow">
              <div class="card card-body bg-white h-100">
              <div class="icon"><img class="icons icon-new" alt="Enterprise software" src="{{asset('images\phone.png')}}"></div>
              <a href="tel:0123456789" class="lead mt-10">012 345 6789</a>
            </div>
          </div>
        
      </div>
      <div class="col-md-4 mb-3 mb-md-0 box" data-aos="fade-up" data-aos-delay="200">
            
              <div class="card h-100 hover-box-shadow">
              <div class="card card-body bg-white h-100">
              <div class="icon"><img class="icons icon-new" alt="Enterprise software" src="{{asset('images\address.png')}}"></div>
              <a href="tel:0123456789" class="lead mt-10">Address</a>
            </div>
          </div>
       
      </div>
       <div class="col-md-2" data-aos="fade-up">
           
          </div>
      </div>
    </div>
    </section>
       
        <!-- Call To Action start -->
        <section class="cta-area-2 pt-80 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="cta-content text-black wow fadeInRight">
                            <h2>Need Home Loan?</h2>
                            <!-- <p>Finserv </p> -->
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">
                            <a href="#" class="theme-btn wow fadeInLeft">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action end -->

        
    </main>
@endsection