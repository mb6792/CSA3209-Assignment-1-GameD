<?php
       $name = $_POST['full_name'];
       $email = $_POST['email_addr'];
       $subject = $_POST['subject'];
       $website = $_POST['website'];
       $message = $_POST['message'];
       $from = 'From: GameD Contact Form';
       $to = 'mb6792@gmail.com';

       $body = "From: $name\nE-Mail: $email\nSubject: $subject\nWebsite: $website\nMessage:\n $message";

           if (mail ($to, $subject, $body, $from)) {
           	echo '<p>Message Sent Successfully!</p>';
           } else {
           	echo '<p>Ah! Try again, please?</p>';
           }

    ?>


