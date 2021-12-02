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

<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Book Now</h1>

      @if (session()->has('message'))

  <div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">
      x
    </button>

    {{session()->get('message')}}

  </div>
    
  @endif

      <form class="main-form" action="{{route('user.booking')}}" method="POST">

        @csrf 
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="restaurantname" class="form-control" placeholder="Restaurant Name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="contact" class="form-control" placeholder="Contact No">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="address" class="form-control" placeholder="Address">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="city" class="form-control" placeholder="City of Manila">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <select name="district" id="disctrict" placeholder="District" class="custom-select">
              <option value="1">District 1</option>
              <option value="2">District 2</option>
              <option value="3">District 3</option>
              <option value="4">District 4</option>
              <option value="5">District 5</option>
              <option value="6">District 6</option>
              <option value="7">District 7</option>
              <option value="8">District 8</option>
              <option value="9">District 9</option>
              <option value="10">District 10</option>
              <option value="11">District 11</option>
              <option value="12">District 12</option>
              <option value="13">District 13</option>
              <option value="14">District 14</option>
              <option value="15">District 15</option>
              <option value="16">District 16</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="foodtype" id="foodtype" class="custom-select">
              <option value="meat">Meat</option>
              <option value="dairy">Dairy</option>
              <option value="roots and tubers">Roots and Tubers</option>
              <option value="cereals">Cereals</option>
              <option value="fruits & vegetables">Fruits & Vegetables</option>
              <option value="fish & seafoods">Fish & Seafoods</option>
              <option value="oil seeds & pulses">Oil seeds & Pulses</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            
            <input type="time" name="time" class="form-control">
              
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="compinfo" id="departement" class="custom-select">

              
              
              
            </select>
          </div>

          
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div>

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>