<?php
$host='localhost';
$username='root';
$password='';
$db='ecom_project';
$conn=mysqli_connect($host,$username,$password,$db);



?>
<?php
$select=mysqli_query($conn,"SELECT * FROM tbl_category");


?>
<?php
include('../functions/common_functions.php');

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://  fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>BINAYAK</title>
  </head>
  <body>


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <div class="d-flex mr-auto">
                <a href="#" class="d-flex align-items-center mr-4">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">binayak@shop.com</span>
                </a>
                <a href="#" class="d-flex align-items-center mr-auto">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">+977 9869600112</span>
                </a>
              </div>
            </div>
            <div class="col-6 text-right">
              <div class="mr-auto" >
                <a href="logout.php" class="p-2 pl-0" ><span class="icon-user">  LOGOUT</span></a>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="my-0 site-logo"><img src="../images/logo1.png" alt="" height="70px" width="300px"></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li class="active"><a href="#home-section" class="nav-link">HOME</a></li>
                    <li><a href="#classes-section" class="nav-link">ABOUT</a></li>
                    <li class="has-children">
                      <a href="#" class="nav-link">CATEGORIES</a>
                      <ul class="dropdown arrow-top">
                      <?php
while($row=mysqli_fetch_Assoc($select)){




?>
                       


                        <li class="has-children">
                          <a href="#"><?php echo $row['category_name'];?></a>
                          <ul class="dropdown">
                            <li><a href="../productpages/electronics.php">Laptops</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                          </ul>
                        </li>

                        <?php
};
?>

                        
                      

                       

                        
                      </ul>
                    </li>
                    <li><a href="#about-section" class="nav-link">About</a></li>
                    <li><a href="#events-section" class="nav-link">Events</a></li>
                    <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
            <div class="row my-5">
            
            <h3 class="fs-4-mb-3">My CART</h3>
            <form method="POST">
            <div class="col">
                <table class="table bg-white rounded shadow-sm table-hover">
                <?php
                $get_ip_add= getIPAddress();
                $total_price=0;
                $cart_query="SELECT * FROM cart_details WHERE user_id='$get_ip_add'";
                $result=mysqli_query($conn,$cart_query); 
                $result_count=mysqli_num_rows($result);
                if($result_count>0){
                 echo 
                
                 " <thead>
                 <tr>
                     <th>Product Title</th>
                     <th>Product Image</th>
                     <th>Quantity</th>
                     <th>Total Price</th>
                     <th></th>
                     <th colspan='2'>Remove</th>
                 </tr>
             </thead>";
                    while($row=mysqli_fetch_array($result)){
                      $product_id=$row['product_id'];
                      $select_products="SELECT * FROM tbl_product WHERE product_id='$product_id'";
                      $result_products=mysqli_query($conn,$select_products);
                      while($row_product_price=mysqli_fetch_array($result_products)){
                      $product_price=array($row_product_price['product_price']);
                      $price_table=$row_product_price['product_price'];
                      $product_name=$row_product_price['product_name'];
                      $product_photo=$row_product_price['product_photo'];
                      $product_values=array_sum($product_price);
                      $total_price+=$product_values;
                      ?> 
                    <tr>
                        <td><?php echo $product_name?></td>
                        <td> <img src="..\uploaded_image\<?php echo $product_photo?>" alt="" class="cart_img" height="30px" width="30px"> </td>
                        <td><input type="text" name="qty" id=""  class="form-input width-50"></td>
                        <?php
                        global $conn;
                           $get_ip_add= getIPAddress();
                           if(isset($_POST['update_cart'])){
                            $quantities=$_POST['qty'];
                            $update_cart="UPDATE `cart_details` SET quantity=$quantities where ip_address='$get_ip_add'";
                            $result_products_quantity=mysqli_query($conn,$update_cart);
                            $total_price=$total_price*$quantities;
                           }
                        ?>
                        <td><?php echo $price_table?></td>
                        <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                        <td>
                            <input type="submit" value="Update Cart" class=" text-light p-3 py-2 border-0 mx-3" name="update_cart" style="background-color:rgb(143, 62, 62)" >
                            
                            <input type="submit" value="Remove Cart" class=" text-light p-3 py-2 border-0 mx-3" name="remove_cart" style="background-color:rgb(143, 62, 62)">
                        </td>
                    </tr>
                <?php }}
            }
            else{
              echo "<h2 class='text-center text-danger'><i>Cart is empty...!!</i></h2>";
            }
            ?> 
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
            <button class="lastbtn">KEEP SHOPPING</button>
            <button class="lastbtn"><a href="checkout.php">CHECKOUT</a></button>
           
          </form>
           </div>
          </div>
        </div>
        
        </div>
       
        
        
					

					

					
				</div>
			
			
    </div>
    
    <?php
function remove_cart_item(){
  global $conn;
  if(isset($_POST['remove_cart'])){
    foreach($_POST['removeitem'] as $remove_id){
      echo $remove_id;
      $delete_query="DELETE FROM cart_details WHERE product_id=$remove_id";
      $run_delete=mysqli_query($conn,$delete_query);
      if($run_delete){
        echo "<script>window.open('mycart.php','_self')</script>";
      }
    }
  }

}
echo $remove_item=remove_cart_item();

?>

    
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>