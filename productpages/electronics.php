<?php
$host='localhost';
$username='root';
$password='';
$db='ecom_project';
$conn=mysqli_connect($host,$username,$password,$db);
include('../functions/common_functions.php');
?>
<?php
session_start();

 

?>
<?php

if (isset($_GET['add_to_cart'])) {
  global $conn;
  $get_ip_add = getIPAddress();
  $product_id = $_GET['add_to_cart'];

  $select_query = "SELECT * FROM cart_details WHERE user_id='$get_ip_add' and product_id=$product_id";
  $result_query = mysqli_query($conn, $select_query);
  $num_of_rows = mysqli_num_rows($result_query);
  if ($num_of_rows > 0) {
      echo "<script>alert('This item is already present inside cart.')</script>";
      echo "<script>window.open('../productpages/electronics.php','_self')</script>";
  } else {
      $insert_query = "INSERT INTO cart_details (product_id,user_id,quantity)
    VALUES($product_id,'$get_ip_add',0)";
      $result_query = mysqli_query($conn, $insert_query);
      echo "<script>alert('Item is added to cart.')</script>";
      echo "<script>window.open('../productpages/electronics.php','_self')</script>";
  };
};
?>    

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="product.css">
    <title>BINAYAK</title>
    
   
    </head>
    <body >
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
          <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
          </symbol>
        </svg>
        <div class="container py-3">
          <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-4"><img src="../images/logo1.png"  height="55px" width="250px"></span>
              </a>
        
              <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="../user/mycart.php"><i class="fa-solid fa-cart-shopping"></i>&ensp;<sup><?php cart_item(); ?> </sup>Your Cart</a>
                
              </nav>
            </div>
        
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
              <h1 class="display-6 fw-normal" >Dell</h1>
              <p class="fs-5 text-muted">Let's Use It Together</p>
            </div>
          </header>
</div>
<main>
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
<?php
$select=mysqli_query($conn,"SELECT * FROM tbl_product");

  while ($row = mysqli_fetch_assoc($select)) {
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $product_photo = $row['product_photo'];
    $product_price = $row['product_price'];
   
?>
            
 <form method="GET">           
<div class="col">
                  <div class="card-header py-3">
                  <h4 class="my-0 fw-normal"><?php echo $row['product_name'];?></h4>
                  </div>
                  <div class="card-body">
                    <img src="..\uploaded_image\<?php echo $row['product_photo'];?>" height="150px" width="300px">
                    <h5 class="room-no" >Model:<?php echo $row['product_model'];?></h5>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>Product Price:<?php echo $row['product_price'];?></li>
                      <a href='electronics.php?add_to_cart=<?php echo $row['product_id'];?>' class='btn btn-warning'>Add to cart</a>

                      <!-- <input type="submit" class=" btn " height="100px" name="add_to_cart" value="Add to Cart"/> -->

                      

                    </ul>
                  </div>
                </div>
                </form> 
              
<?php
};
?>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
    </html>

