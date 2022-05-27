<?php
error_reporting(0);
$connect = mysqli_connect('localhost','root','','lib_b');
$id_read = $_POST['id'];
$str = "SELECT * FROM `upload` WHERE id = $id_read";
$run_read = mysqli_query($connect,$str);
$end = mysqli_fetch_array($run_read);
echo "<iframe src='$end[file]' frameborder='0'></iframe>";
?>
