<?php include('server.php') ?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title> 
        Registration Form 
    </title> 
    <link rel="stylesheet" type="text/css"
                    href="style.css"> 
</head> 
  
<body> 
    <div class="header"> 
        <style>
body{
      background-image: url("https://batampos.co.id/wp-content/uploads/2017/04/tentara.gif");
      background-repeat: no-repeat;
      background-position: top;
      height:1100px;
      background-size: cover;
      position: relative; 
   }   
</style>
        <h2>Register</h2> 
    </div> 
       
    <form method="post" action="register.php"> 
   
        <?php include('errors.php'); ?> 
   
        <div class="input-group"> 
            <label>Enter Username</label> 
            <input type="text" name="username"
                value="<?php echo $username; ?>"> 
        </div> 
        <div class="input-group"> 
            <label>Email</label> 
            <input type="email" name="email"
                value="<?php echo $email; ?>"> 
        </div> 
        <div class="input-group"> 
            <label>Enter Password</label> 
            <input type="password" name="password_1"> 
        </div> 
        <div class="input-group"> 
            <label>Confirm password</label> 
            <input type="password" name="password_2"> 
        </div> 
        <div class="input-group"> 
            <button type="submit" class="btn"
                                name="reg_user"> 
                Register 
            </button> 
        </div> 
        <p> 
            Already having an account? 
            <a href="login.php"> 
                Login Here! 
            </a> 
        </p> 
    </form> 
</body> 
</html