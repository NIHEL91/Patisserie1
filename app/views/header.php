
<header>
<nav class="navbar navbar-expand-lg  ">
        <div class="container-fluid">
            <img src="../public/img/logo.png" class="logo"/>

            <a class="navbar-brand  px-3" href="index.php"><h5>Accueil</h5></a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active   px-3" aria-current="page" href="#"><h5>Anniversaires</h5></a>
                </li>
                <li class="nav-item">
                <a class="nav-link   px-3" href="#">Mariage</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle   px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Gateaux aux thémes
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Princesses><img src="../img/cake_logo.jpeg"></a></li>
                            <li><a class="dropdown-item" href="#">Football</a></li>
                            <li><a class="dropdown-item" href="#">Coeur</a></li>
                            <li><a class="dropdown-item" href="#">Fleurs</a></li>
                            <li><a class="dropdown-item" href="#">Amours</a></li>
                        </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link   px-3" href="#" >Contacter</a>
                </li>
            </ul>
            <form class="d-flex">
            <?php
                if (isset($_SESSION['nom'])) {
                    // connecté
                    echo '<span>Bienvenue : '.$_SESSION['nom'].'</span><br>';
                    echo '<span>Déconnexion : <a href="controllers/deConnect.php" class="btn btn-outline-warning">Déconnexion</a></span><br>';
                } else {                

                    // non connecté
                    echo'<span> <a href="controllers/compte.php"  class="btn  btn-sm me-2 "><img src="../public/img/carré-jaune.png" class="compte"/></a></span>';
                //echo '<span><a href="controllers/connect.php" class="btn btn-outline-warning ">Créer un compte</a>';
                } ?>
                <a href="#"  class="btn  btn-sm me-2 "><img src="../public/img/panier.png" class="panier"/></a>
                
                <span class="badge badge-secondary text-warning"> <?php echo date('l d.m.Y'); ?></span>
                <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>-->
            </form>
            </div>
        </div>
    </nav>

        <div class="row">
            <div class="col-8">
            </div>
            
            <div class="col-4">
                
                <!--mettre  la date avec le php-->
            </div>
        
    <!--Menu Navbar-->
    
    
</header>
