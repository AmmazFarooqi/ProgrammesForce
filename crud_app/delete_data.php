<?php include('dp_con.php'); ?>

<?php

$id=$_GET['sid'];
$query = "delete from students where id ='$id'";
$result = mysqli_query($connection, $query);

if($result)
{
    header("location:index.php");
}
else{
    echo "something went wrong!";
}

?>