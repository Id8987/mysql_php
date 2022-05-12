<?php 

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['desc-question']) AND !empty($_POST['question'])){

        $questionTitle = htmlspecialchars($_POST['question']);
        $questionDesc = nl2br(htmlspecialchars($_POST['desc-question']));
        $questionDate = date('d/m/Y');
        $questionAuthor = $_SESSION['id'];
        $questionAuthorNum = $_SESSION['numero'];

        //Inserer les questions

        $insertQuestion = $bdd->prepare('INSERT INTO question(titre, description, id_author, num_author, date_pub)VALUES(?, ?, ?, ?, ?)');
        $insertQuestion->execute(array(
             $questionTitle,
             $questionDesc,
             $questionAuthor,
             $questionAuthorNum,
             $questionDate
        ));

            //notification

            $successMsg = "Publie avec succes";

        
    }else{
        $errorMsg = " Veuiller remplir tout les champs ...";
    }
}else{
    echo 'error';
}