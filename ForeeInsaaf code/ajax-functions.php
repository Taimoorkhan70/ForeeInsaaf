<?php
include("db/connection.php");
$Q="SELECT * FROM `proposels` WHERE `id`='".$_POST['id']."'";
$re=mysqli_query($connection,$Q);
$row=mysqli_fetch_assoc($re);
echo json_encode($row);

?>

