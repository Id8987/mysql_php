<?php require('actions/showArticleContent.php') ;
    require('actions/reponseAction.php');
    require('actions/showResponseAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php');?>
<body>
<?php include('includes/navbar.php');?>
<br><br>
<div class="container">
    <?php 
    if(isset($errorMsg)){echo $errorMsg;}
    if(isset($question_date)){
        ?>
        <section class="show-content">
                <div class="container">
                <h3><?= $question_description;?></h3>
                <hr>
                <?= $question_title;?>
                <hr>
                <?= $question_author.' '.$question_date;?>
                </div>
        </section>
        <section class="show-reponse">
            <form  class="form-group" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Reponse</label>
                    <textarea name="reponse" id="" class="form-control"></textarea>
                    <button class="btn btn-dark" type="submit" name="validate">REPONDRE</button>
                </div>

            </form>
            <?php
                     while($reponse = $allResponse->fetch()){
                        ?>
                        <div class="container">
                                <div class="card">
                                    <div class="card-header">
                                        <?= $reponse['numC_author'] ;?>
                                           
                                            
                                    </div>
                                    <div class="card-body">
                                        <blockquote>
                                            <?= $reponse['content'];?>
                                        </blockquote>
                                        
                                    </div>
                                    
                                    
                                </div>
                         </div>
                        <?php
            
                    }
            
             ?>
        </section>
         
        <?php
       
    }
    ?>
</div>

    
</body>
</html>