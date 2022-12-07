<?php include('dp_con.php'); ?>

<?php
      $idnew = $_GET['id_new'];
      if(isset($_POST['Update_students']))
      {
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $age = $_POST['age'];
        $query = "update students set First_name='$fname',last_name='$lname',age='$age' where id = '$idnew'";
        
        $result = mysqli_query($connection, $query);
        if ($result){
            header("Location: index.php");
        }
        else{
            echo "error";
        }
    
    }
?>