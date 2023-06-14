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
                <a href="../user/mycart.php" class="p-2 pl-0" ><i class="fa-solid fa-cart-shopping"></i>MYCART</a>
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
        
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: 50%; height: 300px; margin-left: 50px; margin-top: 20px; margin-bottom:100px ">
          
          <div class="carousel-inner">
            <div class="carousel-item active "  >
              <img src="../images/hero_1.jpg" class="d-block w-100" alt="..." height="350px" >
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../images/hero_3.jpg" class="d-block w-100" alt="..."  height="350px" >
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../images/logo1.png" class="d-block w-100" alt="..." height="350px" >
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <h1 class="title_heading">GRAB THE OPPORTUNITY</h1>
        <div class="container">
          <!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="../images/laptopcollection.jpg" alt="" height="250px">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="../images/accessories.jpg" alt="" height="250px">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="../images/camera.jpg" alt="" height="250px">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								
							</div>
                            </div></a>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
        <!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section mainn mainn-raised">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
       
					<div class="col-md-12">
          <img src="../images/cream.jpg" height="200px"/>
          <img src="../images/cream.jpg" height="150px"/>
          <img src="../images/cream.jpg" height="150px"/>
          <img src="../images/cream.jpg" height="200px"/>
						<div class="hot-deal">
            
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->
    </div>
    
    

    
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>