<?php
require('vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (!empty($_POST) AND isset($_POST)) {
    $errors = [];
    $success = '';

    if (empty($_POST['name']) and !isset($_POST['name'])) {
        $errors['name'] = 'Champ nom obligatoire !';
    }

    if (empty($_POST['email']) and !isset($_POST['email'])) {
        $errors['mail'] = 'Champ adresse mail obligatoire !';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['mail1'] = 'Champ adresse email invalide';
    }

    if (!is_numeric($_POST['phone'])) {
        $errors['phone'] = 'Champ numéros de télephone invalide';
    }

    if (empty($_POST['message']) and !isset($_POST['message'])) {
        $errors['message'] = 'Champ message obligatoire !';
    }

    if (empty($errors)) {
        $mail = new PHPMailer();
        //$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'mail.gmx.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'belmehdi@gmx.com';
        $mail->Password = 'Mn2151.2151';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->isHTML(true);
        $mail->From = 'belmehdi@gmx.com';
        $mail->FromName = 'formulaire contact portfolio ';
        $mail->addAddress('bilal.belmehdi@gmail.com');

        $mail->Subject = 'Demande de contact';

        $mail->Body = "<p>" . $_POST['name'] . "<br>" . $_POST['email'] . "<br>" . $_POST['phone'] . "<br>" . $_POST['message'] . "</p>";

        //envoi du mail
        if (!$mail->send()) {
            $errors['fail'] = "erreur lors de l\'envoi du mail";
            $errors['fail'] .= "Erreur:" . $mail->ErrorInfo;
        } else {
            $success = 'email envoyé';
        }


    }

}

