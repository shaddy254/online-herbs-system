<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product</title>
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
        color:black; }
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
<form action="products.php" method="post">
  <div class="form-group">
    <label >product name</label>
    <input type="text" class="form-control" name="name" placeholder="product name" required>
    </div>
  
  <div  class="form-group">
    <label >herb image</label>
    <input type="file" class="form-control-file" name="image" required>
  </div>
  <div class="form-group">
  <label >Drug type either tablet or liquid</label>
    <input type="text" class="form-control" name="type" placeholder="product type" required>
    </div>
    <div class="form-group">
  <label >Description</label>
    <input type="text" class="form-control" name="descrip" placeholder="describe what the product treats/prevents" required>
    </div>
    <div class="form-group">
 <label >price</label>
    <input type="text" class="form-control" name="price" placeholder="product price" required>
    </div>
 

  <button type="submit" name='submit'class="btn btn-primary">Submit</button>
</form>

</div>
</body>
</html>