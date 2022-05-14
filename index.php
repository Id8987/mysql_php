<?php require('actions/securityAction.php')?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php') ?>
<body>

<?php include('includes/navbar.php')?>
<?php
require('actions/showQuestionsAction.php'); 
?>
<?php
   while($question = $getAllQuestion->fetch()){
       ?>
       <div class="container">
       <div class="card">
           <div class="card-header">
             <a href="article.php?id= <?=$question['id'] ;?>">   <?= $question['description'] ;?></a>
                <?=$question['date_pub'] ;?>
                
           </div>
           <div class="card-body">
               <blockquote>
                 <?= $question['titre'];?>
                </blockquote>
            
           </div>
           <div class="card-footer">
               by <?=$question['num_author'] ;?>
           </div>
           
       </div>
       <br><br>
       </div>
       <?php
   }
?>

    
</body>
</html>