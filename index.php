<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/header.css" rel="stylesheet" type="text/css" />
    <link href="../css/compte.css" rel="stylesheet" type="text/css" />
    <link href="../css/index.css" rel="stylesheet" type="text/css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https : //fonts.googleapis.com/css2?family=Danse+Script & display = swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Pattiserie Des Francs</title>
</head>
<!--Header-->
<?php
include 'views/header.php';
?>


<body>
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
               
                <a class="carousel-item active" href="../views/catalogues.html">
                    <img src="../public/img/deguste.jpg" alt="" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                    <div class="container">
                            <div class="carousel-caption text-end text-warning">
                                <h1>Chez nous</h1>
                                <p><h1>Encore plus de desserts</h1></p>
                            </div>
                    </div>
                </a>

                <div class="carousel-item">
                    <a class="lien " href="../views/catalogues.html">
                        <img src="../public/img/amourmariage.jpg" alt="" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                        <div class="container">
                            <div class="carousel-caption  text-dark">
                                <h1>Offrez une déclaration gourmante à vos amours ! </h1>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="carousel-item">
                    <a class="lien" href="../views/catalogues.html">
                        <img src="../public/img/delicieux.jpg" alt="" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                        <div class="container">
                            <div class="new ">
                            <img src="../public/img/new.png" width="200px" height="200px"/>
                            </div>
                            <div class="carousel-caption  text-white text-start">
                                <h1>Extra Délicieux ! </h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>

    
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="../public/img/livraison.jpg" class="bd-placeholder-img rounded-circle" alt="" width="180" height="180" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" />

                <h2 class="fw-normal">COMMANDER EN</h2>
                <p>
                    MAGASIN
                </p>
                <p>
                    <a class="btn btn-warning" href="#">Commander &raquo;</a>
                </p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="../public/img/disponibility.jpg" class="bd-placeholder-img rounded-circle" alt="" width="180" height="180" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" />


                <h2 class="fw-normal">PRODUITS DISPONIBLES</h2>
                <p>
                    EN MAGASIN
                </p>
                <p>
                    <a class="btn btn-warning" href="#">Visiter &raquo;</a>
                </p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="../public/img/saison.jpg" class="bd-placeholder-img rounded-circle" alt="" width="180" height="180" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" />


                <h2 class="fw-normal">GATEAUX</h2>
                <p>
                    DE SAISON
                </p>
                <p>
                    <a class="btn btn-warning" href="#">Découvrir &raquo;</a>
                </p>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>


        <div class="row">
           <div class="col-lg-6 ">
                <img src="../public/img/mariage1.webp" class="pub1"/>  
            </div>
            <div class="col-lg-6 ">
                <div class="cake-title">
                    <h2>Pour tous vos Evenements</h2>
                    <p>Collection de Mariage</p>
                </div>
            </div>
        </div>
        
        <div class="row">
           <div class="col-lg-6  ml-md-2">
                    <div class="cake-title ">
                        <h2>Collection Anniversaire Enfant</h2>
                    </div> 
            </div>
            <div class="col-lg-6 ">
                <img src="../public/img/anniversaire.jpg" class="pub2"/> 
            </div>
        </div>
    
        <!-----------------footer----------------->
        <?php
        include 'views/footer.php';
        ?>
   
</body>

</html>