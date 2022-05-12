<?php
require('actions/database.php');
if(isset($_POST['validate'])){

    if(!empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['numero']) AND !empty($_POST['mdp']) ){
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_numero = htmlspecialchars($_POST['numero']);
        $user_mdp = password_hash($_POST['mdp'],PASSWORD_DEFAULT);

         //verifier si l'utilisateur est deja inscrit
         $checkIfUserExist = $bdd ->prepare('SELECT numeroCarte FROM users WHERE numeroCarte = ?');
         $checkIfUserExist->execute(array($user_numero));
         if($checkIfUserExist->rowCount()==0){

            $insertUser = $bdd->prepare('INSERT INTO users(nom, prenom, numeroCarte, mdp) VALUES(?,?,?,?)');
            // ? = je suis pret a recevoir des donnees 
            $insertUser->execute(array($user_lastname, $user_firstname, $user_numero, $user_mdp));
            //Pour sortir les infos de l'utilisateur afin de l'authentifier
            $getInfosOfUser = $bdd->prepare('SELECT id, nom, prenom, numeroCarte FROM users WHERE nom = ? AND prenom = ? AND numeroCarte = ?');
            $getInfosOfUser->execute(array($user_lastname,$user_firstname,$user_numero));
            $userInfos =  $getInfosOfUser-> fetch(); //pour la recuperation des variables dans un tableau

            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['lastname'] = $userInfos['nom'];
            $_SESSION['firstname'] = $userInfos['prenom'];
            $_SESSION['numero'] = $userInfos['numeroCarte'];


             //rediriger l'utilisateurvers la page principale
             header('Location: index.php');



         }else{
            $errorMsg = "Cette Utlisateur existe deja ";
         }


    } else
    {
        $errorMsg = "Veuiller remplir tous les champs";
    }

} 