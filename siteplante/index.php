<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Plant Co</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<script src="jquery-3.4.0.min.js"></script>-->
    <script src="script.js"></script>
    <?php include_once './includes/head.php' ?>
    <style>
    body {
        background-color: #d6d4d4;
        min-width: 1000px;
    } 
    h2{
        font-family: "Comic Sans MS", "Comic Sans", cursive;
    }
    th{
        background-color: black;
        color: white;
    }
    td{
        background-color: black;
        color: white;
    }
    header{
    width: 100%;
    height: 100px;
    box-shadow: 0px 1px 5px 0px black;
    background-color: #DDDDDD;
    }
    li{
        padding: 25px;
    }

    #historique{
        padding-top:20px;
    }
    </style>
</head>
<body>   
    <!-- === HEADER === -->
    <header>
        <a href="index.php"><h1><span>Plante Co .</span></h1></a>
        <nav>
            <ul>
                <a href="./index.php"><li>Accueil</li></a>
                <a href="./connexion.php"><li>Connexion</li></a>
                <a href="./inscription.php"><li>Inscription</li></a>
                <a href="#formulaire"><li>Historique</li></a>
            </ul>
        </nav>
</header>
    <!-- === CONTENTS === -->
    <section id="container">   
    <div id="contain">       
        <div id="contain_image">
            <img src="./img/plante1.png" alt="photo_plante">
        </div>
        <div>

        <div class="form-group">
			<input type="submit" class="btn btn-primary btn-lg" value="Actualiser" />
        </div>
        
        </div>
        <div id="contain_infos">
            <div class="info" id="color_pression">
                <h2>Pression</h2>
                
                <hr id="color_pression">                
            </div>
            <div class="info"  id="color_humidite_air">
                <h2>Humidité air</h2>
                <hr id="color_humidite_air">
                
            </div>
            <div class="info" id="color_temperature">
                <h2>Température</h2>
                <hr id="color_temperature">
                
            </div>
            <div class="info" id="color_humidite_sol">
                <h2>Humidité sol</h2>
                <hr id="color_humidite_sol">
                
            </div>
            <div class="info" id="color_lumiere">
                <h2>Lumière</h2>              
                <hr id="color_lumiere">                
            </div>
            
    </div>
    
</div>
</section>
    <section id="historique">
    <div class="form-group">
    <button class="btn btn-primary btn-lg" type="button" OnClick="display();return false;">Historique</button>
    </div>
   <div id="formulaire">
     <table class="table">      
          <tr class= "masque">
            <th scope="col">Plant</th>
            <th scope="col">Times</th>
            <th scope="col">Descrition</th>
            <th scope="col">Value</th>
          </tr>
          <tr class= "masque">
            <th scope="row">?</th>
            <td>?</td>
            <td>?</td>
            <td>?</td>
          </tr>
          <tr class= "masque">
            <th scope="row">?</th>
            <td>?</td>
            <td>?</td>
            <td>?</td>
          </tr>
          <tr class= "masque">
            <th scope="row">?</th>
            <td>?</td>
            <td>?</td>
            <td>?</td>
          </tr>
      </table>
   </div>
</section>
   <script type="text/javascript" src="script.js"></script>
</body>
</html>