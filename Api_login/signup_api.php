
<?php include('config.php');

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');

$data = json_decode(file_get_contents("php://input"), true);

    $name = $data['name'];
    $email = $data['email'];
    $password = $data['password'];
    $encrypt = md5($data['password']);
    $age = $data['age'];
    $gender = $data['gender'];
    $picture = $data['picture'];

    $query = "insert into login_form (name,email,password,age,gender,picture) values ('$name','$email','$password','$age','$gender','$picture')";


if(mysqli_query($conn,$query))
{
    echo json_encode(array('message'=> 'Data is Successfully Inserted', 'status' => true));
} 
else
{
    echo json_encode(array('message'=> 'Data is Not Successfully Inserted', 'status'=> false));
}
?>