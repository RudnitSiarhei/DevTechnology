<?php
    $nameUser = $_POST['name'];
    $mailUser = $_POST['email'];
    $phoneUser = $_POST['phone'];
    $messageUser = $_POST['message'];
    $subject = "=?utf-8?B?".base64_encode("Message from the site") . "?=";
    $headers = "From: $mailUser\r\nReply-to: $mailUser\r\nContent-type: text/html; charset=utf-8\r\n";

    $success = mail("rudnitski_siarhei@gmail.com", $subject, $messageUser, $headers);
    echo "Dear " . $nameUser . "! Your message has been sent successfully.";
?> 