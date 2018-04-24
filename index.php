<?php include "assets/header.php";?>
    <div class="carousel">
        <div class="slick">
            <?php for ($i = 0; $i < 6; $i++): ?>
                <a href="#" class="slide">
                    <div class="slide-description">
                        <p>Nonummy nibh euismod tincidunt ut
                            laoreet dolore magna aliquam</p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1522199755839-a2bacb67c546?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8aa38437c9b977558f5b430d68773742&auto=format&fit=crop&w=1352&q=80" alt="img">
                </a>
            <?php endfor; ?>
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
                                <a href="#" class="article" data-animate="fadeInUp">
                                    <div class="img-frame">
                                        <img src="https://images.unsplash.com/photo-1522199755839-a2bacb67c546?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8aa38437c9b977558f5b430d68773742&auto=format&fit=crop&w=1352&q=80"
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
        <div class="col-md-3">
            <div class="sidebar">
                <div class="calendar">calendar</div>
                <a href="#" class="advert"><img src="#" alt="publicité"></a>
                <a href="#" class="advert"><img src="#" alt="publicité"></a>
                <a href="#" class="advert"><img src="#" alt="publicité"></a>
            </div>
        </div>
    </div>
</div>
<?php include "assets/footer.php";?>