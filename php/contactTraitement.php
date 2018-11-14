<?php
if (!empty($_POST) AND isset($_POST)){
    $errors = [];
    $success = '';

    if (empty($_POST['name']) and !isset($_POST['name'])) {
        $errors[] = 'Champ nom obligatoire !';
    }

    if (empty($_POST['email']) and !isset($_POST['email'])) {
        $errors[] = 'Champ adresse mail obligatoire !';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Champ adresse email invalide';
    }

    if (!is_numeric($_POST['phone'])) {
        $errors[] = 'Champ numéros de télephone invalide';
    }

    if (empty($_POST['message']) and !isset($_POST['message'])) {
        $errors[] = 'Champ message obligatoire !';
    }

    if (empty($errors)) {

        $destinataire = 'bilal.belmehdi@gmail.com';
        
        $sujet = 'Portfolio contact';
        
        $message = 'Nom : '.$_POST['name'].' email: '.$_POST['email'].' Num téléphone: '.$_POST['phone'].' message: '.$_POST['message'];
        
        mail($destinataire, $sujet, $message);
        $success ='Email envoyé!';
        header('Location:index.php');
    }
}

