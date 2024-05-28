<?php
include('./includes/connect.php');
include('functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHEMICAL TRADING</title>
    <!-- BOOTSTRAP CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="h.css">
    <!-- FONT AWESOME LINK  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
   img{
         
         display: inline-block;
          position: relative; 
          width: 70px; 
          height: 50px;
           overflow: hidden; 
        
       }
</style>
</head>
<body>
    <!-- nav bar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">logo</a> -->
    <img src="logo.png" alt="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100</a>
        </li>
       
      </ul>
      <form class="d-flex" action="self" method="get">       
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search " name="search_data">
        <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
    </div>
    <!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
        <?php
          if(!isset($_SESSION['username']))
          {
            echo "  <li class='nav-item'>
            <a class='nav-link active' aria-current='page' href='#'>Welcome Guest</a>
          </li>";
          }
          else{
            echo "  <li class='nav-item'>
            <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
          </li>";
            
          }
        if(!isset($_SESSION['username']))
        {
          echo "  <li class='nav-item'>
          <a class='nav-link' href='./users_area/user_login.php'>Login</a>
        </li>";
        }
        else{
          echo "  <li class='nav-item'>
          <a class='nav-link' href='./users_area/logout.php'>Logout</a>
        </li>";
          
        }
        ?>
      </ul>
      </nav>
      <!-- third child -->
      <br><br>
      <div class="bg-light">
        <h3 class="text-center">AASAPURA TRADING COMAPNY</h3>
      </div>
      <br>
      <br>
      <!-- fourth child -->
      <div class="row px-3">
        <div class="col-md-10">
          <!-- Product -->
          <div class="row">
            <!-- fetchung product -->
            <?php
            search_product();
            get_unique_categories();
            get_unique_brands();
            ?>
            
          <!-- row end  -->
             </div>

             <!-- colomn end -->
         </div>
        <div class="col-md-2 bg-secondary p-0">
          <!-- brands to be didsplayed -->
          <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
              <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
            </li>
            <?php
            getbrand();
            
            ?>
            
          </ul> 
          <!-- categories displayed -->
          <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
              <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
            </li>
           
            
            <?php
            get_category();
            ?>
            
          </ul> 
            



        </div>

      </div>
<!-- last child -->
<section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              AASAPURA TRADING COMAPNY,<br> Floor Ronak Complex Shop No: 104/105
              Near Chhaya Chowki Porbandar,360575
            </p>
          </div>
          
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Gujarat,India</p>
            <p><i class="fas fa-envelope me-3">

            </i>tradingcompany@gmail.com
        </p>
            <p><i class="fas fa-phone me-3"></i> 9925575988</p>
            <p><i class="fas fa-print me-3"></i> 9377688920</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2004 Copyright:
      <a class="text-reset fw-bold" href="file:///C:/Users/riyat/OneDrive/Desktop/Bootstrap%20designs/index.html#contact">aasapuratradingcompany.com</command></a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
<!-- BOOTSTRAP JS LINK -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>