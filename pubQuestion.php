<?php

require('actions/pubQuestionAction.php'); 
require('actions/security2Action.php') ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Publier une question </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        nav{
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
        }
        .error{
            color: red;
        }
        
    </style>
   
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">TDSI-FORUM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="index.php">Questions</a>
              <a class="nav-link" href="pubQuestion.php">Poser une question</a>
              
            </div>
        </div>
        </div>
     </nav>
<br><br>





 <form class="contaiiner" method="POST"> 
 <?php
  if(isset($errorMsg)){
       echo '<p class="error">'.$errorMsg.'</p>';
    }elseif(isset($successMsg)){
        echo '<p class="error">'.$successMsg.'</p>';
    } 
  ?>  

        <div class="mb-3">
        <label for="" class="form-label">Titre de la question</label>
        <input type="text" class="form-control"  placeholder="titre" name="desc-question">
        </div>
        

        <div class="mb-3">
        <label for="" class="form-label">Description de la question</label>
        <textarea type="text" class="form-control"  placeholder="Question?" name="question"></textarea>
        </div> 
        
        <button type="submit" class="btn btn-primary" name="validate">Publier</button>
        
        
</form> 
</body>
</html>