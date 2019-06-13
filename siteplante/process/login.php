<?php 

session_start();

if(isset($_POST['email']) && isset($_POST['mdp'])){

    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    if(!empty($email) && !empty($mdp)){

        /* Connexion à la bdd */

        include_once '../includes/db.php';

        $req = $db->prepare('SELECT password FROM users WHERE email=?');
        $req->execute([$email]);
        $data = $req->fetch();

        if(password_verify($mdp,$data['password'])){
            $_SESSION['is_connected'] = true;
            header('Location: ../dashboard.php');
            exit;
        }else{
            header('Location: ../connexion?req=mdp');
            exit;
        }


    }else{
        header('Location: ../connexion?req=vide');
        exit;
    }


}else{
    header('Location: ../connexion?req=vide');
    exit;
}