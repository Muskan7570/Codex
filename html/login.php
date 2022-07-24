<?php
   session_start();
?>

<?php
   
   include 'dbconn.php';
   if(isset($_POST['submit']))
   {
       $email = $_POST['email'];
       $password = $_POST['password'];
       
       //searching the email if it exists in db or not
       $eamil_search = "select * from registrations where email = '$email'";
       $query = mysqli_query($conn,$eamil_search);

       $email_count = mysqli_num_rows($query);
       if($email_count)
       {
           $email_pass = mysqli_fetch_assoc($query);

           $db_pass = $email_pass['password'];

           $_SESSION['username'] = $email_pass['username'];
           $_SESSION['id'] = $email_pass['id'];

           $pass_decode = password_verify($password,$db_pass);

           if($pass_decode)
           {
              
               ?>
               <script>
                   location.replace("user_home.php");
               </script>
               <?php
           }
           else
           {
               echo "Incorrect Password";
           }
         
       }
       else
       {
           echo "Invalid Email";
       }
   }

?>