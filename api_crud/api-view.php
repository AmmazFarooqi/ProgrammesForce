<?php header('Acess-Control-Allow-Origin:*');?>
<?php header('Content-Type: application/json');?>
<?php include('dp_con.php'); ?>

<?php
$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];
$query = "select * from students where id = {$id}";
$result = mysqli_query($connection,$query);

if(mysqli_num_rows($result) >0)
{
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
}
else
{
    echo json_encode(array('message'=> 'No Record Found', 'status'=> false));
}
?>