<?php include('config.php');
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');



$data = json_decode(file_get_contents("php://input"), true);

$email = $data['email'];

$query = "select* from login_form where email = '$email'";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($output);
}
else
{
    echo json_encode(array('message'=> 'NO  Record Found', 'status'=> false));
}
?>