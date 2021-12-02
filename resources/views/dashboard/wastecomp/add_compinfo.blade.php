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
      <h1 class="text-center wow fadeInUp">ADD INFO</h1>

      @if (session()->has('message'))

  <div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">
      x
    </button>

    {{session()->get('message')}}

  </div>
    
  @endif

      <form action="{{route('wastecomp.upload')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Company Email</label>
          <input class="form-control" type="text" style="color:black" name="name" placeholder="Write Company Email" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Company Email</label>
          <input class="form-control" type="text" style="color:black" name="company_name" placeholder="Write Company Email" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Company Email</label>
          <input class="form-control" type="text" style="color:black" name="email" placeholder="Write Company Email" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Company Email</label>
          <input class="form-control" type="text" style="color:black" name="rating" placeholder="Write Company Email" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Company Email</label>
          <input class="form-control" type="text" style="color:black" name="review" placeholder="Write Company Email" required="">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Company Email</label>
          <input class="form-control" type="text" style="color:black" name="company_email" placeholder="Write Company Email" required="">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Company Email</label>
          <input class="form-control" type="text" style="color:black" name="password" placeholder="Write Company Email" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Contact Number</label>
          <input class="form-control" type="number" style="color:black" name="number" placeholder="Write Contact Number" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Company Address</label>
          <input class="form-control" type="text" style="color:black" name="address" placeholder="Write Company Address" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Company Image</label>
          <input class="form-control" type="file" name="companyimage" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Description</label>
          <input class="form-control" type="text" style="color:black" name="company_descript" placeholder="Write Company Description" required="">
        </div>

        
          <input type="submit" class="btn btn-primary mt-3 wow zoomIn">
        
        
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