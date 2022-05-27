<?php
error_reporting(0);
$connect = mysqli_connect('localhost','root','','lib_b');
$id_read = $_POST['id_read'];
$str = "SELECT * FROM `books_file` WHERE id = $id_read";
$run_read = mysqli_query($connect,$str);
$end = mysqli_fetch_array($run_read);
echo $end['description'];
?>