<?php require('actions/mesQuestionsAction.php');?>
<!DOCTYPE html>
<html lang="en">
  <?php include('includes/head.php');?>
<body>
<?php include('includes/navbar.php'); ?>

    <?php
     while($question = $getAllMyQuestions->fetch()){
       ?>
            <div class="container">
                <div class="card">

                      <div class="card-header">
                        TDSI-FORUM
                      </div>

                      
                          <div class="card-body">
                            <h5 class="card-title"> <?= $question['description'];?></h5>
                            <p class="card-text"> <?= $question['titre'];?></p>
                            <a href="actions/deleteQuestionAction.php?id= <?= $question['id'];?>" class="btn btn-danger">SUPPRIMER</a>
                            <a href="#" class="btn btn-dark">ACCEDER</a>
                            
                          </div>
                      

                  </div>
            </div>
       <?php
     }
    ?>

    
</body>
</html>