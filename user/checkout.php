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
    <link rel="stylesheet" href="../css/style.css">

    <title>BINAYAK</title>
    <style>

.row-checkout {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container-checkout {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.checkout-btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.checkout-btn:hover {
  background-color: #45a049;
}



hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row-checkout {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
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
                <a href="mycart.php" class="p-2 pl-0" ><i class="fa-solid fa-cart-shopping"></i>MYCART</a>
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
          </div>
        </div>


        <?php
if(isset($_POST['paymentway'])){
  $payment_id=$_POST['payment_id'];
  $payment_password=$_POST['payment_password'];
 

$select1="SELECT * FROM tbl_payment WHERE payment_id='$payment_id' && payment_password='$payment_password'";
$result=mysqli_query($conn,$select1);

if(mysqli_num_rows($result)>0){
 
  
  
  
  header('location:mycart.php');
 
     
  }else{
    echo"<script>alert('Incorrect email or password!')</script>";
  }
  
      
  
}

?>
        
        </div>
        <div class="col-50">
          <form method="POST">
						<h3>Esewa Payment</h3>
						<label for="fname"><i class="fa fa-user" ></i> Esewa Id</label>
						<input type="text" id="fname" class="form-control" name="payment_id" pattern="^[a-zA-Z ]+$"  >
						<label for="email"><i class="fa fa-envelope"></i> Password</label>
						<input type="text" id="email" name="payment_password" class="form-control" >
            
						
<button style="width:200px; border-radius:8px ;background-color:grey; font-size:19px" name="paymentway">Login</button>
</form>
						
						
					</div>
					
          
      
        
       
    

    
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>