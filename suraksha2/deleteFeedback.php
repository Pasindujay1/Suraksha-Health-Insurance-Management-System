<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `feedback` WHERE id = $ID " ;
$query = mysqli_query($conn,$sql);




    //echo "Deleted!!!!";

	//header("location:pay.php "<script>alert("hellooo");</script>");


  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully feedback Deleted!!!');
    window.location.href='feedback.php';
    </script>");




?>