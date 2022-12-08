<?php include('config.php');

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
//header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');

    $data = json_decode(file_get_contents("php://input"), true);

    $New_email = $data['email'];
    $password = $data['password'];

   $query = "update login_form set password = '$password' where email = '$New_email'";
//$result = mysqli_query($conn, $query); 
   if(mysqli_query($conn,$query))
{
    echo json_encode(array('message'=> 'Password Successfully Updated', 'status'=> true));
}
else
{
    echo json_encode(array('message'=> 'Passsword Not Successfully Updated', 'status'=> false));
}
?>









