<?php
if(isset($_GET['delete_brands'])){
    $delete_brands=$_GET['delete_brands'];

    $delete_brands="Delete from `brands` where brand_id=$delete_brands";
    $result=mysqli_query($con,$delete_brands);
    if($result){
        echo "<script>alert('Brand is deleted successfully')</script>";
        echo "<script>window.open('./index.php','_self')</script>";
    }
}


?>