


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Suraksha Insurance solutions</title>
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
.form_wrap .input_grp  input[type="number"]{
  width: 165px;
}
.form_wrap  input[type="number"]{
  width: 100%;
  border-radius: 3px;
  border: 1px solid #9597a6;
  padding: 10px;
  outline: none;
  color: black;
}
      
    </style>

  </head>
  <body>

   <?php 


       include("connection.php");

       if(isset($_POST['updateprofile'])){

       $id=$_POST['id'];
       $pass=$_POST['password'];
       $conPass=$_POST['cpassword'];

       $query="UPDATE `users` SET First_Name='$_POST[fname]',Last_Name='$_POST[lname]',E_mail='$_POST[email]',username='$_POST[user_name]',password='$_POST[password]',gender='$_POST[gender]',city='$_POST[city]',address='$_POST[address]'where id=$_POST[id]";

       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){

            
      
                    //redirect to your profile page//

                    header("Location: profile.php");
       
                    die;

                 


          }

          else{

               echo '<script type="text/javascript">alert("your profile not updated!!!")</script>';
           }

           

     }




   ?>

    
          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
     PROFILE UPDATE HERE
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">
        <div class="input_grp">
          

          <div class="input_wrap">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="First Name">
          </div>
          <div class="input_wrap">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Last Name">
          </div>
        </div>
        <div class="input_wrap">
            <label for="fname">ID</label>
            <input type="number" id="id" name="id" placeholder="ID">
          </div>
        <div class="input_wrap">
          <label for="email">Email Address</label>
          <input type="text" id="email" name="email" placeholder="E-mail">
        </div>
        <div class="input_wrap">
          <label for="uname">Username</label>
          <input type="text" id="uname" name="user_name" placeholder="Username">
        </div>
        <div class="input_wrap">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="password">
        </div>
        <div class="input_wrap">
          <label for="Confirm_password">Confirm Password</label>
          <input type="password" id="password" name="cpassword" placeholder="password">
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
          <input type="text" id="city" name="city" placeholder="City">
        </div>
        <div class="input_wrap">
          <label for="country">Address</label>
          <input type="text" id="country" name="address" placeholder="Address">
        </div>
        <div class="input_wrap">
          <input type="submit" value="UPDATE NOW" class="submit_btn" name="updateprofile">
        </div>

      </div>
    </form>
  </div>
</div>



  </body>
</html>

