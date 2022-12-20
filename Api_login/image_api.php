<!--  
include('config.php');
header('content-type:Application/json');
header('Acess-Control-Allow-Origin:*');
header('Acess-Control-Allow-Method:POST');
header('Acess-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods,Authorization,X-Requested-With');



$name = $_POST['name'];   
$email = $_POST['email'];
$age= $_POST['age'];
$gender= $_POST['gender'];

$password= $_POST['password'];
$encrypted_password=md5($password);
if(is_uploaded_file($_FILES['picture']['temp_name']) && @$_POST['name'])
 {
    $temp_file=$_FILES['picture']['temp_name'];
    $imgname=$_FILES['picture']['name'];
    $upload_dir="./pic/".$imgname;

//insert data in database
    $query = "INSERT INTO login_form (name,email,age,gender,picture,password) values('{$name}','{$email}','{$age}','{$gender}','{$imgname}','{$encrypted_password}')";
if(mysqli_query($conn,  $query))
{
    echo json_encode(array('message'=>' User has been Registered','status'=>true));
}
else
{
    echo json_encode(array('message'=>'user not Registered','status'=>false));
}
}
?>


include('config.php');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Methods:POST');
header('Access-Control-Headers:Access-Control-Headers, Content-Type,Access-Control-Allow-Origin,Access-Control-Methods, Authorization, X-Requested-With');
session_start();
if(isset($_SESSION['token']) && $_SESSION['email'])
{
    $email = $_SESSION['email'];
    if (is_uploaded_file($_FILES['picture']['tmp_name'])) {
        $tmp_file = $_FILES['picture']['tmp_name'];
        $picture = $_FILES['picture']['picture'];
        $newpicture  = time() . "-" . $picture;
        $upload_dir = "./ -->

<<?php include "config.php";
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Methods:POST');
header('Access-Control-Headers:Access-Control-Headers, Content-Type,Access-Control-Allow-Origin,Access-Control-Methods, Authorization, X-Requested-With');


if (isset($_COOKIE['token']) && isset($_COOKIE['id']))
{
    $email = $_COOKIE['email'];
    if (is_uploaded_file($_FILES['picture']['tmp_name'])) {
        $tmp_file = $_FILES['picture']['tmp_name'];
        $picture = $_FILES['picture']['picture'];
        $newpicture  = time() . "-" . $picture;
        $upload_dir = "./picture/" . $newpicture;
        // query
        $query="UPDATE login_form SET picture='$newpicture'
                where email='$email'";
        if (move_uploaded_file($tmp_file, $upload_dir) && mysqli_query($conn, $query)) {
            echo "Successfully uploaded of " . $email ;
            echo json_encode(array('message' => 'Profile Picture Update', 'status' => 'true'));
        } else {
            echo json_encode(array('message' => 'Something went wrong', 'status' => 'false'));
        }
    } else {
        echo json_encode(array('message' => 'Error (Path-Issue)', 'status' => 'false'));
    }
}
else
    {
        echo json_encode(array('message' => 'User not exist','status' => 'false'));
    }
?>