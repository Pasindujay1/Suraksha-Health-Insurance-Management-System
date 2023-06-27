<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `Transaction` WHERE id = $ID " ;
$query = mysqli_query($conn,$sql);




    //echo "Deleted!!!!";

	//header("location:pay.php "<script>alert("hellooo");</script>");


  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted');
    window.location.href='pay.php';
    </script>");




?>