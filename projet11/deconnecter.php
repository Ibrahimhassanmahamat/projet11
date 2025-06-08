<?php
//demarrage de la session
session_start();
//permet de supprimer la partie user
unset($_SESSION["utilisateur"]);
//permet d'orienter la page
header("location:index.php");


?>