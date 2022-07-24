<?php

    $server = "localhost";
    $User = "root";
    $Password = "";
    $dbname = "codex";
 
$conn = mysqli_connect($server,$User,$Password,$dbname);

    if($conn)
    {
        ?>
        <script>
            alert("Connection Sucessfull");
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("NO Connection ");
        </script>
        <?php
    }
?>