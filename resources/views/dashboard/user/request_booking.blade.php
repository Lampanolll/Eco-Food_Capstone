<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

  <!-- ETO YUNG SA TABLE -->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Requested <b>Booking</b></h2>
     </div>
                </div>
            </div>
            <table class="table table-striped table-hover ">
                <thead>
                    <tr>
      
                        <th>Manager Name</th>
                        <th>Restaurant Name</th>
                        <th>Address</th>
                        <th>Actions</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                
                <tbody>
                    <tr>
      
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#listofdetails" class="edit" data-toggle="modal">SEE DETAILS</i></a>
                        </td>
                        <td><a class="bt btn-danger" onclick="return confirm('Do you want to cancel request?')"href="">Cancel</a></td>
                    </tr>
                </tbody>
               
            </table>
  
        </div>
    </div>
 
 <!-- ETO YUNG SA SEE DETAILS -->
 <div id="listofdetails" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">      
      <h4 class="modal-title"><b>Requested Booking Details</b></h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      

       
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
</style>





                                                                 
