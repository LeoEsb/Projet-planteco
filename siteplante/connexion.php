<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Connexion</title>
    <?php include_once './includes/head.php' ?>
    <style>
    body {
        background-image: url(img/natural.jpg);
        background-repeat: no-repeat;
        background-position: center;
        width:100%;
        height:750px;
    }
    h2 {
        color: white;
    }  
    </style>
</head>
<body>
    
    <!-- === HEADER === -->

        <?php include_once './includes/header.php' ?>

    <!-- === CONTENTS === -->

        <h2 id="titre_connexion">Connexion</h2>

        <form action="./process/login.php" id="connexion" method="post">
                <?php
                    if(isset($_GET['req'])){
                        switch($_GET['req']){
                            case "mdp":
                                echo '<p style="color:red;">Mauvais identifiant ou mauvais mot de passe</p>';
                                break;
                            case "vide":
                                echo '<p style="color:red;">Tous les champs sont obligatoires  </p>';
                                break;
                            case "vide":
                                echo '<p  style="color:red;">Tous les champs sont obligatoires </p>';
                                break;
                            default:
                                break;
                        }
                    }else{

                    }
                ?>
            <input name="email" placeholder="Votre email"/>
            <input name="mdp" placeholder="Mot de passe" type="password"/>
            <button type="submit">Connexion</button>
        </form>


</body>
</html>