<?php


   require ("dbconn.php");
   function getUserData($id)
   {
  
       $array = array();
       
       $q = mysql_query("SELECT * FROM 'registration' WHERE 'id' = ".$id);
       while($r = mysqli_fetch_assoc($q))
       {
             $array['id'] = $r['id'];
             $array['username'] = $r['username'];
             $array['email'] = $r['email']; 
       }
       return $array; 
       
   }

   function getId($username)
   {
    
       $q = mysql_query("SELECT 'id' FROM 'registration' WHERE 'username' ='" .$username."'");
       while($r = mysqli_fetch_assoc($q))
       {
           return $r['id'];
       }
   }
   
?>