<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        
    </style>
</head>
<body>
<div class="header">
        
      
       
        <div class="header-right">
          <a class="my-3">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome </a>
          <a class="my-3" href="reset-password.php">Reset Your Password</a>
          <a class="my-3" href="logout.php">Sign out</a>
                 
        </div>
      </div>
    
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">herbal products</h1>
        </div>
    </div>
    <div  class="row mt-4">
        <?php
        require 'config.php';
        $query="SELECT * FROM product";
        $query_run=mysqli_query($link,$query);
        $chelk_faculty=mysqli_num_rows( $query_run)>0;

        if($chelk_faculty)
        
        {
            while($row=mysqli_fetch_assoc($query_run))
            {
                ?> 
            <div class="col-md-3 mt-3">
                <div class="card">
                    <img src="images/<?php echo $row['image'];?>" width="200px" height="200px" alt=" herb image">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row['name'];?> </h4>
                        <h3 class="card-title"><?php echo $row['type'];?></h3>
                        <p class="card-text"><?php echo $row['descrip'];?></p>
                        <p class="card-text"><?php echo $row['price'];?></p>
                        <a href="purchase.php" class="btn btn-info ">Order Now</a>

                    </div>
                </div>

            </div>
            <?php
            }
            

        }
    else{
            
                echo"no product found";
               
        }
        ?>
    </div>
</div>

</body>
</html>