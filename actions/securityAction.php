
<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: signin.php');

}
//Ce fichier permet de securiser la page afin de ne pas permettre a l'utilisateur
//de ne pas acceder a la page index en indiquant  le chemin d'acces 