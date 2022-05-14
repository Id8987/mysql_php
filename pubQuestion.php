<?php

require('actions/pubQuestionAction.php'); 
require('actions/security2Action.php') ;
?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php');?>
<body>
  <?php include('includes/navbar.php');?>
  <br><br><br><br><br>
 <form class="contaiiner" method="POST"> 
 <?php
  if(isset($errorMsg)){
       echo '<p class="error">'.$errorMsg.'</p>';
    }elseif(isset($successMsg)){
        echo '<p class="error">'.$successMsg.'</p>';
    } 
  ?>  
        <div class="container">
        <div class="mb-3">
        <label for="" class="form-label">Theme de la question</label>
        <input type="text" class="form-control"  placeholder="thematique" name="desc-question">
        </div>
        

        <div class="mb-3">
        <label for="" class="form-label">Poser une question</label>
        <textarea type="text" class="form-control"  placeholder="Question?" name="question"></textarea>
        </div> 
        
        <button type="submit" class="btn btn-primary" name="validate">Publier</button>
        </div>
        
</form> 
</body>
</html>