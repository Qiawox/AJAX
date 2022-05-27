<?php
error_reporting(0);
    $connect = mysqli_connect('localhost','root','','lib_b');
    $id = $_POST['id'];
    $del_status="DELETE FROM `upload` WHERE `id` = '$id';";
    $run_del_status = mysqli_query($connect,$del_status);
    if ($run_del_status) {
      echo $del_status;
    }
?>