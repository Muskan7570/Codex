<?php
  session_start();

  if(!isset($_SESSION['username']))
  {
    echo "Your're logged out";
    header('location:/Codex/html/login_form.html');
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Event Registration Form</title>

    <!-- Icons font CSS-->
    
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="/Codex/html/after login/events/icon.png">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
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
                <a class="logo" href="/Codex/html/home.html"><img src="icon.png " width="100" alt=""></a>
              
              <div class="navbar">
                <ul>
                  <li><a href="/Codex/html/user_home.php">HOME</a></li>
                  <li class="dropdown"><a href="/Codex/html/After login/events/events.php">EVENTS</a>
                  </li>
                  
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="/Codex/html/user dashboard/user_dashboard.php" name = "username"><?php echo $_SESSION['username'] ;?>
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
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                <div class="card-body">
                    <form action="event_form_registration.php" method="POST">
                     
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" value="" required>
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" value="" required>
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name = college">College </div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="college" required>
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="United College of Engineering and Research (UCER)">United College of Engineering and Research (UCER)</option>
                                            <option value="United Institute of Technology(UIT)">United Institute of Technology(UIT)</option>
                                            <option value="United College of Engineering and Management (UCEM)">United College of Engineering and Management (UCEM)</option>
                                            <option value="United Institute of Management (UIM)">United Institute of Management (UIM)</option>
                                            <option value="United Institute of Management (UIM)">United Institute of Management (FUGS)</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-row m-b-55">
                            <div class="name = phone_no">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                  
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone_no" value="" required>
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name = events">Events</div>
                            <div class="p-t-15">
                            <label class="checkbox-container m-r-55">Technothon
                                    <input type="checkbox" name="events" value="Technothon" required>
                                   
                                    <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-container m-r-55">Game Streaks
                                    <input type="checkbox" name="events" value="Game Streaks" required>
                                   
                                    <span class="checkmark"></span>
                            </label>
                               
                            </div>
                        </div>

                       
                        <div>
                            <button class="btn btn--radius-2 btn--red"  type="submit" name="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script type="text/javascript">
  window.addEventListener("scroll",function()
       {
           var header =document.querySelector("header");
           header.classList.toggle("sticky",window.scrollY > 0);
       })
</script>
</body>

</html>
