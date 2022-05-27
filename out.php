<?php
error_reporting(0);
$connect = mysqli_connect('localhost','root','','lib_b');
$id_status = $_POST['id_status'];
$update_status="UPDATE `books_file` SET
`status` = 1
WHERE id = $id_status";
$run_update_status = mysqli_query($connect,$update_status);
?>