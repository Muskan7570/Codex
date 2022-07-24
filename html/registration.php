<?php

   session_start();
?>

<?php

include 'dbconn.php';
if(isset($_POST['submit']))
{
$username = mysqli_real_escape_string($conn,$_POST['username']); 
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
}

$pass = password_hash($password, PASSWORD_BCRYPT); //securing the password using encryption

//email verification if same email exists
$emailquery = "select * from registrations where email = '$email'"; 
$query = mysqli_query($conn,$emailquery);

//counting the no. of rows 
$emailcount = mysqli_num_rows($query);
if($emailcount>0)
{
    echo "Email already exists";
}
else
 {
     //i nserting elements into database
    $insertquery = "insert into registrations (username,email,password) values('$username','$email','$pass')";
    $iquery = mysqli_query($conn,$insertquery);

    
    if($iquery)
    {
        ?>
        <script>
            alert("Registration Sucessfull");
            location.replace("login_form.html");
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
 }
?>