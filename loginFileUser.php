<?php
include('Back_End/logincheck.php');

if(isset($_SESSION['username'])){
header("location: userprofile.php");
}
if(isset($_SESSION['mobi'])){
  
  ?>
  <script> 
  alert('Successful,Password is updated');     
   </script>
 <?php
 session_destroy();

  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="css/styleForLoginUser.css">
</head>
<body>
   <div class="form-box">
      <h1>Log In</h1>
      <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn">User</button>
                <a style="text-decoration:none" href="loginFile.php">
                    <button type="button" class="toggle-btn">Technician</button>
                </a>
        </div>
      <form id="user" class="input-group" action="" method="post">
        <input type="text" class="input-field" placeholder="User Name" name=username >
                               
        <input type="password" class="input-field" placeholder="Password" name=password >
                
        <button type="button" class="submit-btn"><a href="HomePage.php">Cancel</a></button>
        <button type="submit" name="submit" class="submit-btn">Login</button>

        <h5>Don't have an account? <a href="userRegistration.php">Sign Up here</a></h5>
        <h5>Forget Your Password? <a href="RecoverUserPass.php">Recover here</a></h5>
      </form>
       
   </div>
    
</body>
</html>