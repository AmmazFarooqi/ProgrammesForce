<?php include('config.php');

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
//header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');

$data = json_decode(file_get_contents("php://input"), true);
$name = $data['name'];
$New_email = $data['email'];
$password = $data['password'];
$age = $data['age'];
$gender = $data['gender'];
$picture = $data['picture'];

$query = "update login_form set name ='$name',password='$password',age='$age',gender='$gender',picture='$picture' where email= '$New_email'";

if(mysqli_query($conn,$query))
{
    echo json_encode(array('message'=> 'Data Successfully Updated', 'status'=> true));
}
else
{
    echo json_encode(array('message'=> 'Data Not Successfully Updated', 'status'=> false));
}
?>