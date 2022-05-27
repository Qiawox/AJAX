<?php
error_reporting(0);
    $connect = mysqli_connect('localhost','root','','lib_b');
    $id_status_del = $_POST['id_status'];
    $del_status="DELETE FROM `books_file` WHERE `id` = $id_status_del";
    $run_del_status = mysqli_query($connect,$del_status);
?>