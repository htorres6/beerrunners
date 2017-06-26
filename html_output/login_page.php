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

form {
    border: 3px solid black;
    width: 50%;
    margin: 0px 0px 0px 230px;
}
h1 {
    color: black;
    background-color: #C38181;
    border-color: black;
    border-style: double;
    border-width: 15px;
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
    margin-left: 200px;
    margin: 8px 0;
    border-color: black;
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
.imgcontainer {
    background-color: black;
    text-align: center;
    margin: 0px 0px 10px 0px;
}
img.avatar {
    background-color: #716B74;
    width: 30%;
    border-radius: 35%;
}
.container {
    background-color: ;
    padding: 8px;
}
span.psw {
    float: right;
    padding-top: 16px;
   
}

/* Different styles for span and cancel button on extra small screens */

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
        background-image: url("../beerrunners_main/product_image/coconut_tree.png");
        background-color: #B06666;
    }
</style>

<h1><center><b>Login</b></center></h1>

<form action="/action_page.php" method="POST" >
  <div class="imgcontainer">
    <img src="../beerrunners_main/product_image/bender.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" style="background-color: white;" placeholder="Enter Username" name="" required><br />

    <label><b>Password</b></label>
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