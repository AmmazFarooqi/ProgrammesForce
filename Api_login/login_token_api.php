<?php include('config.php');

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Contro-Allow-Methods: POST');


$login_form = stripcslashes(file_get_contents("php://input"));
$data = json_decode($login_form, true);




$email = $data['email'];
$password = $data['password'];
$encryptPassword = md5($password);


$cookie_name = "token";
$cookie_value = "user";
//$tokenValue = bin2hex($bytes);

$query = "SELECT * FROM login_form WHERE email = '$email'";
$result = mysqli_query($conn, $query) or die("Login Query Failed");

if (mysqli_num_rows($result) > 0)
{
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode(array('message' => 'User Found', 'status' => 'true'));
    echo json_encode($output);
    setcookie($token, $tokenValue, time() + 60, "/");
    echo json_encode(array('token' => $token, 'tokenValue' => $tokenValue));
}
else
{
    echo json_encode(array('message' => 'User Not found', 'status' => 'false'));

}
?>