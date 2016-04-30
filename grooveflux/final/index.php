<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
    require_once("models/header.php");
if(isUserLoggedIn()){ 
    header('Location: account.php') ;
} 
else{ 
    header('Location: home.php') ; 
} 
?>