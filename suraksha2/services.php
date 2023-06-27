<html>

<head>
    <title>Services of suraksha</title>
    <link rel="stylesheet" href="cssfile/nav.css">
   
   
 
   <style type="text/css">


    * {
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

.container{
    width: 100%;
    height: 100vh;
    background: #e8ecff;
    position: relative;
}
.veiw-box{
    width: 900px;
    height: 400px;
    border-radius: 220px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;    
}
#testimonials{
    display: flex;
    transition: 0.5s;
}
.user{
    width: 800px;
    text-align: center;
    padding: 20px 70px;
    box-sizing: border-box;
    background: #321764;
    border-radius: 200px;
    box-shadow: 0 10px 20px -5px #00000061;
    position: relative;
}

.space{
    margin: 0 70px;
}
.user img{
    width: 120px;
    border-radius: 50%;
    border: 10px solid #e8ecff;
    position: absolute;
    top: -80px;
    left: 50%;
    transform: translateX(-50%);
}
.user p{
    font-size: 22px;
    color: #cbb4f5;
    line-height: 32px;
    margin: 60px 0 30px;
}
.user p::before{
    content: '\201C';
    font-size: 120px;
    height: 0;
    display: inline-block;
    vertical-align: -57;
    margin-right: 10px;
}
.user p::after{
    content: '\201D';
    font-size: 120px;
    height: 0;
    display: inline-block;
    vertical-align: -70;
    margin-left: 10px;
}
.user h3{
    font-size: 26px;
    color: #cbb4f5;
}
.controls{
    display: flex;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}
.controls span{
    width: 15px;
    height: 15px;
    background: #321764;
    border-radius: 15px;
    margin: 0 5px;
    cursor: pointer;
    transition: 0.5s;
}
.active{
    width: 45px !important;
}
.btnHome{

    font-family: inherit;
    background-color: #F9522E;
    padding: 13px 44px 13px 44px;
    font-size: 18px;
    border-style: none;
    margin-top: 165px;

}
.btnHome:hover{
  background-color: orange;
  cursor: pointer;
}
      

       
   </style>

   
    
</head>

<body>



    <div class="container">


              <a href="home.php">     <button class="btnHome">Go to Home</button></a>



        <div class="veiw-box">
            <div id="testimonials">
                
                <div class="user">
                    <img src="image/5.jpg" alt="">
                    <p>Many people feel that there is a limited amount of abundance, wealth, or chance to succeed in life. Furthermore, there is a solid beleif that if one person succeeds, another must fail.</p>
                    <h3>Riley Olie</h3>
                </div>
                
                <div class="user space">
                    <img src="image/10.jpg" alt="">
                    <p>Many people feel that there is a limited amount of abundance, wealth, or chance to succeed in life. Furthermore, there is a solid beleif that if one person succeeds, another must fail.</p>
                    <h3>Steve McCurry</h3>
                </div>
                
                <div class="user">
                    <img src="image/11.jpg" alt="">
                    <p>Many people feel that there is a limited amount of abundance, wealth, or chance to succeed in life. Furthermore, there is a solid beleif that if one person succeeds, another must fail.</p>
                    <h3>Merlin Nguyen</h3>
                </div>
                
                
            </div>
            
            <div class="controls">
                <span id="control1"></span>
                <span id="control2" class="active"></span>
                <span id="control3"></span>
            </div>
            
        </div>
    </div>
    


    <script>
    
        var testimonials = document.getElementById('testimonials');
        var control1 = document.getElementById('control1');
        var control2 = document.getElementById('control2');
        var control3 = document.getElementById('control3');
        
        
        control1.onclick=function(){
            testimonials.style.transform = "translateX(870px)";
            control1.classList.add("active");
            control2.classList.remove("active");
            control3.classList.remove("active");
        }
        
        control2.onclick=function(){
            testimonials.style.transform = "translateX(0px)";
            control1.classList.remove("active");
            control2.classList.add("active");
            control3.classList.remove("active");
        }
        
        control3.onclick=function(){
            testimonials.style.transform = "translateX(-870px)";
            control1.classList.remove("active");
            control2.classList.remove("active");
            control3.classList.add("active");
        }
        
        
        
        
    
    </script>
    
    
    
    
    

</body>

</html>
