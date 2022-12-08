<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<form class="container mt-5 offset-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="row">
        <div class="col-md-6">

       
  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Email address:</label>
    <input type="email" name="email" id="form2Example1" class="form-control" />
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Password:</label>
    <input type="password" name="password" id="form2Example2" class="form-control" />
    
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
 

  <!-- Submit button -->
  <input type="submit" value="login" name="submit" class="btn btn-primary btn-block mb-4">


</form>
</div>
    </div>

</html>
<?php 
include('dp_con.php');
session_start();

if (isset($_SESSION['email'])) {
    header("location: http://localhost/Tasks/crud_app/");
}


if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from users where email='$email' and password='$password'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];

        header("location: http://localhost/Tasks/crud_app/");
    }
    else{
        echo "<script>alert('invalid email and password');</script>";
    }

}
?>


