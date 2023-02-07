<?php

require "header.php";


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

<nav>
<form method="post" class="form container-fluid w-50  border border-3 border-dark  rounded-3 ">

    <div class="form_group">
        <label for="titre" class="form-label mt-3 mb-3 ">Objet de la demande*</label>
            <div class="mb-3">
                <select id="Select" class="form-select">
                    <option value="0">Choisir</option>
                    <option>Demandes de devis</option>
                    <option>Réclamation</option>
                    <option>Autres demandes</option>
                </select>
            </div>
    </div>
    <div class="form_group">
        <label for="contenu" class="mt-3 mb-3">Civilité *</label>
        <input  class="form-control mt-2" type="text" name="nom">
    </div>

    <div class="form_group">
        <label for="contenu" class="mt-3 mb-3 "> Nom* </label>
        <input  class="form-control mt-2" type="text" name="nom">
    </div>

    <div class="form_group">
        <label for="contenu" class="mt-3 mb-3"> Prénom* </label>
        <input  class="form-control mt-2" type="text" name="nom">
    </div>

    <div class="form_group">
        <label for="contenu" class="mt-3 mb-3">E-mail* </label>
        <input  class="form-control mt-2" type="text" name="nom">
    </div>
    
    <div class="form_group">
        <label for="texterea" class="mt-3 mb-3">Message </label>
        <textarea  class="form-control mt-2" type="text" name="nom" ></textarea>
    </div>

    <div class="form-group">
        <label for="fichier" class="mt-3 mb-3">Fichier</label>
        <input type="file" class="form-control-file" id="fichier">
   </div>    
   <button  class=" mt-3 mb-3 btn btn-dark " type="submit">envoyer</button>
</form>
</nav>


<?php
include "footer.php";
?>