<?php
include "../app/views/header.php";

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
    <div class=" text-center mt-3">
        <h2>Vous avez une question ?</h2>
    </div>
    <div class="att text-center mt-3 text-danger">
        <p>
            Attention !
            <td>
                Les commandes doivent être passées sur notre boutique en ligne ou en magasin.
                Aucune commande ne sera prise en compte via ce formulaire.
        </p>
    </div>
    <form class="question" method="post">

        <div class="form_group">
            <label for="Select" class="form-label">Objet de la demande </label>
            <select id="Select" class="form-select">
                <option value="0">Choisir</option>
                <option>Demandes de devis</option>
                <option>Réclamation</option>
                <option>Autres demandes</option>
            </select>
        </div>
        <div class="row">

            <div class="form-check col-6 ">
                <input class="form-check-input mt-3 " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label mt-3 " for="flexRadioDefault1">M</label>
            </div>

            <div class="form-check col-6">
                <input class="form-check-input mt-3 " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label mt-3 " for="flexRadioDefault1">Mme</label>
            </div>
        </div>
        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Nom *</label>
            <input class="form-control mt-2" type="text" name="nom">
        </div>

        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Prenom *</label>
            <input class="form-control mt-2" type="text" name="nom">
        </div>

        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">E-mail *</label>
            <input class="form-control mt-2" type="text" name="nom">
        </div>

        <div class="form-group">
            <label for="contenu" class="mt-3 mb-3">Message</label>
            <textarea class="form-control  mt-2" placeholder="Ecrire un message...."></textarea>
        </div>
        <div class="form-group">
            <label for="fichier" class="mt-3 mb-3">Fichier</label>
            <input type="file" class="form-control-file" id="fichier">
        </div>
        <a class=" btn btn-dark  mt-5 btn-hover" type="submit">Envoyer</a>


    </form>
</nav>



<?php
include "../app/views/footer.php";
?>