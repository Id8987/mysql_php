<?php

session_start();

if(!isset($_SESSION['auth'])){
    header('Location: ../signin.php');
}
require('../database2.php');
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $questionId = $_GET['id'];
    $checkIfQuestionExist = $bdd->prepare('SELECT id_author FROM question WHERE id =?');
    $checkIfQuestionExist->execute(array($questionId));

    if($checkIfQuestionExist->rowCount()>0){
        $infosUser = $checkIfQuestionExist->fetch();
        if($infosUser['id_author'] == $_SESSION['id']){
            $deleteQuestion = $bdd->prepare('DELETE FROM question WHERE id= ?');
            $deleteQuestion ->execute(array($questionId));
            header('Location: ../mesQuestions.php');
            
        }else{
            echo "Vous n'etes pas l'auteur de ce message";
        }

        
        
    }else{
        echo "Aucune question trouvee";
    }
    
}else{
     echo "pas trouvee";
}