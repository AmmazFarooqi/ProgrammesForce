<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
    <h1 id="main_title">CRUD APPLICATION IN PHP</h1>

    <div class="container">
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
    
    </body>
    </html> 
<?php include('dp_con.php'); ?>
<?php
if (!isset($_SESSION['email'])) {
    header("location: http://localhost/crud_app/update.php");
if(isset($_GET['sid']))
{
    $id = $_GET['sid'];

    $query = "select * from students where id = '$id'";
    $result = mysqli_query($connection, $query);

    if(!$result)
    {
     die("query Failed".mysqli_error());
    }
    else 
    {
     $row = mysqli_fetch_assoc($result);
        
    }
}
?>

<form action="upd_2.php?id_new=<?php echo $id; ?>" method="post">

     <div class= "forms-group">
                <label for="f_name">First Name </label>
                <input type="text" name="f_name" class="form-control" value="<?php echo $row['First_name']?>">
      </div>
      <div class= "forms-group">
            <label for="l_name"> Last Name </label>
            <input type="text" name="l_name" class="form-control"value="<?php echo $row['last_name']?>">
        </div>
                
            <div class= "forms-group">
                <label for="age"> Age </label>
                <input type="text" name="age" class="form-control"value="<?php echo $row['age']?>">
            </div>
                <INPUT type="Submit" class="btn btn-success"name="Update_students" value="UPDATE">
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
    </body>
    </html> 