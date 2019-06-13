<?php
$db = new PDO('mysql:host=localhost;dbname=dbplanteco','root','root');
if($db){
	
	$req_temperature=$db->query('SELECT valeur,date FROM temperature ORDER BY ID DESC');
	$req_temperature->execute();
    $data_temperature=$req->fetch();
    $req_lumiere=$db->query('SELECT valeur,date FROM lumiere ORDER BY ID DESC');
	$req_lumiere->execute();
    $data_lumiere=$req->fetch();
    $req_hum_air=$db->query('SELECT valeur,date FROM humidite_air ORDER BY ID DESC');
	$req_hum_air->execute();
    $data_hum_air=$req->fetch();
    $req_hum_sol=$db->query('SELECT valeur,date FROM humidite_sol ORDER BY ID DESC');
	$req_hum_sol->execute();
    $data_hum_sol=$req->fetch();
    $req_pression=$db->query('SELECT valeur,date FROM pression ORDER BY ID DESC');
	$req_pression->execute();
    $data_pression=$req->fetch();
}
    
else{
    
    echo'Erreur connexion';
}
?>