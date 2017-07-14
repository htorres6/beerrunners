<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign Up</title>

    <!--JQUERY CORE**-->
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">
    </script>
    <!--JQUERY CORE**-->

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <style>
        body{
            background-image: url("../beerrunners_main/product_image/coconut_tree.png");
        }
    </style>
    <!--CSS-->

    <!--BOOTSTRAP-->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <!--BOOTSTRAP-->

<body>
            <h2><center><b>Sign Up</b></center></h2>

<!--SIGN-UP FORM STARTS**-->
<form action="signup_page_data.php" method="POST" >
    <div class="container">
        <div class="row" align="center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="../index.php"><img src="../beerrunners_main/product_image/stone.png" width="100" height="100" class="img-circle"></a>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row" align="center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <span>
                <label style="color: green;">First name..</label><br>
                <input type="text" style="background-color: #dbdbdb ;" placeholder="First name" name="first_name" required>

                <br>

                <label style="color: green;">Last name..</label><br>
                <input type="text" style="background-color: #dbdbdb ;" placeholder="Last name" name="last_name" required>
              </span>

                <br><br>

                <label style="color: green;">E-mail..</label><br>
                <input type="text" style="background-color: #dbdbdb ;" placeholder="E-mail" name="email" required>
                
                <br><br>

                <label style="color: green;"">Username..</label><br>
                <input type="text" style="background-color: #dbdbdb ;" placeholder="Username" name="user_name" required>

                <br>

                <label style="color: green;">Enter Password..</label><br>
                <input type="password" style="background-color: #dbdbdb ;" placeholder="Password" name="password" required>

                <br><br>

                <label style="color: green;"">Address..</label><br>
                <input type="text" style="background-color: #dbdbdb ;" placeholder="Address" name="address" required>

                <br><br>

            </div>
        </div>
    </div>    
            
    <div class="container">
        <div class="row" align="center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">         
                </a><button style="color: blue;" type="submit" name="submit">Create account</button><br>

                <span class="psw" style="background-color: orange;"><b>Already have an account ?</b></span>  <a href="../login/login_page.php">Log-In</a>
            </div>
        </div>
    </div>
</form>
<!--END OF FORM-->

</body>
</html>