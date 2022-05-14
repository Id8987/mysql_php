<?php require('actions/signinAction.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   

</head>
<body>
    <div class="container">
        <h3>Bienvenue </h3>
    </div>
   <div class="container-fluid">
        <form class="container" method="POST">

                <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'<p>';} ?>
                <div class="mb-3">
                <label for="" class="form-label">Numero Carte Etudiant</label>
                <input type="text" class="form-control"  placeholder="Numero de votre carte etudiant" name="numero">
                </div>

                <div class="mb-3">
                <label for="" class="form-label">Mots de passe</label>
                <input type="password" class="form-control"  placeholder="password" name="mdp">
                </div> 
                <button type="submit" class="btn btn-dark" name="validate">S'inscrire</button>
                <br><br>
                <a href="signup.php"> <p>Vous n'avez pas de compte? S'inscrire?</p></a>
                
            </form>

   </div>
    


    
</body>
</html>