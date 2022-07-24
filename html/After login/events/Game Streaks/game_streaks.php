<?php
  session_start();

  if(!isset($_SESSION['username']))
  {
    echo "Your're logged out";
    header('location:/Codex/html/login_form.html');
  }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Streaks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="game_streaks_style.css">
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
                <a class="logo" href="/Codex/html/user_home.php"><img src="icon.png " width="100" alt=""></a>
              
              <div class="navbar">
                <ul>
                  <li><a href="/Codex/html/user_home.php">HOME</a></li>
                  <li class="dropdown"><a href="/Codex/html/After login/events/events.php">EVENTS</a>
                   
                  </li>
                  
                 
                 
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="/Codex/html/user dashboard/user_dashboard.php"><?php echo $_SESSION['username'] ; ?>
                          <span class="caret"></span>
                    </a>
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
    <div class="about-section">
        <div class="inner-container">
            <h1>Game Streaks</h1>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
                
            </p>
               Date : 21/09/2020<br>
               Venue : UIt (B block)<br>
               Coordinator : John Doe
         <div class="register">
             <a href="/Codex/html/After login/events/events_reg_form.php">Register</a>
         </div>
        </div>
    </div>
</script>
<script type="text/javascript">
  window.addEventListener("scroll",function()
       {
           var header =document.querySelector("header");
           header.classList.toggle("sticky",window.scrollY > 0);
       })
</script>
</body>
</html>