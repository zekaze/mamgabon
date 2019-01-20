<?php include "assets/header.php"; ?>
    <ul class="breadcrumbs">
        <li><a href="#">Parents</a></li>
        <li><a href="#">Ateliers</a></li>
    </ul>
    <div class="container">
        <h1 class="article-title">Premier atelier de l'année 2019</h1>
        
        <div class="hero-image">
            <img src="https://i.ytimg.com/vi/SpohhraxePk/maxresdefault.jpg" alt="titre de l'article">
        </div>

        <div class="publication-date">
            18 janvier 2019
        </div>

        <div class="sharethis-inline-share-buttons"></div>

        <div class="row">
            <div class="col-md-9">
                <div class="article-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consectetur pharetra erat, ac sollicitudin mauris. Quisque hendrerit nunc ut nisl molestie, quis faucibus ligula fringilla. Maecenas semper augue vel vehicula ullamcorper. Aenean fringilla faucibus elementum. Nam porta tellus in leo porttitor, vel sollicitudin nisl consequat. Nunc ac interdum quam. Phasellus ut augue sit amet justo vestibulum porttitor. Nulla at tristique lorem. Sed volutpat venenatis tellus et semper. Curabitur elit eros, convallis at eros et, feugiat pretium ligula.</p>


                    <form action="" class="formulaire-ateliers">
                        <h2>Inscriptions aux ateliers</h2>
                        <div class="form-section-1">
                            <h3 class="title">Informations parents</h3>
                            <div class="form-row">
                                <label>
                                    <input class="form-input" type="text" name="" placeholder="Nom du parent" required>
                                </label>
                            </div>
                            <div class="form-row">
                                <label>
                                    <input class="form-input" type="text" name="" placeholder="Prénom du parent" required>
                                </label>
                            </div>
                            <div class="form-row">
                                <label>
                                    <input class="form-input" type="text" name="" placeholder="Numéro de téléphone" required>
                                </label>
                            </div>
                            <div class="form-row">
                                <button type="button" id="form-section-2-trigger">Continuer</button>
                            </div>
                        </div>
                        <div class="form-section-2" id="form-section-2">
                            <h3>Nombre d'enfants</h3>
                            <div class="button-group">
                                <button type="button" value="1" class="active" id="button-1">1</button>
                                <button type="button" value="2" id="button-2">2</button>
                                <button type="button" value="3"  id="button-3">3</button>
                                <button type="button" value="4" id="button-4">4</button>
                                <button type="button" value="5" id="button-5">5</button>
                            </div>

                            <div class="details-enfants">
                                <h5>Enfant 1</h5>
                                <div class="detail-enfant detail-enfant-1" id="detail-enfant-1">
                                    <select name="age-enfant-1" class="select-input" id="age-enfant-1">
                                        <option>Age</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="7">6</option>
                                        <option value="8">7</option>
                                        <option value="9">8</option>
                                        <option value="10">9</option>
                                    </select>
                                    <select name="atelier-enfant-1" class="select-input" id="atelier-enfant-1">
                                        <option>Choix de l'atelier</option>
                                        <option value="atelier-1">Atelier 1 (couture)</option>
                                        <option value="atelier-2">Atelier 2 (cocktails)</option>
                                        <option value="atelier-1n2">Atelier 1 & 2 (couture et cocktails)</option>
                                        <option value="atelier-3">Atelier 3 (bébés)</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit">Terminer l'inscription</button>
                        </div>
                    </form>
                </div>
                <div class="article-suggestions">
                    <div class="section-title small" data-animate="fadeInUp">
                        <h3>Dans la même catégorie</h3>
                    </div>

                    <ul class="suggestion-list">
                            <li><a href="concours-photos.php" class="list-item" data-animate="fadeInUp">
                                    <div class="image-frame">
                                        <img src="https://www.childtrends.org/wp-content/uploads/2015/12/bigstock-Young-African-American-Mother-85812815.jpg" alt="titre de l'article">
                                    </div>
                                    <div class="abstract">
                                        Concours de photo janvier 2018
                                    </div>
                                </a>
                            </li>

                            <li><a href="concours-photos.php" class="list-item" data-animate="fadeInUp">
                                    <div class="image-frame">
                                        <img src="https://www.blackradionetwork.com/images/headline/1303154662.jpg" alt="titre de l'article">
                                    </div>
                                    <div class="abstract">
                                        Concours de photo févier 2018
                                    </div>
                                </a>
                            </li>

                            <li><a href="concours-photos.php" class="list-item" data-animate="fadeInUp">
                                    <div class="image-frame">
                                        <img src="https://cbssacramento.files.wordpress.com/2012/03/sacramento-theatre-kids-camp.jpg" alt="titre de l'article">
                                    </div>
                                    <div class="abstract">
                                        Concours de photo mars 2018
                                    </div>
                                </a>
                            </li>
                    </ul>
                </div>
                <div class="comments-section">
                    <div class="header">
                        <h3 class="title">Laissez un commentaire</h3>

                        <div class="inscription">
                            Veuillez vous inscrire  pour pouvoir laisser un commentaire. Cliquez<button id="regFormButton">ici pour vous inscrire.</button>
                            <br>
                            Déjà inscrit? Cliquez<button id="loginFormButton">ici pour vous identifier.</button>

                            <div id="slick-forms">
                                <div class="slide">
                                    <form method="get" action="" id="registration-form">
                                        <h3>S'inscrire</h3>
                                        <div class="form-row">
                                            <label>
                                                <input class="form-input" type="text" name="" placeholder="Nom" required>
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <label>
                                                <input class="form-input" type="email" name="" placeholder="Adresse mail" required>
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <label>
                                                <input class="form-input" type="password" name="" placeholder="Mot de passe" required>
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <label>
                                                <input type="checkbox" name="">
                                                Cochez sur cette case si vous souhaitez recevoir notre newsletter à cette adresse
                                            </label>

                                        </div>
                                        <button type="submit">S'inscrire</button>
                                    </form>
                                </div>
                                <div class="slide img" style="background-image: url('https://image.shutterstock.com/z/stock-photo-close-up-portrait-of-surprised-african-kid-with-hand-on-face-little-girl-with-open-mouth-isolated-415812820.jpg')">
                                    <div class="img">
                                    </div>
                                </div>
                                <div class="slide">
                                    <form method="get" action="" id="login-form">
                                        <h3>S'identifier</h3>
                                        <div class="form-row">
                                            <label>
                                                <input class="form-input" type="email" placeholder="Adresse mail" required>
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <label>
                                                <input class="form-input" type="password" placeholder="Mot de passe" required>
                                            </label>
                                        </div>
                                        <button type="submit">S'identifier</button>

                                        <div style="padding: 15px 0">Mot de passe oublié? <a href="forgotten-password.php">Cliquez ici</a></div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="comment-form">
                            <form action="" method="">
                                <label for="comment-field" class="hidden">Saisissez votre commentaire</label>
                                <input type="text" name="commentaire" class="form-input" id="comment-field" required placeholder="Saisissez votre commentaire...">
                            </form>
                        </div>
                    </div>


                    <div class="comment-list">
                        <?php for($k = 0; $k < 4; $k++):;?>
                            <div class="comment-container">
                                <div class="author-name">Simone</div>
                                <div class="comment">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequuntur dolore illo inventore magni minima necessitatibus odit quibusdam rem temporibus! Exercitationem molestias praesentium reiciendis repudiandae velit. Doloribus eum omnis vero!
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cumque ducimus obcaecati qui? Accusamus asperiores cumque distinctio exercitationem, facere fugit mollitia necessitatibus, nihil placeat quae quod repellendus reprehenderit totam, voluptatibus.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eligendi minima natus non officiis placeat praesentium quaerat reiciendis vitae. Cupiditate natus nihil perspiciatis qui quidem sed veniam veritatis voluptas, voluptatibus.

                                    <div class="likes-count">
                                        <form action="">
                                            <label class="like-button liked">150
                                                <input type="checkbox" name="comment-<?php echo $k;?>" value="like">
                                            </label>
                                        </form>
                                    </div>
                                    <div class="publication-date">
                                        10h43
                                    </div>
                                </div>
                                <div class="reply-form">
                                    <button data-toggle="collapse" class="reply-button" data-target="#reply_form-<?php echo $k;?>">Répondre</button>

                                    <form action="" id="reply_form-<?php echo $k;?>" class="collapse">
                                        <label for="comment-field-<?php echo $k;?>" class="hidden">Saisissez votre commentaire</label>
                                        <input type="text" name="commentaire" class="form-input" id="comment-field-<?php echo $k;?>" required placeholder="Saisissez votre commentaire...">
                                    </form>
                                </div>

                                <div class="replies-list">
                                    <div class="comment-container">
                                        <div class="author-name">Angèle</div>
                                        <div class="comment">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequuntur dolore illo inventore magni minima necessitatibus odit quibusdam rem temporibus! Exercitationem molestias praesentium reiciendis repudiandae velit. Doloribus eum omnis vero!

                                            <div class="likes-count">
                                                <form action="">
                                                    <label class="like-button">29
                                                        <input type="checkbox" name="comment-<?php echo $k;?>a" value="like">
                                                    </label>
                                                </form>
                                            </div>
                                            <div class="publication-date">
                                                10h43
                                            </div>
                                        </div>

                                        <div class="reply-form">
                                            <button data-toggle="collapse" class="reply-button" data-target="#reply_form-<?php echo $k;?>a">Répondre</button>

                                            <form action="" id="reply_form-<?php echo $k;?>a" class="collapse">
                                                <label for="comment-field-<?php echo $k;?>a" class="hidden">Saisissez votre commentaire</label>
                                                <input type="text" name="commentaire" class="form-input" id="comment-field-<?php echo $k;?>a" required placeholder="Saisissez votre commentaire...">
                                            </form>
                                        </div>
                                    </div>

                                    <div class="comment-container">
                                        <div class="author-name">Simone</div>
                                        <div class="comment">
                                            Doloribus eligendi minima natus non officiis placeat praesentium quaerat reiciendis vitae. Cupiditate natus nihil perspiciatis

                                            <div class="likes-count">
                                                <form action="">
                                                    <label class="like-button">12
                                                        <input type="checkbox" name="comment-<?php echo $k;?>b" value="like">
                                                    </label>
                                                </form>
                                            </div>
                                            <div class="publication-date">
                                                10h43
                                            </div>
                                        </div>

                                        <div class="reply-form">
                                            <button data-toggle="collapse" class="reply-button" data-target="#reply_form-<?php echo $k;?>b">Répondre</button>

                                            <form action="" id="reply_form-<?php echo $k;?>b" class="collapse">
                                                <label for="comment-field-<?php echo $k;?>b" class="hidden">Saisissez votre commentaire</label>
                                                <input type="text" name="commentaire" class="form-input" id="comment-field-<?php echo $k;?>b" required placeholder="Saisissez votre commentaire...">
                                            </form>
                                        </div>
                                    </div>

                                    <div class="comment-container">
                                        <div class="author-name">Mathilde</div>
                                        <div class="comment">
                                            Accusamus asperiores cumque distinctio exercitationem, facere fugit mollitia necessitatibus

                                            <div class="likes-count">
                                                <form action="">
                                                    <label class="like-button">9
                                                        <input type="checkbox" name="comment-<?php echo $k;?>c" value="like">
                                                    </label>
                                                </form>
                                            </div>
                                            <div class="publication-date">
                                                10h43
                                            </div>
                                        </div>

                                        <div class="reply-form">
                                            <button data-toggle="collapse" class="reply-button" data-target="#reply_form-<?php echo $k;?>c">Répondre</button>

                                            <form action="" id="reply_form-<?php echo $k;?>c" class="collapse">
                                                <label for="comment-field-<?php echo $k;?>c" class="hidden">Saisissez votre commentaire</label>
                                                <input type="text" name="commentaire" class="form-input" id="comment-field-<?php echo $k;?>c" required placeholder="Saisissez votre commentaire...">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor;?>
                    </div>
                </div>

            </div>


            <?php include "assets/aside.php"; ?>
        </div>
    </div>
<?php include "assets/footer.php"; ?>
