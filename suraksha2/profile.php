<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($conn);

?>

	
	

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="cssfile/profile.css">
    <title>Suraksha profile page</title>
    <style type="text/css">
    	.btnHome{

    font-family: inherit;
    background-color: #F9522E;
    padding: 13px 44px 13px 44px;
    font-size: 18px;
    border-style: none;
    color: #fff;

}
.btnHome:hover{
  background-color: orange;
  cursor: pointer;
  font-weight: 600;
}
body{
   	    background-image: url(image/16.jpg);
   	    background-repeat: no-repeat;
   	    background-size: cover;
   	    background-position: center;
   	    background-attachment: fixed;
   	     }



    </style>

  </head>
  <body>



    
<div class="box">
  <img src="image/alex.png" alt="" class="box-img">
  <h1>
<?php echo $user_data['username'];?>
	
</h1> 

<p>

<?php echo "Address:"."".$user_data['address'];?>
<br>
<br>
<?php echo "City:"."".$user_data['city'];?>
<br>
<br>
<?php echo "User id:"."".$user_data['id'];?>
<br>
<br>
<?php echo "First Name:"."".$user_data['First_Name'];?>
<br>
<br>
<?php echo "Last_Name:"."".$user_data['Last_Name'];?>
<br>
<br>
<?php echo "E-mail:"."".$user_data['E_mail'];?>
<br>
<br>
<?php echo "username:"."".$user_data['username'];?>
<br>
<br>
<?php echo "Gender:"."".$user_data['gender'];?>

</p>
   

<ul>
<li><a href="updateProfile.php"><button class="btnHome">update profile</button></i></a></li>
<li><a href="logout.php"><button class="btnHome">logout</button></i></a></li>
<li><a href="packges_feedback.php"><button class="btnHome">Home</button></i></a></li>
<li><a href="deleteProfile.php?id=<?php echo $user_data['id'];?>"><button class="btnHome">Delete Profile</button></i></a></li>

<!--<li><a href="packges_feedback.php"><button class="btnHome">Packages and Feedback</button></i></a></li>-->

<!--<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>-->
</ul>
</div>

</body>
</html>

