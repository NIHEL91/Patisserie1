
<header>
        <div class="row p-4  ">
            <div class="col-6">
                <h2 >Patisserie Des francs</h2>
            </div>
            
            <div class="col-6">
                <?php
                if (isset($_SESSION['nom'])) {
                    // connecté
                    echo '<span>Bienvenue : '.$_SESSION['nom'].'</span><br>';
                    echo '<span>Déconnexion : <a href="controllers/deConnect.php" class="btn btn-primary btn-sm">Déconnexion</a></span><br>';
                } else {
                    // non connecté
                    echo'<span>Déjà client : <a href="controllers/connect.php" class="btn btn-dark btn-sm m-3">Identifiez-vous</a></span>';
                    
                    echo '<span><a href="controllers/compte.php" class="btn btn-dark btn-sm ">Créer un compte</a></span>';
                } ?>
                <a href="#"  class="btn  btn-sm me-2 "><img src="../img/panier.png" class="panier"/></a>
                <span class="badge badge-secondary text-dark"> <?php echo date('l d.m.Y'); ?></span>
                <!--mettre  la date avec le php-->
            </div>
        
    <!--Menu Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white px-5" href="#">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active text-white  px-5" aria-current="page" href="#">Anniversaires</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white  px-5" href="#">Mariage</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white  px-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Gateaux aux thémes
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Princesses><img src="../img/cake_logo.jpeg"></a></li>
                            <li><a class="dropdown-item" href="#">Football</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Coeur</a></li>
                            <li><a class="dropdown-item" href="#">Fleurs</a></li>
                            <li><a class="dropdown-item" href="#">Amours</a></li>
                        </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white  px-5" href="#" >Contacter</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    
</header>
