<?php include "assets/header.php";?>
    <div class="carousel">
        <div class="slick">
                <a href="concours-photos-inscriptions.php" class="slide">
                    <div class="slide-description">
                        <p><span class="article-category">concours de photos</span> Concours de photos juin 2018</p>
                    </div>
                    <img src="https://pictures.digitalrev.com/image/upload/w_1400,c_fill,q_60/v1462266655/en5xxtno1tyautirprzk.jpg" alt="img">
                </a>
                <a href="concours-photos.php" class="slide">
                    <div class="slide-description">
                        <p><span class="article-category">concours de photos</span> Nathan, grand vainqueur du consours de photos Mai 2018</p>
                    </div>
                    <img src="https://i.pinimg.com/originals/20/c1/8c/20c18caa57e9077e4559ab35a93029e0.jpg" alt="img">
                </a>
                <a href="article.php" class="slide">
                    <div class="slide-description">
                        <p><span class="article-category">For mommy</span> Nonummy nibh euismod tincidunt ut
                            laoreet dolore magna aliquam</p>
                    </div>
                    <img src="http://worcuga.com/wp-content/uploads/2015/03/single-mom11.jpg" alt="img">
                </a>
                <a href="#" class="slide modal-trigger" data-toggle="modal" data-target="#slide-modal-1">
                    <div class="slide-description">
                        <p><span class="article-category">Soutien scolaire</span> Modale Pop-Up</p>
                    </div>
                    <img src="https://cbssacramento.files.wordpress.com/2012/03/sacramento-theatre-kids-camp.jpg" alt="img">
                </a>
        </div>
        <div class="controls">
            <span class="prev"><i class="fa fa-angle-left"></i></span>
            <span class="next"><i class="fa fa-angle-right"></i></span>
        </div>
        <div id="slide-modal-1" class="modal slide-modal fade" role="dialog">
            <div class="modal-dialog modal-xl">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="flex-row">
                    <div class="flex-col content">
                            <h2>Lorem ipsum dolor sit amet, consectetur</h2>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem fugit harum laborum sequi tenetur. Et modi veniam voluptas? Dolorum earum nobis voluptates. Consectetur dolorem dolorum eius minima mollitia suscipit unde!
                            </div>
                        <div class="footer">
                            <a href="#" type="button" class="modal-button">En savoir plus</a>
                            <button type="button" class="modal-button" data-dismiss="modal">Fermer</button>
                        </div>

                    </div>
                    <div class="flex-col background-cover" style="background-image: url('src/img/mother.jpg')">
                    </div>
                </div>
            </div>
        </div>
</div>
<?php include "assets/modal-welcome.php";?>
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
                                <a href="concours-photos.php" class="article" data-animate="fadeInUp" title="">
                                    <div class="img-frame">
                                        <img src="https://i.pinimg.com/originals/20/c1/8c/20c18caa57e9077e4559ab35a93029e0.jpg"
                                             alt="image">
                                    </div>
                                    <h4 class="title" title="Nathan, grand vainqueur du consours de photos Mais 2018"><span class="article-category">Concours de photos</span> Nathan, grand vainqueur du consours de photos Mais 2018</h4>

                                    <div class="abstract">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliq 250 etur adipisicing elit. Ab, amet asperiores fugit illo iure labore, laborum molestiae natus nemo neque odit omnis perferendis quae, qui quidem reprehenderit soluta sunt voluptatum!
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
                <div class="widget calendar">
                    <div id="calendar"></div>
                    <a href="calendrier.php" class="link center">Voir tous les événements</a>
                </div>
                <div class="widget sondage">
                    <h3 class="widget-title">Sondage</h3>
                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto ?</div>

                    <form action="">
                        <ul>
                            <li><label class="radio-option"><input type="radio" value="1" required name="sondage-001"> Lorem ipsum dolor sit amet</label></li>
                            <li><label class="radio-option"><input type="radio" value="2" required name="sondage-001"> Architecto, culpa debitis</label></li>
                            <li><label class="radio-option"><input type="radio" value="3" required name="sondage-001"> Obcaecati officiis pariatur</label></li>
                        </ul>
                        <button type="submit">Soumettre</button>
                    </form>
                </div>
                <a href="#" class="advert"><img src="https://pbs.twimg.com/media/DaAxHV7W0AAlmVW.jpg" alt="publicité"></a>
                <a href="#" class="advert"><img src="https://static.wixstatic.com/media/b3741a_915c690a41144e1bb5e3a7ec45f5bebf~mv2.png/v1/fill/w_630,h_630,al_c,usm_0.66_1.00_0.01/b3741a_915c690a41144e1bb5e3a7ec45f5bebf~mv2.png" alt="publicité"></a>
            </div>
        </div>
    </div>
</div>
<?php include "assets/footer.php";?>

<script>
    function showWelcomeModal() {
        $("#myModal").modal();
    }
    setTimeout(showWelcomeModal, 2000);
</script>