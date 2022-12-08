<?php include('config.php');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');

$data = json_decode(file_get_contents("php://input"), true);


$name = $data['name'];
$New_email = $data['email'];
$password = $data['password'];
$age = $data['age'];
$gender = $data['gender'];
$picture = $data['picture'];
//$encryptPassword = md5('password');



if (isset($_COOKIE['token']))
{
    $query = "UPDATE login_form SET name='$name', password='$password', age='$age', gender='$gender', picture='$picture' WHERE email='$New_email'";

    if (mysqli_query($conn, $query))
    {
        echo json_encode(array('message' => 'User Profile Updated Successfully', 'status' => 'true')); // to convert in accociated array for json format
    }
    else
    {
        echo json_encode(array('message' => 'User Profile Not Updated Successfully', 'status' => 'false')); // to convert in accociated array for json format
    }
}
else
 {
    echo json_encode(array('message' => 'You Are Not Autheticated User', 'status' => 'false'));
}
?>