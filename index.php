<?php include "assets/header.php";?>
    <div class="carousel">
        <div class="slick">
                <a href="article.php" class="slide">
                    <div class="slide-description">
                        <p>Nonummy nibh euismod tincidunt ut
                            laoreet dolore magna aliquam</p>
                    </div>
                    <img src="https://cdn-images-1.medium.com/max/2000/1*K90Ud3lDPs-NSwFWqmDDrg.jpeg" alt="img">
                </a>
                <a href="article.php" class="slide">
                    <div class="slide-description">
                        <p>Nonummy nibh euismod tincidunt ut
                            laoreet dolore magna aliquam</p>
                    </div>
                    <img src="http://www.livescience.com/images/i/000/073/436/original/kids-pizza-150119.jpg" alt="img">
                </a>
                <a href="article.php" class="slide">
                    <div class="slide-description">
                        <p>Nonummy nibh euismod tincidunt ut
                            laoreet dolore magna aliquam</p>
                    </div>
                    <img src="http://www.impactlab.net/wp-content/uploads/2016/11/kids.jpg" alt="img">
                </a>
                <a href="article.php" class="slide">
                    <div class="slide-description">
                        <p>Nonummy nibh euismod tincidunt ut
                            laoreet dolore magna aliquam</p>
                    </div>
                    <img src="https://cbssacramento.files.wordpress.com/2012/03/sacramento-theatre-kids-camp.jpg" alt="img">
                </a>
        </div>
</div>
<div class="section-title" data-animate="fadeInUp">
    <h2>focus</h2>
    <small>la sélection de mam gabon</small>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="articles">
                <?php // cette boucle duplique la rangée de deux colonne;?>
                <?php for ($i = 0; $i < 2; $i++): ?>
                    <div class="row">
                        <?php //cette boucle duplique la colonne "article";?>
                        <?php for ($j = 0; $j < 2; $j++): ?>
                            <div class="col-sm-6">
                                <a href="article.php" class="article" data-animate="fadeInUp">
                                    <div class="img-frame">
                                        <img src="http://www.livescience.com/images/i/000/073/436/original/kids-pizza-150119.jpg"
                                             alt="image">
                                    </div>
                                    <h4 class="title">Lorem ipsum dolor sit amet,
                                        consectetuer adipiscing elit, sed</h4>

                                    <div class="abstract">Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna
                                        aliquam erat volutpat.
                                    </div>
                                </a>
                            </div>
                        <?php endfor; ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <?php include "assets/aside.php";?>
    </div>
</div>
<?php include "assets/footer.php";?>