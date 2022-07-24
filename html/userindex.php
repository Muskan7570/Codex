<?php

   require("functions.php");
   session_start();

?>


<html>
     <head>
          <meta charset="UTF-8">
     
     <title>Profile</title>
     <link rel="stylesheet" href="userindex_style.css"/>
     </head>
     <body>
        <?php 
        if(isset($_SESSION['username']))
        {
           $userData =  getUserData(getId($_SESSION['username']));
         ?>
            <div id="menu">
                <a href="logut.php"></a>
            </div>
          <?php echo $userData['username']; ?> {Last Name}
          <div id="wrapper">
              <div id="profilepicture">
                   
              </div>
              
          </div>
          <?php
        }
        ?>

     </body>
</html>