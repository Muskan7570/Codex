<?php
  session_start();

  if(!isset($_SESSION['username']))
  {
    echo "Your're logged out";
    header('location:/Codex/html/login_form.html');
  }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Events</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="icon" href="images/icon.png">
        <link rel="stylesheet" href="css/events_style.css">

    </head>
    <body>
        <section class="banner">
            
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                
              </div>
              <header>
                <a class="logo" href="/Codex/html/home.html"><img src="images/icon.png " width="100" alt=""></a>
              
              <div class="navbar">
                <ul>
                  <li><a href="/Codex/html/user_home.php">HOME</a></li>
                  <li class="dropdown"><a href="">EVENTS</a>
                  </li>
             
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['username'] ; ?>
                          <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                         <li><a href="/Codex/html/user dashboard/user_dashboard.php">Profile</a></li>
                      </ul>
                    <ul class="dropdown-menu">
                         <li><a href="/Codex/html/logout.php">logout</a></li>
                      </ul>
               </li>        
                </ul>
              </div>
              </header>
            </div>
          </nav>
        </section>
        <div id="particles-js">
        <div class="container3" >
            <div class="box">
                <div class="imgBx">
                    <img src="images/pic1.jpg" width="550px" height="350px" alt="error">
                </div>
                <div class="contentBx">
                    <h2>
                        Technothon
                    </h2>
                    <p>
                        Don't talk Cheap Show me the Code
                        
                    </p>
                    <a href="technothon/technothon.php">Read more</a>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="images/pic2.jpg" width="550px" height="350px" alt="error">
                </div>
                <div class="contentBx">
                    <h2>
                        Game Streaks
                    </h2>
                    <p>
                      Gamer's never die they respawn.
                     
                    </p>
                    <a href="Game Streaks/game_streaks.php">Read more</a>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="images/pic3.jpg" width="550px" height="350px" alt="error">
                </div>
                <div class="contentBx">
                    <h2>
                        Robomania
                    </h2>
                    <p>
                       Hey maniacs, let's make some robot
                      
                    </p>
                    <a href="Robomania/robomania.php">Read more</a>
                </div>
            </div>
        
        </div>
    </div>
        
        <script type="text/javascript" src="vanilla-tilt.js"></script>
        <script type="text/javascript">
            VanillaTilt.init(document.querySelectorAll(".box"), {
                max: 25,
                speed: 400
            });
        </script>
          <script type="text/javascript">
            window.addEventListener("scroll",function()
                 {
                     var header =document.querySelector("header");
                     header.classList.toggle("sticky",window.scrollY > 0);
                 })
         </script>
        
        <script type="text/javascript" src="app.js"></script>
    </body>

</html>