<?php
$servername='localhost';
$username='root';
$password='';
$db='ecom_project';
$conn=mysqli_connect($servername,$username,$password,$db);

$id=$_GET['edit'];



if(isset($_POST['updatecategory'])){
    $category_name=$_POST['category_name'];
    

if(empty($category_name)){
    $message[]='Please fill out category';
}else{
    $update="UPDATE tbl_category SET category_name='$category_name' WHERE id=$id";
   
    $upload=mysqli_query($conn,$update);
    if($upload){
        $message[]='Updated Category Successfully!';
    }else{
        $message[]='Couldnot update Category!';
    }

}

};
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    mysqli_query($conn,"DELETE FROM tbl_category WHERE id=$id");
    header('location:add_categories.php');
};



?>
<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
</head>
<body>

   
<div class="d-flex" id="wrapper">
<!--Sidebar starts here-->
<div class="bg-white" id="sidebar-wrapper">

<div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom" >
<i class="fas fa-user-secret me-2"></i>
</div>

<div class="list-group list-group-flush my-4">
    <a href="admindashboard.php" class="list-group-item list-group-item-action bg-trasparent second-text active">
        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
    </a>
    <a href="add_categories.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-house me-2"></i>ADD CATEGORIES
</a>
    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-house me-2"></i>KITCHEN
</a>
    <a href="admin_electronics.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-house me-2"></i>ELECTRONICS
    </a>
    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-house me-2"></i>SKINCARE
    </a>
    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-house me-2"></i>FASHION
    </a>
    
    <a href="adminlogout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
        <i class="fas fa-project-diagram me-2"></i> Logout
    </a>
</div>
</div>
<!--Sidebar ends here-->

<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0"> <img src="../images/logo1.png" height=80px width=350px alt=""></h2>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
   
    </nav>
   
                <div class="container">
                <?php
    if(isset($message)){
        foreach($message as $message){
            echo '<span class="message">'.$message.'</span>';
        }
    }
    ?>
        <div class="admin-product-form-container">
            <?php
            $select=mysqli_query($conn,"SELECT * FROM tbl_category");
            $row=mysqli_fetch_assoc($select);

            ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <h3>Edit Category</h3>
                <input type="text " placeholder="Enter Category" value="<?php $row['category_name'];?>" name="category_name" class="box">
                <input type="submit" class="btn" name="updatecategory" value="Update Category">
                <a href="add_categories.php" class="btn">Go Back</a>
            </form>
            
        </div>
    </div>
    

    

        </table>
    </div>

               
</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    var el=document.getElementById("wrapper")
    var toggleButton= document.getElementById("menu-toggle")

    toggleButton.onclick=function(){
        el.classList.toggle("toggled")
    }
</script>
</body>
</html>