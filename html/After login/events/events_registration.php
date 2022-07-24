<?php
  session_start();
?>


<?php

include 'dbconn.php';

$id = $_GET['id'];

$selectquery = "select * from registration where id =$id";

$query = mysqli_query($conn,$selectquery);

$result = mysqli_fetch_assoc($query);

if(isset($_POST['update']))
{
  $First_name = mysqli_real_escape_string($conn, $_POST['First_name']);
  $last_name = mysqli_real_escape_string($conn, $_POST['last_name_name']);
  $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
  $event = mysqli_real_escape_string($conn, $_POST['events']);
 
 //update query elements into database
 
 $updatequery = "update registration set First_name = '$First_name', last_name = '$last_name', college= '$college', phone_no ='$phone_no',events='$event'"; 

 $query = mysqli_query($conn,$updatequery);
    
    if($query)
    {
        ?>
        <script> alert("Event Registration Sucessfull") </script>;
    }     
       <?php
        
   
    else
    {
       ?>
        <script> alert("Registration Unsucessfull")</script>;
        <?php
    }     

        
        
   
}
?>