<?php include "assets/header.php"; ?>

    <div class="container">
        <ul class="breadcrumbs left">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Évènements</a></li>
        </ul>
        <div class="section-title left" data-animate="fadeInUp">
            <h1>Calendrier</h1>
        </div>
        <?php $mois_all = array(
                "janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"
        );?>
        <div class="row">
            <div class="col-md-9">
                <?php foreach ($mois_all as $mois):?>
                    <span class="month-anchor" id="mois-<?php echo $mois;?>"></span>
                <div class="evenement-mois">
                    <div class="section-title left" data-animate="fadeInUp">
                        <h3><?php echo $mois;?></h3>
                    </div>
                    <div class="liste-evenements">
                        <div class="list-item">
                            <div class="row">
                                <a href="https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/31277589_1651529734954992_6658242169030714875_n.jpg?_nc_cat=0&oh=19dc7941e95d351f99d9c81380fe82aa&oe=5B95021D" class="popup-link">
                                    <div class="col-xs-5">

                                        <img src="https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/31277589_1651529734954992_6658242169030714875_n.jpg?_nc_cat=0&oh=19dc7941e95d351f99d9c81380fe82aa&oe=5B95021D" class="img-responsive" alt="Photo evenement">
                                    </div>
                                    <div class="col-xs-7">

                                        <div class="event_title"><span class="article-category">Concert</span>Adango en café concert</div>
                                        <div class="event_location">L'Institut français du Gabon</div>
                                        <div class="event_date">9 Juin 2018 à 19h30</div>
                                        <div class="annonceur">Par L'Institut français du Gabon</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="row">
                                <a href="https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/29186965_1610944632346836_3342431140360164448_n.jpg?_nc_cat=0&oh=9f8f46a7d12bd35b9e1fc1b7c7ad10d3&oe=5B9CD38D" class="popup-link">
                                    <div class="col-xs-5">
                                        <img src="https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/29186965_1610944632346836_3342431140360164448_n.jpg?_nc_cat=0&oh=9f8f46a7d12bd35b9e1fc1b7c7ad10d3&oe=5B9CD38D" class="img-responsive" alt="Photo evenement">
                                    </div>
                                    <div class="col-xs-7">

                                        <div class="event_title"><span class="article-category">Cinéma</span>Matris</div>
                                        <div class="event_location">L'Institut français du Gabon</div>
                                        <div class="event_date">9 Juin 2018 à 19h30</div>
                                        <div class="annonceur">Par L'Institut français du Gabon</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="row">
                                <a href="https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/30656512_1640560252718607_3635224169070276705_n.jpg?_nc_cat=0&oh=77374de791fbebb84b017074c2245163&oe=5B4FB868" class="popup-link">
                                    <div class="col-xs-5">
                                        <img src="https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/30656512_1640560252718607_3635224169070276705_n.jpg?_nc_cat=0&oh=77374de791fbebb84b017074c2245163&oe=5B4FB868" class="img-responsive" alt="Photo evenement">
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="event_title"><span class="article-category">Photographie</span> Expositios  photos : Passionnés / Passionnelles de Emmanuelle Laté</div>
                                        <div class="event_location">L'Institut français du Gabon</div>
                                        <div class="event_date">9 Juin 2018 à 19h30</div>
                                        <div class="annonceur">Par l'Institut français du Gabon</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="widget menu">
                        <h3 class="widget-title">Catégories</h3>

                        <ul class="category-list hidden-xs">
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Santé</a></li>
                            <li><a href="#">Santé</a></li>
                            <li><a href="#">Musique</a></li>
                            <li><a href="#">Ouvres caritatives</a></li>
                        </ul>

                        <label for="select-category" class="hidden"></label>
                        <form action="" method="get">
                            <select id="select-category" class="category-menu visible-xs">
                                <option>Choisissez une catégorie</option>
                                <option value="education">Education</option>
                                <option value="sante">Santé</option>
                                <option value="musique">Musique</option>
                                <option value="jeux">Danse</option>
                                <option value="jeux">Ouvres caritatives</option>
                            </select>
                        </form>
                    </div>

                    <div class="widget calendar">
                        <div id="calendar"></div>
                    </div>
                    <a href="#" class="advert"><img src="https://pbs.twimg.com/media/DaAxHV7W0AAlmVW.jpg" alt="publicité"></a>
                    <a href="#" class="advert"><img src="https://static.wixstatic.com/media/b3741a_915c690a41144e1bb5e3a7ec45f5bebf~mv2.png/v1/fill/w_630,h_630,al_c,usm_0.66_1.00_0.01/b3741a_915c690a41144e1bb5e3a7ec45f5bebf~mv2.png" alt="publicité"></a>
                    <a href="#" class="advert"><img src="https://sobraga.net/wp-content/uploads/2017/01/couv-ANDZA_comp.jpg" alt="publicité"></a>
                </div>
            </div>
        </div>
        <ul id="menu-mois" class="fixed">
            <li><a class="anchor-button" id="mois-janvier-anchor" href="#">Jan</a></li>
            <li><a class="anchor-button" id="mois-fevrier-anchor" href="#mois-fevrier">Fev</a></li>
            <li><a class="anchor-button" id="mois-mars-anchor" href="#mois-mars">Mar</a></li>
            <li><a class="anchor-button" id="mois-avril-anchor" href="#mois-avril">Avr</a></li>
            <li><a class="anchor-button" id="mois-mai-anchor" href="#mois-mai">Mai</a></li>
            <li><a class="anchor-button" id="mois-juin-anchor" href="#mois-juin">Juin</a></li>
            <li><a class="anchor-button" id="mois-juillet-anchor" href="#mois-juillet">Juillet</a></li>
            <li><a class="anchor-button" id="mois-aout-anchor" href="#mois-aout">Août</a></li>
            <li><a class="anchor-button" id="mois-septembre-anchor" href="#mois-septembre">Sep</a></li>
            <li><a class="anchor-button" id="mois-octobre-anchor" href="#mois-octobre">Oct</a></li>
            <li><a class="anchor-button" id="mois-novembre-anchor" href="#mois-novembre">Nov</a></li>
            <li><a class="anchor-button" id="mois-decembre-anchor" href="#mois-decembre">Déc</a></li>
        </ul>
    </div>
<?php include "assets/footer.php"; ?>