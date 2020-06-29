<?php 
session_start();
$title = "Inscription";

require 'class/Student.php';
require 'class/Utils.php';









?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="JQuery/jquery-3.4.1.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
   
    <header class="header">
        <div class="container_logo">
            <h1 class="header_logo">LOGO</h1>
        </div>
    </header>
    <div class="container col-sm-12 col-md-6 container_formulaire">
        <form action="" method="post">
            <div class="form-group">
                <label for="prenom">Prénom<span class="required">*</span></label>
                <input type="text" class="form-control" name="prenom" id="prenom">
            </div>

            <div class="form-group">
                <label for="nom">Nom<span class="required">*</span></label>
                <input type="text" class="form-control" name="nom" id="nom">
            </div>
            
            <div class="form-group">
                <label for="postnom">Post-nom<span class="required">*</span></label>
                <input type="text" class="form-control" name="postnom" id="postnom">
            </div>

            <div class="form-group">
                <label for="telephone">Téléphone<span class="required">*</span></label>
                <input type="number" class="form-control" name="telephone" id="telephone">
            </div>

            <div class="form-group">
                <label for="telephone_tuteur">Téléphone tuteur<span class="required">*</span></label>
                <input type="number" class="form-control" name="telephone_tuteur" id="telephone_tuteur">
            </div>

            <div class="form-group">
                <label for="classe">Classe</label><br>
                <select name="classe" id="classe">

                    <option value="1er">1er</option>
                    <option value="2ème">2ème</option>
                    <option value="3ème">3ème Littéraire</option>
                    <option value="3ème">3ème Scientifique</option>
                    <option value="3ème">3ème Commerciale</option>
                    <option value="3ème">3ème Pédagogie</option>
                    

                </select>
            </div>
            <div class="form-group">
                <label for="motdepasse">Mot de passe<span class="required">*</span></label>
                <input type="password" class="form-control" name="motdepasse" id="motdepasse">
            </div>
            
            <input type="submit" value="inscription" class="btn btn-primary">
        </form>
    </div>


</body>
</html>