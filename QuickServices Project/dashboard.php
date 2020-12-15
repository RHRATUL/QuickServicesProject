<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,200;0,300;0,500;0,600;0,700;0,800;1,700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Css file-->
    <link rel="stylesheet" href="/css/App.css">

<!--Font Awesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <title>Quick Services</title>


</head>
<body>
   

<!-- Nav Bar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="images/Logo.png"  width="130" height="60" class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Electrician</a>
                <a class="dropdown-item" href="#">Ac/Fridge Repair</a>
                <a class="dropdown-item" href="#">Plumber</a>
                <a class="dropdown-item" href="#">Cleaning</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Tution</a>
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

      <!-- Header Section -->
      <div class="jumbotron jumbotron-fluid header bg-secondary ">
        <div class="container">
        <h4>Hey, <?php echo $_SESSION['username']; ?>!</h4>
          <h1 class="display-4 text-light">Your Professional Assistant </h1>
          <p class="lead">One-stop solution for your services. Order any service, anytime.</p>
        </div>
      </div>

      <!-- Marquee Section -->
     <div class="container">
      <marquee style="color: red; font-weight: 600; font-size: 30px;" width="100%" direction="left" height="100px" scrollamount="12">
       *** Some Services Reduce for Covid 19 Pandemic We are sorry For that And Hope We will come back Soon with full Services ***
        </marquee>
     </div>

      <!-- Trending Items Section -->
      <div class="container">
        <h1 id="trending" >Trending</h1>

        <div class="row row-cols-1 row-cols-md-4  ">

            
            <div class="col mb-4 ">
                <a class="card-link" href="">
              <div class="card h-60 card-1 ">
                <img src="https://s3.ap-south-1.amazonaws.com/cdn-shebaxyz/images/categories_images/thumbs/1594641454_acrepairservices.jpg" class="card-img-top img-fluid " alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center ">Electrician</h5>
                  
                </div>
              </div>
            </a>
            </div>
        

            <div class="col mb-4 ">
                <a class="card-link" href="">
              <div class="card h-60 card-1 ">
                <img src="https://s3.ap-south-1.amazonaws.com/cdn-shebaxyz/images/categories_images/thumbs/1583823104_plumbingsanitaryservices.jpg" class="card-img-top img-fluid " alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center ">Plumber</h5>
                  
                </div>
              </div>
            </a>
            </div>
            <div class="col mb-4 ">
                <a class="card-link" href="">
              <div class="card h-60 card-1 ">
                <img src="images/tutor.jpg" class="card-img-top img-fluid " alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center ">Tuition</h5>
                  
                </div>
              </div>
            </a>
            </div>
            <div class="col mb-4 ">
                <a class="card-link" href="">
              <div class="card h-60 card-1 ">
                <img src="https://s3.ap-south-1.amazonaws.com/cdn-shebaxyz/images/categories_images/thumbs/1583775647_homecleaning.jpg" class="card-img-top img-fluid " alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center ">Cleaning</h5>
                  
                </div>
              </div>
            </a>
            </div>
          </div>

      </div>

       <!-- Recommended Items Section -->
       <div class="container mt-4">
        <h1 id="trending"  >Recommended</h1>

        <div class="row row-cols-1 row-cols-md-4  ">

            
            <div class="col mb-4 ">
                <a class="card-link" href="">
              <div class="card h-60 card-1 ">
                <img src="https://s3.ap-south-1.amazonaws.com/cdn-shebaxyz/images/categories_images/thumbs/1583823104_plumbingsanitaryservices.jpg" class="card-img-top img-fluid " alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center ">Plumber</h5>
                  
                </div>
              </div>
            </a>
            </div>
        

            <div class="col mb-4 ">
                <a class="card-link" href="">
              <div class="card h-60 card-1 ">
                <img src="images/tutor.jpg" class="card-img-top img-fluid " alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center ">Tuition</h5>
                  
                </div>
              </div>
            </a>
            </div>
            <div class="col mb-4 ">
                <a class="card-link" href="">
              <div class="card h-60 card-1 ">
                <img src="https://s3.ap-south-1.amazonaws.com/cdn-shebaxyz/images/categories_images/thumbs/1583775647_homecleaning.jpg" class="card-img-top img-fluid " alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center ">Cleaning</h5>
                  
                </div>
              </div>
            </a>
            </div>
            <div class="col mb-4 ">
                <a class="card-link" href="">
              <div class="card h-60 card-1 ">
                <img src="https://s3.ap-south-1.amazonaws.com/cdn-shebaxyz/images/categories_images/thumbs/1594641454_acrepairservices.jpg" class="card-img-top img-fluid " alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center ">Electrician</h5>
                  
                </div>
              </div>
            </a>
            </div>
          </div>

      </div>


<!-- why you choose us section -->
<div class="container mt-5">

<h6>Why Choose Us ?</h6>
<h4>Because we care about your safety..</h4>
  <div class="row ">


    <div  id="sec1" class="col-6 ">

      <div class="row">

        <div class="card-group">

       
       
        <div class="col-6 ">
          <div class="card bg-dark">
            <div class="card-body">
              <div class="card-text text-light">
                <h6><i style="color: red; font-size: 50px; " class="fas fa-mitten"></i> Ensuring Gloves</h6>
              </div>
            </div>
          </div>
        </div>

 <div class="col-6">
          <div class="card bg-success">
            <div class="card-body">
              <div class="card-text">
          <h6><i style="color: red; font-size: 50px;" class="fas fa-pump-medical"></i>  Sanitising
            Hands &
            Equipment</h6>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6 mt-4">
          <div class="card bg-info">
            <div class="card-body">
              <div class="card-text">
               <h6><i style="color: red; font-size: 50px;" class="fas fa-phone-square"></i>  24/7
                Support</h6>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6  mt-4">
          <div class="card bg-warning">
            <div class="card-body">
              <div class="card-text">
              <h6> <i style="color: red; font-size: 50px;" class="fas fa-mask"></i> Ensuring Mask</h6>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    
    </div>
  
    <div id="sec2" class="col-6 d-none d-sm-block ">
  
<img class="img img-fluid" src="images/Servicing.png" alt="">
  
    </div>
  </div>

</div>







    <!-- Serve services -->
    <div class="jumbotron jumbotron-fluid header mt-4 ">
      <div class="card-group">
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">15,000+</h5>
            <p class="card-text">Services Providers</p>
            
          </div>
        </div>


        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">10,000+</h5>
            <p class="card-text">Orders Served</p>
            
          </div>
        </div>


      <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">1,000+</h5>
            <p class="card-text">5 * Received</p>
            
          </div>
        </div>


      </div>

    </div>
     

    <!-- Customer Coments -->

    <h3>What Customer Says About Our Services</h3>
    
    <div class="row row-cols-1 row-cols-md-2  mt-4">
      <div class="col mb-4">
        <div class="card bg-info ">
         
          <div class="card-body">
            <h5 class="card-title">Rashidul Hasan</h5>
            <p class="card-text">This is Very Good Services</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card bg-danger ">
        
          <div class="card-body">
            <h5 class="card-title">Md Mamun</h5>
            <p class="card-text">Amaizing Servicing And I Recommended
            </p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card bg-warning ">
     
          <div class="card-body">
            <h5 class="card-title">Abed Ali</h5>
            <p class="card-text">Purai Jusss Services</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card bg-success ">
          
          <div class="card-body">
            <h5 class="card-title">Sidduque Khan</h5>
            <p class="card-text">Services Onek Valo Ami 100/120 dibo</p>
          </div>
        </div>
      </div>
    </div>


<!-- Customer Services -->

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col-6">
<h3>Can’t find your desired service? Let us know 24/7 in 23333.</h3>

<button class="btn btn-success mt-4 ">Request a Services</button>
<button class="btn btn-outline-warning  mt-4">Customer Care : 23333</button>
      </div>
      <div class="col-6">
        <img src="https://cdn-marketplacexyz.s3.ap-south-1.amazonaws.com/sheba_xyz/images/jpg/service-request.png" alt="" class="float-right" >
      </div>
    </div>
  </div>
</div>

<!-- Footer -->

<div class="jumbotron jumbotron-fluid bg-info ">
  <div class="container">
    <h4 class="text text-center mb-4" >Project Submitted By </h4>
  <div class="row">
 
    <div class="col-6 text-light ">
      
      <h6>Rashidul Hasan</h6>
      <h6>181-35-278</h6>
      <h6>Pc - A </h6>
      <h6>Dept of software Engineering , Daffodil International University</h6>
    </div>

    <div class="col-6 text-light ">
      <h6>Md Al Mamun</h6>
      <h6>181-35-300</h6>
      <h6>Pc - A </h6>
      <h6>Dept of software Engineering , Daffodil International University</h6>
    </div>

   
  </div>
  </div>
</div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>
