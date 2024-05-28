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
    <title>CHEMICAL TRADING-Cart</title>
    <!-- BOOTSTRAP CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="h.css">
    <!-- FONT AWESOME LINK  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .cart_img{
    width: 150px;
    height: 150px;
    object-fit:contain;
}
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php  cart_item();?></sup> </a>
        </li>
      </ul>
     
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
      <!-- calling cart  -->
      <?php
      cart();
      ?>
      <!-- third child -->
      <br><br>
      <div class="bg-light">
        <h3 class="text-center">AASAPURA TRADING COMAPNY</h3>
      </div>
      <br>
      <br>
      <!-- fourth child -table-->
      <div class="container">
        <div class="row">
            <form action="" method="post">
            <table class="table table-bordered text-center">
                
                    <!-- php code for display dynamic data -->
                    <?php
                     
                     $get_ip_add = getIPAddress();
                     $total_price=0;
                     $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
                     $result=mysqli_query($con,$cart_query);
                     $result_count=mysqli_num_rows($result);
                     if($result_count>0){
                     echo " <thead>
                    <tr>
                        <th>Product title</th>
                        <th>Product image</th>
                        <th>Quantity</th>
                        <th>Total price</th>
                        <th>Remove</th>
                        <th colspan='2'>Opertaions</th>
                    </tr>
                </thead>
                <tbody>";


                     
                     while($row=mysqli_fetch_array($result))
                     {
                    
                       $product_id=$row['product_id'];
                       $select_products="select * from `product` where product_id='$product_id'";
                       $result_products=mysqli_query($con,$select_products);
                       while($row_product_price=mysqli_fetch_array($result_products))
                       {
                         $product_price=array($row_product_price['product_price']);
                         $price_table=$row_product_price['product_price'];
                         $product_title=$row_product_price['product_title'];
                         $product_image1=$row_product_price['product_image1'];

                       $product_values=array_sum($product_price);
                       $total_price+=$product_values;
                         ?>
                    <tr>
                        <td><?php echo $product_title ?></td>
                        <td><img src="<?php echo $product_image1 ?>" alt="" class="cart_img"></td>
                        <td><input type="text" name="qty" class="form-input w-50"></td>
                        <?php
                        $get_ip_add = getIPAddress();
                       if(isset($_POST['update_cart'])){
                        $quantities=$_POST['qty'];
                        $update_cart="update `cart_details` set quantity=$quantities where 
                        ip_address='$get_ip_add'";
                        //$update_cart="update `cart_details` set quantity=$quantities where ip_address='$get_ip_add'";
                        $result_products_quantity=mysqli_query($con,$update_cart);
                        $total_price=$total_price*$quantities;

                       }

                    ?>
                        <td><?php echo $price_table ?></td>
                        <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                        <td>
                        <!-- <button class="bg-info px-3 py-2 border-0 mx-3">Update</button> -->
                        <input type="submit" value="Update cart" class="bg-info px-3 py-2 border-0 mx-3" name="update_cart">
                         <!-- <button class="bg-info px-3 py-2 border-0 mx-3">Remove</button> -->
                        <input type="submit" value="Remove cart" class="bg-info px-3 py-2 border-0 mx-3" name="remove_cart">
                       
                            
                        </td>
                    </tr>
                    
                        
                  <?php }}}
                  else{
                    echo "<h2 class='text-center text-danger'>Cart is Empty</h2>";
                  } 
                  
                  
                  
                  
                  ?>                     
                </tbody>
            </table>
         
                    
            <!-- subtotal -->
            <div class="d-flex mb-5">
              <?php 
                $get_ip_add = getIPAddress();
                $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
                $result=mysqli_query($con,$cart_query);
                $result_count=mysqli_num_rows($result);
                if($result_count>0){
                  echo "   <h4 class='px-3'>subtotal:<strong class='text-info'><?php echo '$total_price'; ?></strong></h4>
                  <input type='submit' value='Continue shopping' class='bg-info px-3 py-2 border-0 mx-3' name='continue_shopping'>
                 <button class='bg-secondary px-3 py-2 border-0 '>  <a href='./users_area/checkout.php' class='text-light text-decoration-none'>Checkout</a></button>";
                }
                else{
                  echo "  <input type='submit' value='Continue shopping' class='bg-info px-3 py-2 border-0 mx-3' name='continue_shopping'>";
                }
                if(isset($_POST['continue_shopping'])){
                  echo "<script> window.open('index.php','_self')</script>";
                }
              ?>
             

            </div>
        </div>
      </div>
      </form>
      <!-- fuction to remove items -->
      <?php
      function remove_cart_item()
      {
        global $con;
        if(isset($_POST['remove_cart'])){
          foreach($_POST['removeitem'] as $remove_id){
            echo $remove_id;
            $delete_query="Delete from `cart_details` where product_id=$remove_id";
            $run_delete=mysqli_query($con,$delete_query);
            if($run_delete){
              echo "<script>window.open('cart.php','_self')</script>";
            }
          }
        }

      }

       echo $remove_item=remove_cart_item();
      ?>
    
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