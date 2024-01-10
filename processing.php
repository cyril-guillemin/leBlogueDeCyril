<?php
    $to = "message@lebloguedecyril.fr";
    $subject = $_POST["user_subject"];
    $message = $_POST["user_message"];
    $headers .= $_POST["user_email"];

    if(mail($to,$subject,$message,$headers)) {
        echo "Message envoyé avec succès !";
    }
    else
    {
        echo "Erreur. Le message ne peut pas être envoyé.";
    }
?>