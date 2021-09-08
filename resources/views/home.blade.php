<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>publish brand</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Favicons -->
  @foreach($headlines as $text)
              @if($text->name == 'logo')
              <link href="{{asset($text->value)}}" rel="icon">
              <link href="{{asset($text->value)}}" rel="apple-touch-icon"> 
          @endif
            @endforeach


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" integrity="sha512-RWhcC19d8A3vE7kpXq6Ze4GcPfGe3DQWuenhXAbcGiZOaqGojLtWwit1eeM9jLGHFv8hnwpX3blJKGjTsf2HxQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css" integrity="sha512-itF/9I/NigY9u4ukjw9s7/kG6SC7LJ5Q4pRNMnTbGZAsO4/RSUelfVuYBk8AkSk23qEcucIqdUlzzpy2qf7jGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <style>
.float{
	position:fixed;
	width:60px;
	height:60px;
  bottom: 77px;
    right: 38px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}


  </style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
<a href="https://api.whatsapp.com/send?phone=⁦01010782536⁩." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i>
        @foreach($headlines as $text)
              @if($text->name == 'email')
                
                <a href="mailto:{{$text->value}}">
          
         {{$text->value}}
              </a>
      
              @endif
            @endforeach

            <i class="icofont-phone"></i>  +           
              @foreach($headlines as $text)
              @if($text->name == 'phone')
                
               
         {{$text->value}}
            
      
              @endif
            @endforeach
      </div>
      <div class="social-links">
      @foreach($headlines as $text)
              @if($text->name == 'twitter')


              <a href="{{$text->value}}" class="twitter"><i class="icofont-twitter"></i></a>
      
              @endif
            @endforeach

            @foreach($headlines as $text)
              @if($text->name == 'facebook')


              <a href="{{$text->value}}" class="facebook"><i class="icofont-facebook"></i></a>
      
              @endif
            @endforeach


            @foreach($headlines as $text)
              @if($text->name == 'instagram')


              <a href="{{$text->value}}" class="instagram"><i class="icofont-instagram"></i></a>
      
              @endif
            @endforeach
            
            
            @foreach($headlines as $text)
              @if($text->name == 'behance')


              <a href="{{$text->value}}" class="behance"><i class="icofont-behance"></i></a>
      
              @endif
            @endforeach


            @foreach($headlines as $text)
              @if($text->name == 'vimeo')


              <a href="{{$text->value}}" class="vimeo"><i class="icofont-vimeo"></i></a>
      
              @endif
            @endforeach
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/">

        @foreach($headlines as $text)
              @if($text->name == 'logo')
          <img src="{{$text->value}}" alt="" class="img-fluid">
          @endif
            @endforeach
        </a></h1>

      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        @if(app()->getLocale() == 'ar')

        <li><a href="#contact">{{app()->getLocale() == 'ar' ? 'تواصل معانا ' : 'Contact Us'}}</a></li>
          <li><a href="#testimonials">{{app()->getLocale() == 'ar' ? 'عملانا' : 'Cleint'}}</a></li>
           <li><a href="#pricing">{{app()->getLocale() == 'ar' ? 'اسعارنا ' : 'Pricing'}}</a></li>

          <li><a href="#portfolio">{{app()->getLocale() == 'ar' ? 'اعمالنا ' : 'Portfolio'}}</a></li>
          <li><a href="#services">{{app()->getLocale() == 'ar' ? 'الخدمات ' : 'Services'}}</a></li>
          <li><a href="#about">{{app()->getLocale() == 'ar' ? 'من نحن ' : 'About Us'}}</a></li>
          <li class="active"><a href="/">{{app()->getLocale() == 'ar' ? 'الرئيسية' : 'home'}}</a></li>

        @else 

          <li class="active"><a href="/">{{app()->getLocale() == 'ar' ? 'الرئيسية' : 'home'}}</a></li>
          <li><a href="#about">{{app()->getLocale() == 'ar' ? 'من نحن ' : 'About Us'}}</a></li>
          <li><a href="#services">{{app()->getLocale() == 'ar' ? 'الخدمات ' : 'Services'}}</a></li>
          <li><a href="#portfolio">{{app()->getLocale() == 'ar' ? 'اعمالنا ' : 'Portfolio'}}</a></li>
          <li><a href="#testimonials">{{app()->getLocale() == 'ar' ? 'عملانا' : 'Cleint'}}</a></li>
           <li><a href="#pricing">{{app()->getLocale() == 'ar' ? 'اسعارنا ' : 'Pricing'}}</a></li>
          <li><a href="#contact">{{app()->getLocale() == 'ar' ? 'تواصل معانا ' : 'Contact Us'}}</a></li>

        @endif

          <li style="
    margin-left: 19px;
    top: 5px;
"> 
          
          <div class="col-md-12">
                <select class="form-control Langchange">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}> English</option>
                    <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}> arbic </option>                    
                </select>
            </div>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>            @foreach($headlines as $text)
              @if($text->name == 'welcom')
              
              {{app()->getLocale() == 'ar' ?  $text->value_ar :$text->value }}
              @endif
            @endforeach</h1>
      <h2>           @foreach($headlines as $text)
              @if($text->name == 'welcom_subtitle')
              {{app()->getLocale() == 'ar' ?  $text->value_ar :$text->value }}
              @endif
            @endforeach</h2>
      <a href="#contact" class="btn-get-started scrollto">{{app()->getLocale() == 'ar' ? 'ابداء الان' : 'Get Started'}} </a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="zoom-in">
          @foreach($headlines as $text)
              @if($text->name == 'aboutUsvedio')
              <a href="{{$text->value}}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>

              @endif
            @endforeach


          </div>

          <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <div class="box-heading" data-aos="fade-up">
              <h3> 
                @foreach($headlines as $text)
              @if($text->name == 'about_us_title')
              {{app()->getLocale() == 'ar' ?  $text->value_ar :$text->value }}
              @endif
            @endforeach
            </h3>
              <p>                @foreach($headlines as $text)
              @if($text->name == 'about')
              {{app()->getLocale() == 'ar' ?  $text->value_ar :$text->value }}
              @endif
            @endforeach</p>
            </div>

            @foreach($aboutUsBox as $text)
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx {{$text->image}}"></i></div>
              <h4 class="title"><a href="">       {{app()->getLocale() == 'ar' ?  $text->name_ar :$text->name }}</a></h4>
              <p class="description">       {{app()->getLocale() == 'ar' ?  $text->description_ar :$text->description }}</p>
            </div>
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p>                 @foreach($headlines as $text)
              @if($text->name == 'Call')
              {{app()->getLocale() == 'ar' ?  $text->value_ar :$text->value }}
              @endif
            @endforeach </p>
          <a class="cta-btn" href="#contact">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h3>{{app()->getLocale() == 'ar' ? 'التي نقدمها  ' : 'Our Awesome'}} <span>{{app()->getLocale() == 'ar' ? 'الخدمات ' : 'Services'}}</span></h3>
          <p>@foreach($headlines as $text)
              @if($text->name == 'services')
              {{app()->getLocale() == 'ar' ?  $text->value_ar :$text->value }}
              @endif
            @endforeach.</p>
        </div>

        <div class="row">
          @foreach($services as $text)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">

            <div class="icon-box" data-aos="zoom-in">
              <div class="icon"><i class="bx {{$text->image}}"></i></div>
              <h4><a href=""> {{app()->getLocale() == 'ar' ?  $text->name_ar :$text->name }}</a></h4>
              <p>  {{app()->getLocale() == 'ar' ?  $text->description_ar :$text->description }} </p>
            </div>
            </div>
          @endforeach
          

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h3><span>{{app()->getLocale() == 'ar' ? 'اعمالنا ' : 'Portfolio'}}</span></h3>
          <p>@foreach($headlines as $text)
              @if($text->name == 'Portfolio')
              {{app()->getLocale() == 'ar' ?  $text->value_ar :$text->value }}
              @endif
            @endforeach</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
            <ul id="portfolio-flters">

              <li data-filter="*" class="filter-active">{{app()->getLocale() == 'ar' ?  'الكل' :'All' }}</li>
              @foreach($services as $text)
              <li data-filter=".filter-{{$text->name}}"> {{app()->getLocale() == 'ar' ?  $text->name_ar :$text->name }}</li>
             
            @endforeach


            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

        @foreach($portfolio as $text)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$text->services->name}}">
          <a href="/portfolio/info/{{$text->id}}">

          @foreach($text->images as $img)
          @if($loop->first)
          <img src="{{$img->image}}" class="img-fluid" alt="">

          @endif
            @endforeach
          @if($text->video) 
          <video width="400" controls="controls" preload="metadata">
  <source src="{{$text->video}}#t=0.5" type="video/mp4">
</video>
          @endif
            <div class="portfolio-info">
              <h4>{{app()->getLocale() == 'ar' ?  $text->name_ar :$text->name }}</h4>
              <p>{{app()->getLocale() == 'ar' ?  $text->description_ar :$text->description }}</p>
              @foreach($text->images as $img)
          @if($loop->first)
          <a href="{{$img->image}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>

          @endif
            @endforeach
              <a href="/portfolio/info/{{$text->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
            </a>
          </div>
          @endforeach

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

        @foreach($Testimonials as $Testimonial)
          <div class="testimonial-item">
            <img src="{{$Testimonial->image}}" class="testimonial-img" alt="">
          </div>

        @endforeach
        </div>

      </div>
    </section><!-- End Testimonials Section -->












    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
      
          <h3> <span>{{app()->getLocale() == 'ar' ? 'الاسعار' : 'Pricing'}}</span></h3>
          <p>@foreach($headlines as $text)
              @if($text->name == 'Pricing')
              {{app()->getLocale() == 'ar' ?  $text->value_ar :$text->value }}
              @endif
            @endforeach.</p>
        </div>


 <div class="row" data-aos="zoom-in">


 <div id=" col-lg-12 carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="
    width: 100%;
    display: inline-block;
">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">


@foreach($pricing->chunk(3) as $chunk)

@if($loop->first)
    <div class="carousel-item active ">
 @else 
 <div class="carousel-item  ">

 
 @endif
    @foreach ($chunk as $value)
    @if($loop->first)
      <h1 class="text-center">{{app()->getLocale() == 'ar' ? $value->service->name_ar : $value->service->name}}</h1>
      @endif
    <div class="col-lg-4 price-lg col-sm-12 " style="margin-bottom: 10px;">

            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>{{$value->name}}</h3>
              <h4><sup>$</sup>{{$value->price}}<span> / {{$value->date}}</span></h4>
              <ul>
              @foreach(explode(',', $value->list) as $info) 
                <li>{{$info}}</li>
              @endforeach
              </ul>
              <div class="btn-wrap">
                <a href="https://api.whatsapp.com/send?phone=⁦01010782536⁩&text={{$value->service->name}}.{{$value->name}}" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

         
@endforeach


</div>


@endforeach

   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    




      </div>

    </section><!-- End Pricing Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h3><span>{{app()->getLocale() == 'ar' ? 'التواصل ' : 'Contact'}}</span> </h3>
          <p>@foreach($headlines as $text)
              @if($text->name == 'contact')
              {{app()->getLocale() == 'ar' ?  $text->value_ar :$text->value }}
              @endif
            @endforeach</p>

        <div>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1264.8400222634932!2d30.759905658071418!3d28.089859454832713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b25a7d476c8c1%3A0x6660afcdb0f6a258!2sMohammed%20Badawi%2C%20Qism%20Minya%2C%20Al%20Minya%2C%20Menia%20Governorate!5e0!3m2!1sen!2seg!4v1627723489952!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>        </div>

        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>{{app()->getLocale() == 'ar' ? ' الموقع' : 'Location'}}:</h4>
                <p>@foreach($headlines as $text)
              @if($text->name == 'Address')
              {{app()->getLocale() == 'ar' ?  $text->value_ar :$text->value }}
              @endif
            @endforeach</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>{{app()->getLocale() == 'ar' ? ' الايميل ' : 'Email'}}:</h4>
                <p>@foreach($headlines as $text)
              @if($text->name == 'email')
              {{$text->value }}
              @endif
            @endforeach</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>{{app()->getLocale() == 'ar' ? ' الاتصال  ' : 'Call'}}:</h4>
                <p>@foreach($headlines as $text)
              @if($text->name == 'phone')
              {{$text->value }}
              @endif
            @endforeach</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="/email/send" method="post" role="form" class="php-email-form">
            <meta name="csrf-token" content="{{ csrf_token() }}" />
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>
      
  </div>
    
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>follow us on  </h3>
          </div>
        </div>


        <div class="social-links">


        @foreach($headlines as $text)
              @if($text->name == 'twitter')


              <a href="{{$text->value}}" class="twitter"><i class="icofont-twitter"></i></a>
      
              @endif
            @endforeach

            @foreach($headlines as $text)
              @if($text->name == 'facebook')


              <a href="{{$text->value}}" class="facebook"><i class="icofont-facebook"></i></a>
      
              @endif
            @endforeach


            @foreach($headlines as $text)
              @if($text->name == 'instagram')


              <a href="{{$text->value}}" class="instagram"><i class="icofont-instagram"></i></a>
      
              @endif
            @endforeach
            
            
            @foreach($headlines as $text)
              @if($text->name == 'behance')


              <a href="{{$text->value}}" class="behance"><i class="icofont-behance"></i></a>
      
              @endif
            @endforeach


            @foreach($headlines as $text)
              @if($text->name == 'vimeo')


              <a href="{{$text->value}}" class="vimeo"><i class="icofont-vimeo"></i></a>
      
              @endif
            @endforeach
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>dotech-eg</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
     
        Designed by <a href="https://dotech-eg.com">dotech-eg</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
  <script
          
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script type="text/javascript">  
    var url = "{{ route('LangChange') }}";
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });  
</script>
</body>

</html>