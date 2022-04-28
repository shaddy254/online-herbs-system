<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: admin-page.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the admin page</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <br>
        <br><br>
        <a href="addproducts.php" class="btn btn-info">Add Other <br>Herbal Products</a>
        <a href="addproducts.php" class="btn btn-info">check our<br>customers</a>
        <a href="addproducts.php" class="btn btn-info">customers<br>Orders</a>
        <a href="addproducts.php" class="btn btn-info">customers<br>payments</a>




    </p>


</body>
</html>