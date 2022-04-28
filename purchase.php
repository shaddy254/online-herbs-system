<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>purchase</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<style>
        body{
             /* font: 14px ; */
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        display: inline;
        justify-self: center;
        background-color: aquamarine;
        color:black;
        padding: 30px;
     }
        .wrapper{ width: 400px; padding: 30px;
            margin-left: 30%;
            background-color: white;
            border-width:10%;
            border-color:blue;
             }
        label{
            font: 30px;
            color:blue;
        }
    </style>

    <div class="wrapper">
    <h2>Please pay with Mpesa paybill No:</h2>
    <h3>2022</h3>
    <h3>Account number:Your user name</h3>
    <p>then fill inn the following form</p>
    
<form action="purchasesave.php" method="post">
  <div class="form-group">
    <label >Full names</label>
    <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="username" required>
    </div>
  
  <div  class="form-group">
    <label >Shipping area</label>
    <input type="text" class="form-control" name="shipping" required>
  </div>
  <div class="form-group">
  <label >Mpesa Reference code </label>
    <input type="text" class="form-control" name="code" required>
    </div>
    <div>
    <label >Phone Number </label>
    <input type="number" class="form-control" name="number"  required>
    </div>
    <br>
    <br>
     <button type="submit" name='submit'class="btn btn-primary">Submit</button>
</form>

</div>

   

</body>
</html>