<!--top nav-->
<div id="top_header">
    <div class="top_search_bar">
        <div class="container">
            <form method="get" action="search.php">
                <input type="text" class="search-input" placeholder="Que recherchez-vous sur MamGabon?" name="q" autocomplete="off" required>
                <button type="button" class="search-toggle"><i class="fa fa-close"></i></button>
            </form>
        </div>
    </div>
    <div class="container">
        <ul class="top_nav_bar">
            <li><ul id="lang_menu">
                    <li><a href="#">EN</a></li>
                    <li><span class="slash">/</span></li>
                    <li><a href="#">FR</a></li>
                </ul>
            </li>
            <li class="link_space"></li>
            <li><a href="#" class="search-toggle">Rechercher &nbsp; <i class="fa fa-search"></i></a></li>
            <li class="link_space"></li>
            <li><a href="#">Espace annonceurs</a></li>
            <li><a href="about.php">Contact</a></li>
            <li class="link_space"></li>
            <li>
                <ul class="social_menu">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>


<header id="main-header">
    <div id="logo_bar">
        <div class="container">
            <a href="index.php">
                <img src="src/img/logo.png" alt="Logo Mommy and Me Gabon">
                <div class="slogan">Lorem ipsum dolor sit amet, consectetuer</div>
            </a>
        </div>
    </div>

    <button id="navToggle" class="fa fa-bars fa-2x"></button>

    <nav id="main-menu" class="nav-menu">
        <div class="container-fluid">
            <ul class="main-menu">
                <li><a href="index.php"><span class="menu-item active">ACCUEIL <img src="src/img/home.png" alt="Accueil"></span></a></li>
                <li class="sub-menu"><span class="menu-item">EDUCATION <img src="src/img/education.png" alt="Education"></span>
                    <ul>
                        <li><a href="annuaire.php">Annuaire des établissements</a></li>
                        <li><a href="#">Calendrier scolaire</a></li>
                        <li><a href="#">Soutien scolaire</a></li>
                        <li><a href="#">Articles</a></li>
                    </ul>
                </li>
                <li class="sub-menu"><span class="menu-item">SANTE <img src="src/img/sante.png" alt="Santé"></span>
                    <ul>
                        <li><a href="#">Annuaire pédiatres</a></li>
                        <li><a href="#">Annuaire paramedical</a></li>
                        <li><a href="#">Common childhood illnesses</a></li>
                        <li><a href="#">Common childhood conditions</a></li>
                        <li><a href="#">Calendrier des vaccins (par pays)</a></li>
                        <li><a href="#">Articles</a></li>
                    </ul>
                </li>
                <li class="sub-menu"><span class="menu-item">ALIMENTATION <img src="src/img/cuisine.png" alt="Alimentation"></span>
                    <ul>
                        <li><a href="#">Nos petites recettes</a></li>
                        <li><a href="#">Articles</a></li>
                    </ul>
                </li>
                <li class="sub-menu"><span class="menu-item">LOISIRS <img src="src/img/loisirs.png" alt="Loisirs"></span>
                    <ul>
                        <li><a href="#">Calendrier des activites mensuel</a></li>
                        <li><a href="#">Annuaire Activités</a></li>
                        <li><a href="#">Anniversaires</a></li>
                        <li><a href="#">Articles</a></li>
                    </ul>
                </li>
                <li class="sub-menu"><span class="menu-item">PARENTS <img src="src/img/parents.png" alt="Parents"></span>
                    <ul>
                        <li><a href="#">For mommy</a></li>
                        <li><a href="#">Daddy & Me</a></li>
                        <li><a href="#">Ressources pour parents</a></li>
                        <li><a href="#">Articles</a></li>
                    </ul>
                </li>
                <li class="sub-menu"><span class="menu-item">CARITATIVES <img src="src/img/caritatives.png" alt="Oeuvres caritatives"></span>
                    <ul>
                        <li><a href="#">Places to donate</a></li>
                        <li><a href="#">Calendrier des évènements</a></li>
                        <li><a href="#">Inscrivez vous</a></li>
                        <li><a href="#">Déposez votre don</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="top_nav_bar mobile-only">
                <li><ul id="lang_menu">
                        <li><a href="#">EN</a></li>
                        <li><a href="#">FR</a></li>
                    </ul>
                </li>
                <li class="link_space"></li>
                <li><a href="#" class="search-toggle">Rechercher</a></li>
                <li class="link_space"></li>
                <li><a href="#">Espace annonceurs</a></li>
                <li><a href="about.php">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>