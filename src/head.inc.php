<?php
    class User{
        public $_style ="./css/style.css";
        public $_title ="Votre site de PC Gamer";
    }
    $_user_page = new User;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Achat et vente">
    <title> 

    <?= $_user_page ->_title;?>
    
    </title> 
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="icon" type= "image/ico" href="./favicon/site.webmanifest">  
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="<?= $_user_page ->_style ?>">

</head>