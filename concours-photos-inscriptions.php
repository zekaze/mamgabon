<?php include "assets/header.php"; ?>
    <ul class="breadcrumbs">
        <li><a href="#">Parents</a></li>
        <li><a href="#">Concours de photos</a></li>
    </ul>
    <div class="container">
        <h1 class="article-title">Concours de photos juin 2018</h1>
        
        <div class="hero-image">
            <img src="https://pictures.digitalrev.com/image/upload/w_1400,c_fill,q_60/v1462266655/en5xxtno1tyautirprzk.jpg" alt="titre de l'article">
        </div>

        <div class="publication-date">
            15 mai 2018
        </div>

        <div class="sharethis-inline-share-buttons"></div>

        <div class="row">
            <div class="col-md-9">
                <div class="article-body">
                    <h2>A propos des concours de photos MamGabon</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam at deleniti est fugit iste
                        iure nobis officiis voluptatem. Corporis cumque dolore obcaecati soluta sunt. Cum eligendi est
                        et nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci est
                        eum facere impedit in laboriosam magni necessitatibus nisi nulla omnis perferendis quaerat
                        ratione rem repudiandae sequi totam voluptate! Accusamus?</p>


                    <h2>Les règles du concours</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    <h3>1 - Lorem ipsum dolor sit amet</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, adipisci atque corporis cum ducimus
                        eligendi esse eum facilis id modi nobis obcaecati odit qui temporibus ullam. Magni perspiciatis
                        praesentium repudiandae!</p>

                    <h3>2 - Accusantium</h3>
                    <p>consectetur adipisicing elit. Accusantium, adipisci est
                        eum facere impedit in laboriosam magni necessitatibus nisi nulla omnis perferendis quaerat
                        ratione rem repudiandae sequi totam voluptate! Accusamus?</p>

                    <h3>3 - Quaerat ratione rem.</h3>
                    <p>Corporis cumque dolore obcaecati soluta sunt. Cum eligendi est
                        et nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium</p>


                </div>
                <div class="module inscriptions">
                    <div class="header">
                        <h2 class="title text-center">Inscription</h2>
                        <div class="inscription">
                            Veuillez vous inscrire  pour pouvoir uploader votre photo. Cliquez<button id="regFormButton">ici pour vous inscrire.</button>
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
                                <div class="slide img" style="background-image: url('https://thumbs.dreamstime.com/b/surprised-african-kid-hands-face-close-up-portrait-hand-little-girl-open-mouth-isolated-white-background-71111084.jpg')">
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
                    </div>
                </div>
                <div class="module formulaire-photos">
                    <h2>Choix de la photo</h2>

                    <form action="concours-photos-upload-success.php" enctype="multipart/form-data" id="formulaire-concours">
                        <label for="image-form-field">Sélectionnez votre plus belle photo :)</label>
                        <input type="file" id="image-form-field" name="photo-participant" accept="image/*" required >
                        <button type="submit" class="submit-button">Soumettre</button>
                        <button type="reset" class="reset-button">Annuler</button>
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
