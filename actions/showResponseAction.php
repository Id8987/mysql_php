<?php require('database2.php');
$allResponse = $bdd->prepare('SELECT id_author, numC_author, id_question, content WHERE id_question=? ');
$allResponse->execute(array($_GET['id']));