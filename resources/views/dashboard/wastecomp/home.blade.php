<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Eco Food Cycle</title>

  @include('dashboard.user.css')

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
        <a class="nav-link" href="{{route('wastecomp.home')}}"><span class="text-primary">Eco-Food-Cycle</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
           

            @if (Route::has('login'))
            @auth

            <li class="nav-item">
              <a class="nav-link"  href=" {{route('wastecomp.home')}}">Home</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link"  href="{{route('wastecomp.showbooking')}}">Pick-up Request</a>
              
                
              </li>
  
              <li class="nav-item">
                <a class="nav-link"  href=" {{ route('wastecomp.showtracking') }}">Track Request</a>
              </li>

            <li class="nav-item">
              <a class="nav-link"  href=" {{route('wastecomp.showbooking')}}">Book now</a>
            </li>

            <li class="nav-item">
              <a class="nav-link"  href=" {{route('wastecomp.addcompinfo')}}">Company Info</a>
            </li>

            <td>
                <a href="{{ route('wastecomp.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form action="{{ route('wastecomp.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
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
        <h1 class="display-4">Foodwaste Facility Dashboard</h1>
        
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

  

 
    @include('dashboard.wastecomp.company')
  @include('dashboard.wastecomp.news')
  @include('dashboard.wastecomp.footer')
  
  
  

   


  @include('dashboard.wastecomp.script')


  
</body>
</html>