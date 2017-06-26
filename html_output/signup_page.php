<?php 
/**
 * User: umber
 * Date: present
 * Time: 8:30 PM
 */

?>

<!DOCTYPE html>
<html>
<style>  
    
    /**This function outputs the HTML & CSS login Form*/
body {

}
form {
    border: 3px solid black;
    width: 50%;
    margin: 0px 0px 0px 230px;
}
img.avatar {
    background-color: #716B74;
    width: 40%;
    border-radius: 50%;
}
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
    border-color: black;
}
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
    border-color: black;
}
button {
    background-color: #4CAF50;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
button:hover {
    opacity: 0.8;
}
.cancelbtn {
    width: auto;
    margin-left: 0px;
    padding: 10px 50px;
    background-color: #f44336;
}
.container {
    background-color: #B06666;
    padding: 16px;
    margin: 0px 0px 0px 0px;
}
span.psw {
    float: right;
    padding-top: 16px;
    padding-right: 0px;
}

/* Change styles for span and cancel button on extra small screens */

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<style>
    body {
        background-color: #B06666;
    }
</style>

<h1><center><b>Sign Up</b></center></h2>

<form action="/action_page.php" method="POST" >
  <div class="container">
    <label><b>First Name..</b></label>
    <input type="text" style="background-color: white;" placeholder="First Name" name="uname" required><br />

    <label><b>Last Name..</b></label>
    <input type="text" style="background-color: white;" placeholder="Last Name" name="uname" required><br />

    <label><b>E-mail..</b></label>
    <input type="text" style="background-color: white;" placeholder="E-mail" name="uname" required><br />

    <label><b>Username..</b></label>
    <input type="text" style="background-color: white;" placeholder="Enter Username" name="uname" required><br />

    <label><b>Password..</b></label>
    <input type="password" style="background-color: white;" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#B06666">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"><b>Forgot:  </b><a href="#">password?</a></span>
  </div>
</form>

</body>
</html>