<?php require('database2.php');
if(isset($_POST['validate'])){
    if(!empty($_POST['reponse'])){
        $user_reponse = nl2br(htmlspecialchars($_POST['reponse']));
        $insertReponse = $bdd->prepare('INSERT INTO reponse(id_author, numC_author, id_question, content) VALUES (?, ?, ?, ?)');
        $insertReponse->execute(array($_SESSION['id'], $_SESSION['numero'],$_GET['id'],$user_reponse));

    }else{
        echo "error niveau post";
    }
}else{
    echo "error niveau 2";
}