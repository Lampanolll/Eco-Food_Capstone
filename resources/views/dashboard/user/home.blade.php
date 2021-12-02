<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Eco Food Cycle</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span>+855 550 000</a>
              <span class="divider">|</span>
              <a href="https://mail.google.com/"><span class="mai-mail text-primary"></span>ecofoodcycle@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://www.facebook.com/"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://twitter.com/home"><span class="mai-logo-twitter"></span></a>
              <a href="https://www.instagram.com/"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="nav-link" href="{{route('user.home')}}"><span class="text-primary">Eco-Food-Cycle</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
           

            @if (Route::has('login'))
            @auth
            
            <li class="nav-item">
                <a class="nav-link"  href="{{route('user.request_booking')}}">Pick-up Request</a>
              
                
              </li>
  
              <li class="nav-item">
                <a class="nav-link"  href=" {{ route('user.request_tracking') }}">Track Request</a>
              </li>

            <li class="nav-item">
              <a class="nav-link"  href=" {{route('user.book')}}">Book now</a>
            </li>

            <li class="nav-item">
              <a class="nav-link"  href=" {{route('user.report')}}">Report</a>
            </li>

            <td>
                <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
            </td>
                

            

            @endauth
                
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  

    
  

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/fdcomp.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Food Waste Management System</span>
        <h1 class="display-4">User Dashboard</h1>
        
      </div>
    </div>
  </div>

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

  

 
    <div class="page-sectiocomp">
      <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Available Food Waste Company</h1>
    
        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
          
          
            
          <div class="item">
            <div class="card-doctor">
              <div class="header">
                <img height="300px" src="companyimage/" alt="">
                <div class="meta">
                  <a href="#"><span class="mai-call"></span></a>
                  <a href="#"><span class="mai-logo-whatsapp"></span></a>
                </div>
              </div>
              <div class="body">
                <p class="text-xl mb-0 text-white"></p>
                <a class="nav-link text-sm text-white" href="{{url('about_us')}}">Ratings & Reviews</a>
              </div>
            </div>
          </div>
    
          
          
        </div>
      </div>
    </div>
    <div class="page-section bg-light " id="doctorSlideshow">
      <div class="container">
        <h1 class="text-center wow fadeInUp">Latest News</h1>
        <div class="row mt-5">
          <div class="col-lg-4 py-2 wow zoomIn">
            <div class="card-blog">
              <div class="header">
                <div class="post-category">
                  <a href="#">newsinfo.inquirer.net</a>
                </div>
                <a href="blog-details.html" class="post-thumb">
                  <img src="../assets/img/news/news1.jpg" alt="">
                </a>
              </div>
              <div class="body">
                <h5 class="post-title"><a href="https://newsinfo.inquirer.net/1505252/the-malady-of-food-waste-millions-starve-as-trash-bins-fill-with-leftovers#:~:text=In%20the%20Philippines%2C%201%2C717%20metric,to%20feed%204.3%20million%20individuals.">The malady of Food Waste</a></h5>
              </div>
            </div>
          </div>
          
          
    
          
    
        </div>
      </div>
    </div>
    <footer class="page-footer">
      <div class="container">
        
  
        <hr>
  
        <p id="copyright">Copyright &copy; 2021 <a href="https://m.tip.edu.ph/" target="_blank">TIP Manila</a>. All right reserved</p>
      </div>
    </footer>
  
  
  

   


    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    
    <script src="../assets/vendor/wow/wow.min.js"></script>
    
    <script src="../assets/js/theme.js"></script>


  
</body>
</html>