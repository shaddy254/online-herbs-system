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
        $full_name =  ($_POST['name']);
        $Username = ($_POST['username']);
        $Shipping_area =  ($_POST['shipping']);
        $mpesa_code = ($_POST['code']);
        $phone_number =($_POST['number']);
        

        $sql = "INSERT INTO orders( name,username,shipping,code,number) VALUES (
            '$full_name','$Username','$Shipping_area','$mpesa_code',' $phone_number' )";
          
        if(mysqli_query($link, $sql)){
            echo "<h3>data ordered successfully, your product will arrive at your shipping and get notified in three days"; 
  
        }
    } 
}
        ?>