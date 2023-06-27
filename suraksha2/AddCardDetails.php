<?php 
session_start();

 // include("connection.php");
  //include("function.php");

  //$user_data = check_login($conn);

?>

<?php include("connection.php")?>
<!--
<!DOCTYPE html>
<html>
<head>
  <title>admin Panel suraksha</title>
</head>
<body>

   <?php// echo "welcome:".  $_SESSION['id']; ?>
   <a href="adminLogout.php"><button class="btnHome">logout</button></a>

</body>
</html>

-->


<!DOCTYPE html>
<html>
<head>
  <title>user payment deytails adding</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
<link rel="stylesheet" href="cssfile/signUp.css">
  <style type="text/css">

      body{

      background-image: url("image/20.jpg");
      background-position: center;
      background-size: cover;
      height: 700px;
      background-repeat: no-repeat;
      background-attachment: fixed;

    }
    .adminTopic{
      text-align: center;
      color: #fff;
      

    }
/*
table
{
    width:99%;
    border-collapse: separate !important;
    margin:auto;
    
    text-align:center;
    margin-top:50px;
    background-color: rgb(255, 255, 255);
    border-radius: 10px 10px 0px 0px;

}
table th
{
    border-bottom:2px solid rgb(187, 187, 187);
    padding:10px 0px 10px 0px;
    font-family: "balsamiq_sansitalic" !important;
}
table tr td
{
    border-right: 2px solid rgb(187, 187, 187);
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 20px;
}*/
table tr td a
{
    /*background-color: rgb(255, 196, 0);*/
    /*
    color: white;
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;*/
}

table tr td button:hover
{

  /*
    background: rgb(255, 255, 255);
    text-decoration:underline;
    color:tomato;
    padding: 4px;
    border:2px solid tomato;
    transition:background-color 0.2s;*/
/*
    padding: 5px 5px 5px 5px;
  border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    cursor: pointer;*/
}
button 
{
   /* padding: 5px 5px 5px 5x;*/
}/*
.btnPolicy{

  padding: 5px 5px 5px 5px;
  border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    margin-left: 20px;
}

.btnPolicy:hover{

  background:red;
    padding: 7px 7px 7px 7px;
    cursor: pointer;

}*/
.idclass{

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
  <input type="checkbox" id="check">

  <label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>


  </label>
  <div class="sidebar">
<header><img src="image/17.jpg">
<p><?php echo $_SESSION['username']; ?></p>
</header>
<ul>


   
   <li><a href="adminDash.php">Manage Policy</a></li>
    <li><a href="managePackage.php">Manage Package</a></li>
    <li><a href="pay.php">Payments</a></li>
    <li><a href="adminLogout.php">logout</a></li>
  <!--  <li><a href="#">Event</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Service</a></li>
    <li><a href="#">Contact</a></li>-->
    </ul>
 <!--  <li>
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-youtube"></i></a>
        
      </div>
    </li>-->
   

</div>



<div class="sidebar2">


   <!-- <h1 class="adminTopic">Payment infor Adding Here</h1>-->


    <?php


  if(isset($_POST['addTransaction'])){

    
     
       $cus_name=$_POST['cus_name'];
       $nic=$_POST['nic'];
       $date=$_POST['date'];
       $bill_num=$_POST['bill_number'];
        $paid_amount=$_POST['paid_amount'];
    

    
      

       if($conn->connect_error)
          {
            die('Connection Faild :'.$conn->connect_error);
          }
          else
          {


              $stmt=$conn->prepare("INSERT INTO transaction(Customer_Name,Nic,Date_,Bill_Number,Paid_Amount) VALUES(?,?,?,?,?)");
              //table3 is the table name//



              $stmt->bind_param("sssss", $cus_name,$nic,$date,$bill_num,$paid_amount);
            
              $stmt->execute();
              
               //redirect to your profile page//

                    header("Location: pay.php");
       
                    die;
               


              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>



<div class="sidebar2">



          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Add Payment Details
    </div>

    <form  method="POST">
      <div class="form_wrap">

        
        
        <div class="input_wrap">
          <label for="title">Customer Name</label>
          <input type="text" id="title" name="cus_name" placeholder="Customer Name" required>
        </div>

       <!--
        <div class="input_wrap">
          <label for="description">Package decription</label>
          <textarea id="decription" name="pdescription" rows="15" cols="100" placeholder="description"></textarea>
        </div>-->

        <div class="input_wrap">
          <label for="title">Customer Nic Number</label>
          <input type="text" id="title" name="nic" placeholder="Nic" required>
        </div>

        <div class="input_wrap">
          <label for="title">Date of Transaction</label>
          <input type="date" id="title" name="date" placeholder="date" class="idclass" required>
        </div>

        <div class="input_wrap">
          <label for="title">Bill Number</label>
          <input type="number" id="title" name="bill_number" placeholder="Bill Number" class="idclass" required>
        </div>


        <div class="input_wrap">
          <label for="title">Paid Amount</label>
          <input type="number" id="title" name="paid_amount" placeholder="Paid Amount" class="idclass" required>
        </div>


        
        <div class="input_wrap">

          <input type="submit" value="Add Transaction details" class="submit_btn" name="addTransaction">

        </div>



      </div>
    </form>
  </div>
</div>




</div>











</div>

</body>
</html>