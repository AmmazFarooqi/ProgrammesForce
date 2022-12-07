<?php
include('dp_con.php');

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');

$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];
$f_name = $data['First_name'];
$l_name = $data['last_name'];
$age = $data['age'];
$query = "update students set First_name = '$f_name', Last_name ='$l_name' ,age= $age Where id = $id";

if(mysqli_query($connection,$query))
{
    echo json_encode(array('message'=> 'Student Record Updated', 'status'=> true));
}
else
{
    echo json_encode(array('message'=> 'Student Record Not Updated', 'status'=> false));
}
?>