<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `packagee` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:managePackage.php");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully package Deleted');
    window.location.href='managePackage.php';
    </script>");

?>
