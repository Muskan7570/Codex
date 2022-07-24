<?php

   session_start();
?>

<?php

include 'dbconn.php';
if(isset($_POST['submit']))
{
$first_name = mysqli_real_escape_string($conn,$_POST['first_name']); 
$last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
$college = mysqli_real_escape_string($conn,$_POST['college']);
$phone_no = mysqli_real_escape_string($conn,$_POST['phone_no']);
$events = mysqli_real_escape_string($conn,$_POST['events']);
}



     //inserting elements into database
    $insertquery = "insert into event_registration (first_name,last_name,college,phone_no,events) values('$first_name','$last_name','$college','$phone_no','$events')";
    $iquery = mysqli_query($conn,$insertquery);

    
    if($iquery)
    {
        ?>
        <script>
            alert("Registration Sucessfull");
            location.replace("/Codex/html/user_home.php");
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("Registration Unsucessfull");
        </script>
        <?php
    }
 
?>