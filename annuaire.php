<?php include "assets/header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <ul class="breadcrumbs left">
                    <li><a href="#">éducation</a></li>
                    <li><a href="#">ANNUAIRE DES ÉTABLISSEMENTS</a></li>
                </ul>

                <div class="section-title left" data-animate="fadeInUp">
                    <h2>établissements</h2>
                    <small>158 résultats trouvés</small>
                </div>

                <form action="#" id="filtre-localite" method="get">
                    <label for="localite">Localité :</label>
                    <select name="localite" id="localite" class="filtre">
                        <option>Selectionnez une localité</option>
                        <option value="libreville">Libreville</option>
                        <option value="libreville">Port-Gentil</option>
                    </select>
                </form>

                <div class="liste-etablissements">
                    <?php for($i = 0; $i < 10; $i++):?>
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
                <div class="pagination">
                    <ul>
                        <li><a href="#" class="first"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><span  class="dots">...</span></li>
                        <li><a href="#">10</a></li>
                        <li><a href="#">11</a></li>
                        <li><a href="#">12</a></li>
                        <li><a href="#" class="last"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <?php include "assets/aside.php"; ?>
        </div>
    </div>
<?php include "assets/footer.php"; ?>