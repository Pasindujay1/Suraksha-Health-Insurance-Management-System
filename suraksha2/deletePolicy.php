<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `policy` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:adminDash.php");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully your Policy Deleted!!!');
    window.location.href='adminDash.php';
    </script>");

?>
