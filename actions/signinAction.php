<?php 
require('actions/database.php');
if(isset($_POST['validate'])){

    if(!empty($_POST['numero']) AND !empty($_POST['mdp']) ){
       
        $user_numero = htmlspecialchars($_POST['numero']);
        $user_mdp = htmlspecialchars($_POST['mdp'],PASSWORD_DEFAULT);

         //verifier si l'utilisateur existe deja
         $checkIfUserExist = $bdd ->prepare('SELECT * FROM users WHERE numeroCarte = ?');
         $checkIfUserExist->execute(array($user_numero));

         if($checkIfUserExist->rowCount() >0){

            $userInfos =  $checkIfUserExist-> fetch(); //pour la recuperation des variables dans un tableau

            if(password_verify($user_mdp,$userInfos['mdp'])){
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInfos['id'];
                $_SESSION['lastname'] = $userInfos['nom'];
                $_SESSION['firstname'] = $userInfos['prenom'];
                $_SESSION['numero'] = $userInfos['numeroCarte'];

                header('location: index.php');

            }else{
                $errorMsg = "Votre mot de passe est incorrecte";
            }




         }else{
            $errorMsg = "Votre Numero de carte est incorrecte ";
         }


    } else
    {
        $errorMsg = "Veuiller remplir tous les champs";
    }

} 
 ?>
