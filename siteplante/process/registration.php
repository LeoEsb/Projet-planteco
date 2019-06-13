<?php

if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['first_password']) && isset($_POST['second_password'])){
    
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $first_password = $_POST['first_password'];
    $second_password = $_POST['second_password'];

    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($first_password) && !empty($second_password)){
        if($first_password == $second_password){

            /* Connexion bdd */

            include_once '../includes/db.php';

            /* Hash du mot de passe */

            $password = password_hash($first_password,PASSWORD_BCRYPT);

            /* Requêtte pour insérer le nouvel utilisateur */

            $req = $db->prepare('INSERT INTO users(first_name,last_name,email,password,date_registration,rank) VALUES (?,?,?,?,NOW(),1)');
            $req->execute([$first_name,$last_name,$email,$password]);
            
            header('Location: ../inscription.php?req=ok');
            exit;
        }else{
            header('Location: ../inscription.php?req=same');
            exit;
        }
    }else{
        header('Location: ../inscription.php?req=vide');
        exit;
    }
}else{
    header('Location: ../inscription.php?req=vide');
    exit;
}