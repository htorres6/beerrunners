<?php

  $pictures = array('stone.png', 'lagunitas.png', 
                    'samuel_adams.png', 'sierra_nevada.png', 
                    'victoria.jpg', 'avatar.png', 'bender.jpg');
  shuffle($pictures);
?>

<!DOCTYPE html>
<html>
<head>
	<title>beerrunners</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
      <style>
          body {
            background-image: url("../beerrunners_main/product_image/coconut_tree.png");
          }
      </style>
</head>
  <body>
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#"><b>Products</b></a>
            <a href="#"><b>Services</b></a>
            <a href="#"><b>Rewards</b></a>
            <a href="#"><b>Contact</b></a>
          </div>

          <div id="main">
              <span style="color: #FFFFFF; font-weight: bold; font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
          </div>
          <script>
              function openNav() {
                  document.getElementById("mySidenav").style.width = "250px";
                  document.getElementById("main").style.marginLeft = "250px";
                  document.body.style.backgroundColor = "#B06666";
              }

              function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                  document.getElementById("main").style.marginLeft = "0";
                  document.body.style.backgroundColor = "#B06666";
              }
          </script>

    <h1><center>WELCOME! To Beer Nation</center></h1>
    <br /><br />
      <div align="center">
      <table style="width: 100%; border: 0;">
        <tr>
    <?php
        for ($i = 0; $i < 3; $i++) {
           echo "<td style=\"width: 33%; text-align: center\">
                 <a href='../admin/product_insert.php'><img src=\"../beerrunners_main/product_image/";
           echo $pictures[$i];
           echo "\"/></a></td>";
        }
    ?>
        </tr>
     </table>
      </div>
  </body>
</html>
</body>
</html>