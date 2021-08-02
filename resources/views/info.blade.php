<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>publish brand</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Remember - v2.2.1
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

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
          <li><a href="#team">{{app()->getLocale() == 'ar' ? 'الفريق' : 'Team'}}</a></li>
          <li><a href="#portfolio">{{app()->getLocale() == 'ar' ? 'اعمالنا ' : 'Portfolio'}}</a></li>
          <li><a href="#services">{{app()->getLocale() == 'ar' ? 'الخدمات ' : 'Services'}}</a></li>
          <li><a href="#about">{{app()->getLocale() == 'ar' ? 'من نحن ' : 'About Us'}}</a></li>
          <li class="active"><a href="/">{{app()->getLocale() == 'ar' ? 'الرئيسية' : 'home'}}</a></li>

        @else 

          <li class="active"><a href="/">{{app()->getLocale() == 'ar' ? 'الرئيسية' : 'home'}}</a></li>
          <li><a href="#about">{{app()->getLocale() == 'ar' ? 'من نحن ' : 'About Us'}}</a></li>
          <li><a href="#services">{{app()->getLocale() == 'ar' ? 'الخدمات ' : 'Services'}}</a></li>
          <li><a href="#portfolio">{{app()->getLocale() == 'ar' ? 'اعمالنا ' : 'Portfolio'}}</a></li>
          <li><a href="#team">{{app()->getLocale() == 'ar' ? 'الفريق' : 'Team'}}</a></li>
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

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            @foreach($portfolio->images as $portfolioImg)
            <img src="{{asset($portfolioImg->image)}}" class="img-fluid" alt="">
            @endforeach
          </div>

          <div class="portfolio-info" style="
    text-align: right;
">
            <h3>    {{app()->getLocale() == 'ar' ?  'تفاصيل المشروع  ' : 'Project information'}}</h3>
            <ul>
              <li><strong>{{app()->getLocale() == 'ar' ?  'القسم  ' : 'Category'}}</strong>:{{app()->getLocale() == 'ar' ? $portfolio->services->name_ar : $portfolio->services->name}}</li>
              <li><strong>{{app()->getLocale() == 'ar' ?  'العميل  ' : 'Client'}}</strong>: {{$portfolio->client}}</li>
              <li><strong>{{app()->getLocale() == 'ar' ?  'التاريخ ' : 'Project date '}} </strong>: {{$portfolio->date}}</li>
              <li><strong>{{app()->getLocale() == 'ar' ?  'الرابط ' : 'Project URL '}} </strong>: <a href="{{$portfolio->url}}">project </a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>{{app()->getLocale() == 'ar' ?  'وصف المشروع  ' : 'Project description'}}</h2>
          <p>
            {{$portfolio->description}}
          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
  
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