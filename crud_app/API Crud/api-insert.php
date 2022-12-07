<?php
include('dp_con.php');

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');

$data = json_decode(file_get_contents("php://input"), true);

    $f_name = $data['First_name'];
    $l_name = $data['last_name'];
    $age = $data['age'];

$query = "insert into students (First_name,Last_name,age) values ('$f_name','$l_name','$age')";


if(mysqli_query($connection,$query))
{
    echo json_encode(array('message'=> 'Student Record Inserted', 'status' => true));
} 
else
{
    echo json_encode(array('message'=> 'Student Record Not Inserted', 'status'=> false));
}
?>