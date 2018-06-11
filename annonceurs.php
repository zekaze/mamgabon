<?php include "assets/header.php"; ?>
    <div class="container">
        <ul class="breadcrumbs left">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Espace annonceurs</a></li>
        </ul>
        <div class="section-title left" data-animate="fadeInUp">
            <h1>Espace annonceurs</h1>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2 class="title-font">La publicité avec Mommy & Me Gabon</h2>
                <div class="article-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis consectetur dolorum
                        enim ipsum iusto laborum minima molestias, necessitatibus non officiis perferendis porro quam
                        quis recusandae reiciendis sint tempore voluptatem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at cum distinctio dolorem doloribus ea eum expedita, ipsa magni obcaecati officia omnis provident quidem sed sunt tenetur, vero voluptatem voluptatum!</p>
                </div>
                <form method="" id="contact-form">
                    <div class="section-title small" data-animate="fadeInUp">
                        <h3>Demander un devis</h3>
                    </div>

                    <p>Tous les champs marqués d'un (*) sont obligatoires</p>

                        <label class="form-row">
                            <span class="label">Nom *</span>
                            <input type="text" class="form-input" name="nom" required placeholder="Votre nom...">
                        </label>

                    <div class="row">
                        <div class="col-sm-6">
                            <label class="form-row">
                                <span class="label">Adresse mail *</span>
                                <input type="email" class="form-input" name="email" required placeholder="Votre adresse mail...">
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-row">
                                <span class="label">Numéro de téléphone *</span>
                                <input type="text" class="form-input" name="telephone" required placeholder="Votre numéro de téléphone...">
                            </label>
                        </div>
                    </div>

                        <label class="form-row">
                            <span class="label">Message *</span>
                            <textarea name="message" class="form-input" placeholder="Votre message..."></textarea>
                        </label>

                    <div class="form-row">
                        <button type="submit">Envoyer le message</button>
                    </div>
                </form>

            </div>
            <div class="col-md-4">
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
    <div class="newsletter-bar" data-animate="fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Inscrivez-vous à notre newsletter</h3>
                    <p>Inscrivez-vous à notre newsletter pour rester au courant de toutes nos nouveaux articles, conseils et événements</p>
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="form-row">
                                    <input type="text" class="form-input" name="nom" placeholder="Votre nom" required>
                                </label>
                            </div>
                            <div class="col-sm-5">
                                <label class="form-row">
                                    <input type="email" class="form-input" name="email" placeholder="Votre adresse mail" required>
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-row">
                                    <button type="submit"><span>S'enregistrer</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include "assets/footer.php"; ?>