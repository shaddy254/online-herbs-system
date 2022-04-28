<?php
session_start();
     define('DB_SERVER', 'localhost');
     define('DB_USERNAME', 'root');
     define('DB_PASSWORD', '');
     define('DB_NAME', 'herbs');
      
     /* Attempt to connect to MySQL database */
     $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
      
     // Check connection
     if($link === false){
         die("ERROR: Could not connect. " . mysqli_connect_error());
     }
      else{
        if  (isset($_POST["submit"]))
        {
        $product_name =  ($_POST['name']);
        $herb_image = ($_POST['image']);
        $Drug_type =  ($_POST['type']);
        $Description = ($_POST['descrip']);
        $price = ($_POST['price']);

        $sql = "INSERT INTO product (name,image,type,descrip,price) VALUES ('$product_name', 
            '$herb_image','$Drug_type','$Description','$price')";
          
        if(mysqli_query($link, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
        }
    } 
}
        ?>
