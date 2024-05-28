<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONT AWESOME LINK  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="h.css">

    <style>
    .admin_image{
    width: 100px;
    object-fit: contain;
}
.poduct_image{
  width:20%;
  object-fit:contain;
}
/* img{
         
         display: inline-block;
          position: relative; 
          width: 70px; 
          height: 50px;
           overflow: hidden; 
        
       } */
   
    </style>
</head>
<body>
    <!-- navbar -->
    <!-- first child -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
        <!-- <img src="logo.png" alt="logo" >  -->
          <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">WELCOME Guest</a>
                    </li>
                </ul>
</nav>
        </div>
        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage details</h3>
        </div>
        <!-- third child -->
        <div class="row">


        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="#"><img src="../logo.png" alt="" class=admin_image>
            <p class="text-light text-center">Admin name</p></a>
            </div>
            <div class="button text-center">
                
                <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert products</a></button>
                <button class="my-1"><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View products</a></button>
                <button class="my-1"><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1">Insert categories</a></button>
                <button class="my-1"><a href="index.php?view_categories" class="nav-link text-light bg-info my-1">view categories</a></button>
                <button class="my-1"><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brand</a></button>
                <button class="my-1"><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View brand</a></button>
                <button class="my-1"><a href="index.php?list_orders" class="nav-link text-light bg-info my-1">All orders</a></button>
                <button class="my-1"><a href="index.php?list_users" class="nav-link text-light bg-info my-1">List users</a></button>
                <!-- <button class="my-1"><a href="" class="nav-link text-light bg-info my-1">LOGOUT</a></button> -->
            </div>
        </div>
        </div>
</div>
<!-- fourth child -->
<div class="container my-3" >
<?php 
if(isset($_GET['insert_categories'])){
include('insert_catagories.php');
}
if(isset($_GET['insert_brand'])){
include('insert_brand.php');
}
if(isset($_GET['view_products'])){
  include('view_products.php');
  }
  if(isset($_GET['delete_product'])){
    include('delete_product.php');
    }
    if(isset($_GET['view_categories'])){
      include('view_categories.php');
      }
      if(isset($_GET['view_brands'])){
        include('view_brands.php');
        }
        if(isset($_GET['delete_category'])){
          include('delete_category.php');
          }
          if(isset($_GET['delete_brands'])){
            include('delete_brands.php');
            }
            if(isset($_GET['list_orders'])){
              include('list_orders.php');
              }
              if(isset($_GET['list_users'])){
                include('list_users.php');
                }
  
?>
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
              <i class="fas fa-gem me-3"></i>Company Name
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
            <p><i class="fas fa-envelope me-3"></i>tradingcompany@gmail.com</p>
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
   <!-- bootstrap jss link  -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>


</body>
</html>