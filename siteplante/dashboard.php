<?php

session_start();

if(isset($_SESSION['is_connected']) && $_SESSION['is_connected'] == true ){ ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Dashboard</title>
        <?php include_once './includes/head.php' ?>
    </head>
    <body>
            <!-- === HEADER === -->

            <?php include_once './includes/dashboard_header.php' ?>
    </body>
    </html>

<?php
}else{
    header('Location: connexion.php');
    exit;
}