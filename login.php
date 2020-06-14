<?php include('server.php') ?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title> 
        Login and Registration 
        System - LAMP Stack 
    </title> 
      
    <link rel="stylesheet" type="text/css"
            href="style.css"> 
            <link rel="stylesheet"  type="text/css" href="def.css">
</head> 
<body>
    <div class="header">
    <style>
    body{
        background-image: url("https://api.army.mil/e2/c/images/2012/04/25/244449/original.jpg");
background-repeat: no-repeat;
    background-position: right;
    height:1000px;
    background-size: cover;
    background-attachment: fixed;
    } 
</style>
        <h2>Login Here!</h2> 
     
       </div> 
    <form method="post" action="login.php"> 
   
        <?php include('errors.php'); ?> 
   
        <div class="input-group"> 
            <label>Enter Username</label> 
            <input type="text" name="username" > 
        </div> 
        <div class="input-group"> 
            <label>Enter Password</label> 
            <input type="password" name="password"> 
        </div> 
        <div class="input-group"> 
            <button type="submit" class="btn"
                        name="login_user"> 
                Login 
            </button> 
        </div> 
        <p> 
            New Here?  
            <a href="register.php"> 
                Click here to regsiter! 
            </a> 
        </p>
        
    </form>
     
</div>
</body> 
  
</html> 