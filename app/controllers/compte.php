<?php
include "../views/header.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        LA BOULANGERIE
    </title>
    <!-- Bootstrap core CSS -->
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="../css/compte.css" rel="stylesheet" type="text/css" />
        <link href="../css/header.css" rel="stylesheet" type="text/css" />

</head>


<nav class="formulaire row-md" >
    <form method="post" >

        <div class="form_group">
            <label for="titre" class="mt-3 w-2 ">Prénom *</label>
            <input  class="form-control mt-2" type="text" name="prenom">
        </div>
        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Nom *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>

        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Téléphone *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>

        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">E-mail *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>

        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Confirmation de l'e-mail *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>
        
        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Mot de passe *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>

        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Confirmation du mot de passe *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>

        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Date de naissance *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>
        <a  class=" btn btn-dark  mt-5 btn-hover"  type="submit">ENREGISTRER</a>
        
        <p> Vous avez déjà un compte ? <a href="connect.php?id=<?php //les données recupérer de la base de données ?>">Connectez-vous à la place!</a>
    </form>
</nav>



<?php
include "../views/footer.php";
?>