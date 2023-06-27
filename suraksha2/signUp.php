


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Suraksha Insurance solutions</title>

     <!--Favi icon -->
    <link rel="icon" type="image/x-icon" href="image/logo2.png">


    <link rel="stylesheet" href="cssfile/nav.css">
  <!--  <link rel="stylesheet" href="cssfile/footer_l.css">-->
     <link rel="stylesheet" href="cssfile/signUp.css">
  <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style type="text/css">

     
body{
 
  background-image: url(image/12.jpg);
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;

}
.confirm{

    background-color: black;
    margin-top: 5px;


}
      
    </style>

  </head>
  <body>

              <!--this is the header callling(nav bar)-->

            <?php include("nav.php");
             ?>

<div class="confirm">

<?php

session_start();

  include("connection.php");
  include("function.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $user_name = $_POST['user_name'];
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $con_pass=$_POST['cpassword'];


   // echo $user_name;


    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        

       if($password==$con_pass){

        
        //   $password=md5($password);//

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,First_Name,Last_Name,E_mail,username,password,gender,city,address) values ('$user_id','$fname','$lname','$email','$user_name','$password','$gender','$city','$address')";

            mysqli_query($conn,$query);

            header("Location: Login.php");
            die;

        }
        else{

             echo "Please enter confirm password as previous one!!";

          }
    }
    else{
    
         echo "Please enter some valid information!";

      }
  }
?>

</div>

         


          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Suraksha Sign Up
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">
        <div class="input_grp">
          <div class="input_wrap">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="First Name" required>
          </div>
          <div class="input_wrap">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Last Name" required>
          </div>
        </div>
        <div class="input_wrap">
          <label for="email">Email Address</label>
          <input type="text" id="email" name="email" placeholder="E-mail" required>
        </div>
        <div class="input_wrap">
          <label for="uname">Username</label>
          <input type="text" id="uname" name="user_name" placeholder="Username" required>
        </div>
        <div class="input_wrap">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="password" required>
        </div>
        <div class="input_wrap">
          <label for="Confirm_password">Confirm Password</label>
          <input type="password" id="password" name="cpassword" placeholder="password" required>
        </div>
        <div class="input_wrap">
          <label>Gender</label>
          <ul>
            <li>
              <label class="radio_wrap">
                <input type="radio" name="gender" value="male" class="input_radio" checked>
                <span>Male</span>
              </label>
            </li>

            <li>
              <label class="radio_wrap">
                <input type="radio" name="gender" value="female" class="input_radio">
                <span>Female</span>
              </label>
            </li>
          </ul>
        </div>
        <div class="input_wrap">
          <label for="city">City</label>
          <input type="text" id="city" name="city" placeholder="City" required>
        </div>
        <div class="input_wrap">
          <label for="country">Address</label>
          <input type="text" id="country" name="address" placeholder="Address" required>
        </div>
        <div class="input_wrap">
          <input type="submit" value="Register Now" class="submit_btn">
        </div>

      </div>
    </form>
  </div>
</div>







  </body>
</html>
