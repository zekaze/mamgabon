<?php include "assets/header.php"; ?>
    <div class="container">
        <ul class="breadcrumbs left">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="section-title left" data-animate="fadeInUp">
            <h1>Nous contacter</h1>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2 class="title-font">&Agrave; propos de Mommy & Me Gabon</h2>
                <div class="article-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis consectetur dolorum
                        enim ipsum iusto laborum minima molestias, necessitatibus non officiis perferendis porro quam
                        quis recusandae reiciendis sint tempore voluptatem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at cum distinctio dolorem doloribus ea eum expedita, ipsa magni obcaecati officia omnis provident quidem sed sunt tenetur, vero voluptatem voluptatum!</p>
                </div>
                <form method="" id="contact-form">
                    <div class="section-title small" data-animate="fadeInUp">
                        <h3>Laissez nous un message</h3>
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
                            <span class="label">Objet du message *</span>
                            <input type="text" class="form-input" name="objet" required placeholder="En quoi pouvons nous vous aider?...">
                        </label>

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
                    <div class="widget contact-info">
                        <h3 class="widget-title">Adresse</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda.</p>
                        <div class="adresse">BP 1234, Libreville, Gabon</div>
                        <div class="telephone">(+241) 01 22 33 44</div>
                        <div class="telephone">(+241) 06 44 55 66</div>
                        <div class="email">contact@mamgabon.com</div>
                    </div>
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