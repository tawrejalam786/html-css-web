<?php
  $name = $_Post['name'];
  $visitor_phone = $_POST['phone'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

   $email_from = 'pkhan0462@gmail.com';

   $email_subject = "New Form Submission";

   $email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n".


      $to = "pkhan0462@gmail.com";

      $headers = "From: $email_from \r\n";

      $headers .= "Reply-To: $visitor_email \r\n";

      mail($to,$email_subject,$email_body,$headers);

      header("Location: index.html"); 



  ?>