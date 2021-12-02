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

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <a class="navbar-brand" href="/"><span class="text-primary">Eco-Food-Cycle</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
           

            @if (Route::has('login'))
            @auth

            <li class="nav-item">
                <a class="nav-link"  href="{{url('show_tracking')}}">View Tracking</a>
              
                
              </li>
              
              <li class="nav-item">
                <a class="nav-link"  href="{{url('show_booking')}}">Pick-up Request</a>
              
                
              </li>
            
              <li class="nav-item">
                <a class="nav-link"  href="{{url('add_compinfo_view')}}">Company Profile</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link"  href=" {{url('send_report')}}">Report</a>
              </li>

            <x-app-layout>
            </x-app-layout>
                
            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth
                
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <!-- ETO YUNG SA TABLE -->
  <div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
  <h2>Requested <b>Tracking</b></h2>
 </div>
            </div>
        </div>
        <table class="table table-striped table-hover ">
            <thead>
                <tr>
  
                    <th>Tracking ID</th>
                    <th>Driver's Name</th>
                    <th>Restaurant Address</th>
                    <th>Contact</th>
                    <th>Booking ID</th>
                    <th>Status</th>
                </tr>
            </thead>

            @foreach ( $data as $tracking )
            <tbody>
                <tr>
                  <td>{{$tracking->trackingid}}</td>
                    <td>{{$tracking->drivername}}</td>
                    <td>{{$tracking->resadd}}</td>
                    <td>{{$tracking->contact}}</td>
                    <td><a href="#listofdetails" class="edit" data-toggle="modal">{{$tracking->booking}}</i></td>
                    <td><a href="#trackingstatus" class="edit" data-toggle="modal">{{$tracking->status}}</i></td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
</div>

<!-- ETO YUNG SA SEE DETAILS -->
<div id="listofdetails" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
 <div class="modal-header">      
  <h4 class="modal-title"><b>Booking Details</b></h4>
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 </div>
 <div class="modal-body">     
  @foreach ( $request as $booking )

   <label>Manager Name:<p>{{$booking->name}}</p></label></br>
   <label>Restaurant Name:<p>{{$booking->restaurantname}}</p></label></br>
   <label>Address:<p>{{$booking->address}}</p></label></br>
   <label>District:<p>{{$booking->district}}</p></label></br>
   <label>City:<p>{{$booking->city}}</p></label></br>
   <label>Email:<p>{{$booking->email}}</p></label></br>
   <label>Contact No.:<p>{{$booking->contact}}</p></label></br>
   <label>Type of Foodwaste:<p>{{$booking->foodtype}}</p></label></br>
   <label>Foodwaste Facility:<p>{{$booking->compinfo}}</p></label></br>
   <label>Time:<p>2:33 am</p></label></br>
   <label>Date:<p>{{$booking->date}}</p></label></br>
   <label>Message:<p>{{$booking->message}}</p></label></br>
   @endforeach
  </div>     
 

</div>
</div>
</div>

<div id="trackingstatus" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">      
      <h4 class="modal-title"><b>Tracking Status</b></h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
        <div class="progress-track">
            <ul id="progressbar">
                <li class="step0 active " id="step1">Ordered</li>
                <li class="step0 active text-center" id="step2">Shipped</li>
                <li class="step0 active text-right" id="step3">On the way</li>
                <li class="step0 text-right" id="step4">Delivered</li>
            </ul>
        </div>
      </div>     
     
    
    </div>
    </div>
    </div>


    

  

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>

<style type="text/css">
  body {
color: #566787;
background: #f5f5f5;
font-family: 'Varela Round', sans-serif;
font-size: 13px;
}
.table-wrapper {
      background: #fff;
      padding: 20px 25px;
      margin: 25px 0;
      border-radius:15px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  }
.table-title {        
padding-bottom: 15px;
background: linear-gradient(40deg, #105652, #05ffa3) !important;
color: #fff;
padding: 16px 30px;
margin: -20px -25px 10px;
border-radius: 15px 15px 0 0;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  }
  .table-title h2 {
margin: 5px 0 0;
font-size: 24px;
}

  table.table tr th, table.table tr td {
border-color: #e9e9e9;
padding: 12px 15px;
vertical-align: middle;
  }

  table.table-striped tbody tr:nth-of-type(odd) {
   background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
background: #f5f5f5;
}
  table.table td:last-child i {
opacity: 0.9;
font-size: 22px;
      margin: 0 5px;
  }
table.table td a {
font-weight: bold;
color: #566787;
display: inline-block;
text-decoration: none;
outline: none !important;
}

table.table td a.edit {
      color: #105652;
  }
  

/* Modal styles */
.modal .modal-dialog {
max-width: 600px;

}
.modal .modal-header{
border-radius: 9px;
background: #ecf0f1;

}
.modal .modal-header, .modal .modal-body, .modal {
font-family: 'Varela Round', sans-serif;
color: #566787;
font-size: 15px;
padding: 20px 30px;
}
.modal .modal-content {
border-radius: 9px;
}

.modal .modal-title {
font-family: 'Varela Round', sans-serif;
  display: inline-block;
}

.modal p{
margin-left: 15px;
font-family: 'Varela Round', sans-serif;
color: #566787;
font-weight: normal;
font-size: 14px;
}


/* .modal form label {
font-weight: normal;
}  */

/*tracking*/


.card {
    margin: auto;
    width: 38%;
    max-width: 600px;
    padding: 4vh 0;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-top: 3px solid rgb(252, 103, 49);
    border-bottom: 3px solid rgb(252, 103, 49);
    border-left: none;
    border-right: none
}

@media(max-width:768px) {
    .card {
        width: 90%
    }
}

.title {
    color: #105652;
    font-weight: 600;
    margin-bottom: 2vh;
    padding: 0 8%;
    font-size: initial
}

#details {
    font-weight: 400
}

.info {
    padding: 5% 8%
}

.info .col-5 {
    padding: 0
}

#heading {
    color: grey;
    line-height: 6vh
}

.pricing {
    background-color: #ddd3;
    padding: 2vh 8%;
    font-weight: 400;
    line-height: 2.5
}

.pricing .col-3 {
    padding: 0
}

.total {
    padding: 2vh 8%;
    color: #105652;
    font-weight: bold
}

.total .col-3 {
    padding: 0
}

.footer {
    padding: 0 8%;
    font-size: x-small;
    color: black
}

.footer img {
    height: 5vh;
    opacity: 0.2
}

.footer a {
    color: #105652;
}

.footer .col-10,
.col-2 {
    display: flex;
    padding: 3vh 0 0;
    align-items: center
}

.footer .row {
    margin: 0
}

#progressbar {
    margin-bottom: 3vh;
    overflow: hidden;
    color: #105652;
    padding-left: 0px;
    margin-top: 3vh
}

#progressbar li {
    list-style-type: none;
    font-size: x-small;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
    color: rgb(160, 159, 159)
}

#progressbar #step1:before {
    content: "";
    color: #105652;
    width: 5px;
    height: 5px;
    margin-left: 0px !important
}

#progressbar #step2:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-left: 32%
}

#progressbar #step3:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-right: 32%
}

#progressbar #step4:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-right: 0px !important
}

#progressbar li:before {
    line-height: 29px;
    display: block;
    font-size: 12px;
    background: #ddd;
    border-radius: 50%;
    margin: auto;
    z-index: -1;
    margin-bottom: 1vh
}

#progressbar li:after {
    content: '';
    height: 2px;
    background: #ddd;
    position: absolute;
    left: 0%;
    right: 0%;
    margin-bottom: 2vh;
    top: 1px;
    z-index: 1
}

.progress-track {
    padding: 0 8%
}

#progressbar li:nth-child(2):after {
    margin-right: auto
}

#progressbar li:nth-child(1):after {
    margin: auto
}

#progressbar li:nth-child(3):after {
    float: left;
    width: 68%
}

#progressbar li:nth-child(4):after {
    margin-left: auto;
    width: 132%
}

#progressbar li.active {
    color: black
    
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #105652;
    
}
</style>