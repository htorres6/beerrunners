<?php 
/**
 * User: umber
 * Date: present
 * Time: 8:30 PM
 */

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>

        <link rel="stylesheet" type="text/css" href="../css/signup.css">
<body>

<h1><center><b>Sign Up</b></center></h2>

<form action="signup_page_data.php" method="POST" >
  <div class="container">
    <label><b>Your name..</b></label>
    <input type="text" style="background-color: white;" placeholder="Your name" name="first_name" required><br />

    <label><b>E-mail..</b></label>
    <input type="text" style="background-color: white;" placeholder="E-mail" name="email" required><br />

    <label><b>Username..</b></label>
    <input type="text" style="background-color: white;" placeholder="Enter Username" name="username" required><br />

    <label><b>Password..</b></label>
    <input type="password" style="background-color: white;" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit">Create your Beerrunners account</button>

    <span class="psw"><b>Already have an account? </b><a href="../login/login_page.php">Log-In</a></span> 
  </div>
</form>

</body>
</html>