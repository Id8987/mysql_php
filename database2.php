<?php

try{
   
    $bdd = new PDO('mysql:host=localhost;dbname=plateformeetudiant;charset=utf8;port=3307','root','root');
} catch(Exception $e){

    die('Une erreur niveau bdd a ete trouvee: '.$e->getMessage());
}