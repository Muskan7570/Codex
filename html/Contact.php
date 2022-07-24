<?php

    if(isset($_POST['send']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone_no = $_POST['phone_no'];
        $text_area = $_POST['text_area'];

        $to = 'prodaddy100@gmail.com';
        $subject = 'Form submission';
        $message = "Name: ".$first_name."\n"."Phone: ".$phone_no."\n". "Wrote the following: "."\n\n".$text_area;
        $headers = "From: ".$email;

        if(mail($to, $subject, $message,$headers))
        {
            echo "<h1>Sent Successfully! Thank You"." ".$first_name.", We will contact you shortly! </h1>";
        }
        else
        {
            echo "Something went wrong";
        }
    }

?>