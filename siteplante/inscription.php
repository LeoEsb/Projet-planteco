<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription</title>
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
    #button{
        color: pink;
    }
    </style>
</head>
<body>
    
    <!-- === HEADER === -->

        <?php include_once './includes/header.php' ?>

    <!-- === CONTENTS === -->

        <h2 id="titre_connexion">Inscription</h2>


        <form action="./process/registration.php" id="connexion" method="post">
                <?php
                    if(isset($_GET['req'])){
                        switch($_GET['req']){
                            case "ok":
                                echo '<p> Votre inscription est réussite, veuillez vous dirigez vers la page de connexion</p>';
                                break;
                            case "same":
                                echo '<p style="color:red;"> Les deux mots de passe ne sont identiques </p>';
                                break;
                            case "vide":
                                echo '<p  style="color:red;"> Tous les champs sont obligatoires </p>';
                                break;
                            default:
                                break;
                        }
                    }else{

                    }
                ?>
            <input name="first_name" placeholder="Votre prénom"/>
            <input name="last_name" placeholder="Votre nom"/>
            <input name="email" placeholder="Votre email" />
            <input name="first_password" placeholder="Votre mot de passe" type="password"/>
            <input name="second_password" placeholder="Confirmez votre mot de passe" type="password"/>
            <button div="button" type="submit">Inscription</button>
        </form>


</body>
</html>