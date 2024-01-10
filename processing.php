<?php
    $to = "message@lebloguedecyril.fr";
    $subject = $_POST["user_subject"];
    $message = $_POST["user_message"];
    $headers .= $_POST["user_email"];
    mail($to,$subject,$message,$headers);
    header("Location: https//www.lebloguedecyril.fr");
?>