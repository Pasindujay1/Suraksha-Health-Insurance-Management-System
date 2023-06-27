
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Suraksha Insurance solutions</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
    <link rel="stylesheet" href="cssfile/login.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    


    <style type="text/css">


       body{
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-image: url(image/2.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;

            }
            .sign_up{

                font-size: 20px;

            }
            .sign_up:hover{

                background-color: #fff;
                

            }
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.about-sec{
    display: flex;
    padding: 3rem 0;
    width: 100%;
    justify-content: center;
  /*  background: #2c3e50;*/
  background: rgba(1, 2, 2, 0.5);
    margin-top: 106px;
}
.about-img{
    width: 250px;
    height: 250px;
    margin: 0 3rem;
}
.about-img img{
    height: 100%;
    width: 100%;
}
.about-intro{
    color: #fff;
    width: 400px;
    height: 250px;
    border-left: 3px solid #00b894;
    padding-left: 2rem;
    margin: 0 3rem;
}
.about-intro p{
    margin-top: 1.5rem;
    font-size: 14px;
    opacity: .7;
}
@media only screen and (max-width: 900px) {
    .about-sec{
        flex-direction: column;
        align-items: center;
    }
    .about-img{
        width: 80%;
    }
    .about-intro{
        width: 100%;
        height: 100%;
        border-top: 3px solid #00b894;
        border-left: none;
        padding: 1rem;
        margin-top: 2rem;
    }
    .about-intro h3,p{
        width: 80%;
    }
    .about-intro p{
        font-size: 12px;
    }




}

table
{
    width:99%;
    border-collapse: separate !important;
    margin:auto;
    /*/table-layout:fixed;/*/
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
    color: black;
}
table tr td
{
    border-right: 2px solid rgb(187, 187, 187);
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 22px;
    color: black;
}
table tr td a
{
    background-color: rgb(255, 196, 0);
    color: black;
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;
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

    padding: 5px 5px 5px 5px;
    border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    cursor: pointer;
}


     

      
    </style>

  </head>
  <body>




              <!--this is the header callling(nav bar)-->
            <?php include("nav.php");
             ?>

             <div class="about-sec">
        <div class="about-img">
            <img src="image/person1.png">
        </div>
        <div class="about-intro">
            <h3>About Us<span style="color: #00b894;"> !</h3>
            <p>There is a multitude of different types of insurance policies available, and virtually any individual or business can find an insurance company willing to insure them—for a price. The most common types of personal insurance policies are auto, health, homeowners, and life. Most individuals in the United States have at least one of these types of insurance, and car insurance is required by law.</p>
        </div>
    </div>




<?php include("connection.php");?>

<?php

    
    $sqlget="SELECT * FROM policy";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<caption><h1>Our Policies</h1></caption>";
    echo "<tr>
      <th>ID</th>
    <th>Title</th>
    <th>Description</th>
    
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['title'];
        echo "</td><td>";
        echo $row['decription'];
        echo "</td>";
       
          
        ?>

        </tr>

<?php
       }

       echo "</table>";


?>


<?php

    
    $sqlget="SELECT * FROM packagee";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<caption><h1>Our Packages</h1></caption>";
    echo "<tr>
      <th>ID</th>
    <th>Pack Name</th>
    <th>pack_description</th>
    
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['Package_Name'];
        echo "</td><td>";
        echo $row['pack_description'];
        echo "</td>";
       
          
        ?>

        </tr>

<?php
       }

       echo "</table>";


?>




  </body>
</html>
