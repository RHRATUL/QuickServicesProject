<?php
require('db.php');
include("auth_session.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Font link -->

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,200;0,300;0,500;0,600;0,700;0,800;1,700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Css file-->
    <link rel="stylesheet" href="/css/App.css">

<!--Font Awesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <title>Cleaning Services</title>
  </head>
  <body>
   
    <!-- Nav Bar  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="dashboard.php"><img src="images\Logo.png"  width="130" height="60" class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="electric.php">Electrician</a>
                <a class="dropdown-item" href="#">Ac/Fridge Repair</a>
                <a class="dropdown-item" href="plumber.php">Plumber</a>
                <a class="dropdown-item" href="clean.php">Cleaning</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="tution.php">Tution</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="login.php" tabindex="-1" aria-disabled="false" target="_parent"  >Login</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="logout.php" tabindex="-1" aria-disabled="false" target="_parent"  >Logout</a>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

<!-- Image Section -->
<div class="jumbotron jumbotron-fluid header bg-secondary ">
<div class="container">
 <div class="row">

 <div class="col-6">
<img class="img-fluid rounded " src="https://s3.ap-south-1.amazonaws.com/cdn-shebaxyz/images/categories_images/thumbs/1583775647_homecleaning.jpg" alt="">
 </div>
 <div class="col-6">

 <!-- list -->
 <ul class="list-group">
  <li class=" text-center list-group-item list-group-item-danger text-dark "> <i class="fas fa-tools  "  ></i> Home Cleaning Services</li>


  <li class="list-group-item list-group-item-warning"> <i class="fas fa-check-circle mr-5 "></i>Trusted & Reliable Cleaner</li>
 
  <li class="list-group-item list-group-item-warning"> <i class="fas fa-check-circle mr-5 "></i>  Well-equipped & Well-prepared Specialists for COVID-19</li>
  <li class="list-group-item list-group-item-warning"> <i class="fas fa-check-circle mr-5 "></i> Expert Cleaner</li>
  <li class="list-group-item list-group-item-warning"> <i class="fas fa-check-circle mr-5 "></i> Use Digital tools</li>

</ul>
</div>

 </div>
</div>
      </div>

      <!-- Service Overview -->

<div class="container" >
<h4>Overview Of Home Cleaning</h4>
</div>

<div class="container">

<div class="row">
  <div class="col-4">
  <h3>What's Expert?</h3>
  <ul>
    <li style="font-size:20px" >Expert Cleaner</li>
    <li style="font-size:20px" >Usage of professional cleaning tools</li>
    <li style="font-size:20px" >Reasonable price</li>
    <li style="font-size:20px" >Removal of deep</li>
  </ul>
  </div>


  <div class="col-4">
  <h3>What's Excluded?</h3>
  <ul>
    <li style="font-size:20px" >Repairing</li>
   

  </ul>
  </div>


  <div class="col-4">
  <h3>Our Home Cleaning Services</h3>
  <ul>
    <li style="font-size:20px" >Bathroom Deep Cleaning</li>
    <li style="font-size:20px" >Sofa/Chair Cleaning</li>
    <li style="font-size:20px" >Kitchen Cleaning</li>
    <li style="font-size:20px" >Carpet Cleaning</li>
    <li style="font-size:20px" >Window Cleaning</li>
    <li style="font-size:20px" >Room Cleaning</li>
    <li style="font-size:20px" >Fridge Cleaning</li>
    <li style="font-size:20px" >Ceiling Fan Cleaning</li>
  </ul>
  </div>

</div>

</div>

     
<!-- FAQ / accordion -->
     
<div class="container">
<h2>FAQ</h2>
<div class="accordion" id="accordionExample">
    <div class="card">
    
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            DO i have to  pay if i don't any services ? 
          </button>
        </h2>
      </div>
  
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            If you don’t avail any services for your AC after our Service Provider send a technician at your doorstep then you only have to pay the visiting charge which is BDT 100.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Do i have pay advance money Before avail services ?
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
            Of course not! After service completion you will receive a text on your mobile from Quick Services then you have to pay through Online or Cash on Delivery.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        What if they damage my AC ?
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
            Our professional Service Providers have expert and skilled AC technicians. If they occur any damages to your AC during repairing you will get proper compensation after proper investigation. However, your complaint for any pre-damaged problems will not be considered
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Details  -->

<div class="container">

<h2>Details</h2>
<p>
At Quick service you can hire expert AC repair service near you. Our professional Service Providers will give you the best AC repair service. From general inspection, to changing AC parts you can avail every AC related service within a few moments.

<h4>About Quick Service AC Repairing Service</h4>

<p>Quick Service is the largest marketplace in Bangladesh where we serve you with every possible service. AC Repairing service is one of our services to repair all types of AC related problems. We deliver expert and AC repair services with integrity from our professional service providers.
</p>

</p>
</div>
       
<div class="container">
<h4>Our home cleaning services:</h4>
<ul>
  <li>Bathroom Deep Cleaning</li>
  <li>Sofa/Chair Cleaning</li>
  <li>Kitchen Cleaning</li>
  <li>Carpet Cleaning</li>
  <li style="font-size:20px" >Window Cleaning</li>
    <li style="font-size:20px" >Room Cleaning</li>
    <li style="font-size:20px" >Fridge Cleaning</li>
    <li style="font-size:20px" >Ceiling Fan Cleaning</li>
  
</ul>

</div>

<div class="container">
<h4>Terms & Pricing</h4>
<ul>
  <li>Pricing policy: Price mentioned are based on minimum quantity stated extra charge will be added if the work scope increases.</li>
  <li>Warranty: 7 days service warranty is given by Sheba.xyz.  </li>
  <li>Payment: After service completion – respective customers will pay through online or COD. After payment please make sure, you have received the SMS containing the money receipt.</li>
 
  
</ul>



</div>




<!-- Order Now  -->
<div class="jumbotron">
  <h1 class="display-4"> Order Now</h1>
  <p class="lead">For Servicing Please Contact Below</p>
  <hr class="my-4">
  <p>Phone :0179663958</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Phone</a>
</div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>