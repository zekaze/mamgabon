<?php include "assets/header.php"; ?>
<?php
$search_question = isset($_GET["q"]) ? $_GET["q"] : null;

?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="section-title left" data-animate="fadeInUp">
                    <h2>Recherche</h2>
                    <small>6 résultats trouvés pour : <i style="text-transform: none; color: #aaa"><?php echo $search_question;?></i></small>
                </div>
                <div id="search-results">
                    <div class="search_result_category">
                        <button data-toggle="collapse" class="search_result_category_header" data-target="#search_result_articles">Articles trouvés <span class="badge">2</span></button>
                        <div id="search_result_articles" class="collapse">
                            <ul class="liste-articles">
                                <li><a href="article.php">Consectetuer adipiscing <?php echo $search_question;?>?</a></li>
                                <li><a href="article.php">Lorem ipsum dolor sit amet, <?php echo $search_question;?> consectetuer adipiscing elit, sed</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="search_result_category">
                        <button data-toggle="collapse" class="search_result_category_header" data-target="#search_result_evenements">Événements trouvés <span class="badge">2</span></button>
                        <div id="search_result_evenements" class="collapse">
                            <div class="liste-evenements">
                                <div class="list-item">
                                    <div class="row">
                                        <a href="https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/31277589_1651529734954992_6658242169030714875_n.jpg?_nc_cat=0&oh=19dc7941e95d351f99d9c81380fe82aa&oe=5B95021D" class="popup-link">
                                            <div class="col-xs-5">

                                                <img src="https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/31277589_1651529734954992_6658242169030714875_n.jpg?_nc_cat=0&oh=19dc7941e95d351f99d9c81380fe82aa&oe=5B95021D" class="img-responsive" alt="Photo evenement">


                                            </div>
                                            <div class="col-xs-7">
                                                <div class="event_title"><div class="article-category">Concert</div>Adango en café concert</div>
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
                                                <div class="event_title"><div class="article-category">Cinéma</div>Matris</div>
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
                                                <div class="event_title"><div class="article-category">Exposition</div> Expositios  photos : Passionnés / Passionnelles de Emmanuelle Laté</div>
                                                <div class="event_location">L'Institut français du Gabon</div>
                                                <div class="event_date">9 Juin 2018 à 19h30</div>
                                                <div class="annonceur">Par l'Institut français du Gabon</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search_result_category">
                        <button data-toggle="collapse" class="search_result_category_header" data-target="#search_result_etablissements">Établissements trouvés <span class="badge">2</span></button>
                        <div id="search_result_etablissements" class="collapse in">
                            <div class="liste-etablissements">
                                <?php for($i = 0; $i < 2; $i++):?>
                                    <div class="etablissement">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="img-frame">
                                                    <img src="http://logofaves.com/wp-content/uploads/2012/02/oak_m.jpg?9cf02b" class="img-responsive" alt="logo">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <h4>Académie de Danse Classique de Libreville</h4>
                                                <div class="adresse">Immaculée Conception près Géant CKdo, Bd Bessieux</div>
                                                <div class="row details">
                                                    <div class="col-sm-6">
                                                        <div class="telephone">
                                                            +241 06 03 03 40 <br>
                                                            +241 05 34 99 73
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="email">
                                                            info@emailadress.com
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="site-web"><a href="http://www.monsiteweb.com" target="_blank">www.monsiteweb.com</a></div>

                                            </div>
                                        </div>
                                        <div class="prestations">
                                            <h5>Prestations</h5>
                                            <ul>
                                                <?php for($j = 1; $j < 9; $j++):;?>
                                                    <li>Prestation <?php echo $j;?></li>
                                                <?php endfor;?>
                                            </ul>
                                        </div>
                                        <div class="photos" data-animate="fadeInUp">
                                            <div class="row popup-gallery">
                                                <div class="col-xs-6">
                                                    <a href="http://thesevenlakesinsider.com/wp-content/uploads/11999032_675300185938715_7798995693630496085_n-777x437.jpg" class="popup-link">
                                                        <img src="http://thesevenlakesinsider.com/wp-content/uploads/11999032_675300185938715_7798995693630496085_n-777x437.jpg" class="img-responsive" alt="image">
                                                    </a>
                                                </div>
                                                <div class="col-xs-6">
                                                    <a href="https://study.com/cimages/hub/How%20to%20Set%20Up%20Your%20Kindergarten%20Classroom%20Quickly.jpg" class="popup-link">
                                                        <img src="https://study.com/cimages/hub/How%20to%20Set%20Up%20Your%20Kindergarten%20Classroom%20Quickly.jpg" class="img-responsive"  alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "assets/aside.php"; ?>
        </div>
    </div>
<?php include "assets/footer.php"; ?>