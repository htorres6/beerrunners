<?php require_once("../classes/ini.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Profile</title>

<!--JQUERY CORE-->
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">
    </script>
    <!--JQUERY CORE-->
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 


    


</head>
<body>

<br> <br>
<br> <br>

<?php 

  $id= $_SESSION['user_id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $result=$db->query($sql);
  if ($row= $result->fetch_object()) {
        $fname=$row->first_name;
        $lname=$row->last_name;
        $address=$row->address;
        $state=$row->state;
        $phone=$row->phone_number;
        $email=$row->email; 
  }

?>



<form action="../update/user_update_data.php" method="POST">

<div class="container">
  <div class="row" align="center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <img src="../beerrunners_main/product_image/avatar.png" width="150" height="150" class="img-circle">
    </div>
  </div>
</div> 

<div class="container">
  <div class="row" align="center">
    <div class="col-md-4">
      <label>First Name:</label><br>
      <input class="form-control" type="text" name="first_name" value="<?php echo $fname;?>"><br><br>

      <label>Last Name:</label><br>
      <input type="text" name="last_name" value="<?php echo $lname; ?>"><br><br>
    </div>

    <div class="col-md-4">
      <label>Address:</label><br>
      <input type="text" name="address" value="<?php echo $address; ?>"><br><br>


      <label>State:</label><br>
      <input type="text" name="state" value="<?php echo $state; ?>"><br><br>
    </div>

    <div class="col-md-4">
      <label>Phone Number:</label><br>
      <input class="form-control" type="text" name="phone_number" value="<?php echo $phone; ?>"><br><br>

      <label>Email:</label><br>
      <input class="form-control" type="text" name="email" value="<?php echo $email; ?>"><br><br>   
    </div>
  </div>

  <div class="row" align="right">
    <div class="col-md-12">
      <input type="submit" name="submit" value="update">
    </div>
  </div>
</div>

</form>

<a href="../index.php" class="btn btn-primary">Home</a>


 <script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>




