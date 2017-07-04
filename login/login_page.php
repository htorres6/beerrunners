<?php 
/**
 * User: umber
 * Date: present
 * Time: 8:30 PM
 */

?>

<!DOCTYPE html>
<html>
<home>
    <title>Login</title>
    
        <link rel="stylesheet" stype="text/css" href="../css/login.css">

</home>
<body>

<h1><center><b>Login</b></center></h1>

<form action="login_page_data.php" method="POST" >
  <div class="imgcontainer">
    <img src="../beerrunners_main/product_image/bender.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label style="color: white;"><b>USER NAME..</b></label>
    <input type="text" style="background-color: white;" placeholder="Enter Username" name="username" required><br />

    <label style="color: white;"><b>PASSWORD..</b><span class="psw"><a href="#">Forgot your password?</a></span></label>
    <input type="password" style="background-color: white;" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="pro">LOG-IN</button>
  </div>

  <div class="container" style="background-color:#B06666">
    <a href="../signup/signup_page.php"><button type="button" class="signupbtn">Create your Beerrunners account</button>
  </div>
</form>

</body>
</html>