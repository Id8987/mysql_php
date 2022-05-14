<?php require('actions/database.php');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $checkIfQuestionExist = $bdd->prepare('SELECT* FROM question WHERE id = ?');
    $checkIfQuestionExist->execute(array($_GET['id']));

    if($checkIfQuestionExist->rowCount()>0){
        $questionInfo = $checkIfQuestionExist->fetch();
        $question_title = $questionInfo['titre'];
        $question_description = $questionInfo['description'];
        $question_id_author = $questionInfo['id_author'];
        $question_author = $questionInfo['num_author'];
        $question_date = $questionInfo['date_pub'];
    }else{
        $errorMsg ="Aucune question n'a ete trouvee";
    }

}else{
    $errorMsg ="Aucune question n'a ete trouvee a cause d'abscence d' identifiant";
}