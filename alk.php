<?php
error_reporting(0);
$connect = mysqli_connect('localhost','root','','lib_b');
$id = $_POST['id_all'];
$tittle = $_POST['tittle_all'];
$str_up = "UPDATE `upload` set
`name` = '$tittle'
WHERE `id` = '$id';";
$run_up = mysqli_query($connect,$str_up);
?>