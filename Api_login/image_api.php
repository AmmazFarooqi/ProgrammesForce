<?php 
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