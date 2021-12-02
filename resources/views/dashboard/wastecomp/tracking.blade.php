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

<div class="page-section">
  <div class="container">
    

    @if (session()->has('message'))

  <div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">
      x
    </button>

    {{session()->get('message')}}

  </div>
    
  @endif

    <form class="main-form" action="{{url('tracking')}}" method="POST">

      @csrf 
      <div class="row mt-5 ">
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select name="booking" id="departement" class="custom-select">

            @foreach($data as $bookings)

            <option value="{{$bookings->booking_id}}">Booking ID: {{$bookings->booking_id}}</option>

            @endforeach
            
            
          </select>
        </div>
        
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="text" name="resadd" class="form-control" placeholder="Restaurant Address">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" name="drivername" class="form-control" placeholder="Driver's Name">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="text" name="contact" class="form-control" placeholder="Contact No">
        </div>
  
        
      </div>

      <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Generate</button>
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