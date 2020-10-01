<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Service Managenent System</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="css/all.min.css">

     <!--Google Font-->
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 
     <!--outline icons-->
     <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">
    

   
    <!--Custome CSS-->
    <link rel="stylesheet" href="css/custom.css">

    
</head>
<body>

 <!---------------- Start Navigation ------------------------->
 
 <nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top header-transparent">
    <a href="index.php" class="navbar-brand"><i class="fas fa-cogs i-color"></i> Services's MS</a>
    
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav-menu collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav ml-auto pr-5 custom-nav">
        <li class="nav-item active pl-3"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item pl-3"><a href="#About" class="nav-link">About</a></li>
        <li class="nav-item pl-3"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item pl-3"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item pl-3"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item pl-3"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> 
  
  <!---------------- End Navigation ------------------------->
  
  <!---------------- Start Hero ------------------------->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome To Our SMS</h1>
      <h2>Customer's Happiness is Our Aim.</h2>
      <div class="d-flex">
        <a href="Requester/RequesterLogin.php" class="btn-get-started scrollto mr-5">Login</a>
        <a href="#registration" class="btn-get-started bg-dark scrollto">Sign Up</a>


      </div>
    </div>
  </section>
  <!--------------------------- End Hero---------------- -->





<!--------------------Start introduction---------------->
<section id="About">
<header class="section-header">
<div class="container ">
  <div class="jumbotron back-shadow">
    <h3 class="text-center">About Us</h3>
     </br>
      <div class="row">
        <div class="col-lg-6 pt-3 ">
     
         <h2>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h2>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="fa fa-check i-color"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="fa fa-check i-color"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="fa fa-check i-color"></i> Voluptate repellendus pariatur reprehenderit corporis sint.</li>
              <li><i class="fa fa-check i-color"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <li><i class="fa fa-check i-color"></i> Duis aute irure dolor in dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
        </div>
        <div class="col-lg-6 pt-5 pl-5">
        <img src="images/1.jpg" alt="" class="image">
        </div>
     </div>  
  </div>
</div>
</header>
<!----------------------End introduction---------------------------->


<!-----------------------Start Services ------------------------->
    <header class="section-header">
    <section id="Services" class="services section-bg">
      <div class="container">

        <div >
          </br>
          </br>       
          <h3>Our Services</h3>
          </br>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <i class="fas fa-tv fa-3x text-dark"></i>
              <h4><a href="#">Electronic Appliances</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="box">
              <i class="fas fa-sliders-h fa-3x text-info"></i>
              <h4><a href="#">Preventive Maintenance</a></h4>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="box">
              <i class="fa fa-wrench fa-3x text-primary"></i>
              <h4><a href="#">Fault Repair</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="box">
              <i class="fas fa-cogs fa-3x text-secondary"></i>
              <h4><a href="#">Service</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          
      </div>
    </section>
</header>
<!------------------------ End Services Section --------------------->
 


 <!---------------Start Registration ------------------->
<?php include('UserRegistration.php') ?>
<!----------------End Registration Form------------------>



<!------------------start happy customers----------------->
<header class="section-header">
<div class="jumbotron customers">
  <div class="container">
    <h3 class="text-center">Happy Customers</h3>
    </br>
    <div class="row mt-5">
      <!--Start 1st col-->
      <div class="col-lg-3 col-sm-6 happy">
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="images/avtar1.jpeg" class="img-fluid" alt="avt1">
            <h4 class="card-title">Alex Patterson</h4>
            <p class="card-text">Itaque illo explicabo voluptatum, 
              saepe libero rerum, ad ducimus voluptas nesciunt 
              debitis numquam.</p>
          </div>
        </div>
      </div>
      <!--End 1st col-->
       <!--Start 2nd col-->
       <div class="col-lg-3 col-sm-6 happy">
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="images/avtar2.jpeg" class="img-fluid" alt="avt1">
            <h4 class="card-title">Julliana Jenkins</h4>
            <p class="card-text">Itaque illo explicabo voluptatum, 
              saepe libero rerum, ad ducimus voluptas nesciunt 
              debitis numquam.</p>
          </div>
        </div>
      </div>
      <!--End 2nd col-->
       <!--Start 3rd col-->
       <div class="col-lg-3 col-sm-6 happy">
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="images/avtar3.jpeg" class="img-fluid" alt="avt1">
            <h4 class="card-title">Adrian Ward</h4>
            <p class="card-text">Itaque illo explicabo voluptatum, 
              saepe libero rerum, ad ducimus voluptas nesciunt 
              debitis numquam.</p>
          </div>
        </div>
      </div>
      <!--End 3rd col-->
       <!--Start 4th col-->
       <div class="col-lg-3 col-sm-6 happy">
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="images/avtar4.jpeg" class="img-fluid" alt="avt1">
            <h4 class="card-title">Katelynn Bennett</h4>
            <p class="card-text">Itaque illo explicabo voluptatum, 
              saepe libero rerum, ad ducimus voluptas nesciunt 
              debitis numquam.</p>
          </div>
        </div>
      </div>
      <!--End 4th col-->
    </div>
  </div>
</div>
</header>
<!-------------End  happy customers---------------------->



<!---------------- Contact Section------------------------>
    <header> 
      <section id="Contact" class="contact">
      <div class="container">

    <div class= "section-header">
        <h3>Contact</h3>
        </br>
        </br>
    </div>
      <!---Start 1st col--->
      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>18, Medical Colony, Bhagwan Nagar, Nagpur-27</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p><a href="#"></a>er.priyanka67@gmail.com</br>guptapa@rknec.edu</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+91-8983491817 </br>+0712-2743980</p>
              </div>
            </div>
          </div>

        </div>
        <!---End 1st col--->

         <!---start 2nd col--->
        <?php include('contactform.php') ?>
         <!---end 2nd col--->


      </div>

      </div>
    </section>
</header>
    <!------------------------- End Contact Section ------------------->





 <!-----------------Start footer------------------>
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class=" col-md-6"> 
          <div class="footer-info">
              <h3 class="i-color">SMS</h3>
              <p>
              18, Medical Colony,<br>
                  Bhagwan Nagar,<br>
                  Nagpur-27<br><br>
                <strong>Phone:</strong> +91-8983491817<br>
                <strong>Email:</strong> er.priyanka67@gmail.com<br>
              </p>
            <div class="social-links">
              <span class="pr-2"> Follow Us:</span>
              <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
              <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
              <a href="#" class="google"><i class="fab fa-google-plus-g"></i></a>
            </div>
          </div>
        </div>   
        
        <div class="col-md-6 text-right">
           <a href="Admin/login.php" class="btn">Admin Login</a>
            
        </div>
        </div>
      </div>
      
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Priyanka Gupta</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <strong>Priyanka Gupta.</strong></a>
      </div>
    </div>
  </footer>

<!-------------------------------End footer------------------------>


 <!---Javascript---->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/all.min.js"></script> 
 <script src="js/main.js"></script> 
 
      
</body>
</html>