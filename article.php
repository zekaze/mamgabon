<?php include "assets/header.php"; ?>
    <ul class="breadcrumbs">
        <li><a href="#">éducation</a></li>
        <li><a href="articles.php">articles</a></li>
    </ul>
    <div class="container">
        <h1 class="article-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER
            ADIPISCING ELIT, SED</h1>
        
        <div class="hero-image">
            <img src="https://teddibearswimschool.com/wp-content/uploads/2013/12/031.jpg" alt="titre de l'article">
        </div>

        <div class="publication-date">
            15 mai 2018
        </div>

        <div class="sharethis-inline-share-buttons"></div>

        <div class="row">
            <div class="col-md-9">
                <div class="article-body">
                    <p style="font-style: italic">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, minus, possimus. Architecto deserunt doloremque eaque esse, expedita iure maxime nihil numquam odio possimus provident quam, quod ratione rem saepe voluptas!</p>
                    <h3>1 - Mobortis nisl ut aliquip</h3>
                    <p>Mobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in
                        vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                        accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                        feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Architecto deleniti doloremque et explicabo illum minima natus nulla. Distinctio eligendi error harum impedit laborum mollitia nam nemo perferendis quod similique? At. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nemo sequi voluptatem. Autem consequuntur cum <strong>dolorum enim maxime</strong> modi nesciunt qui saepe sit? Amet blanditiis minus, odit officiis pariatur quos.</p>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit</p>
                    <h3>2 - Mobortis nisl ut aliquip</h3>
                    <p>Mobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in
                        vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                        accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                        feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Architecto deleniti doloremque et explicabo illum minima natus nulla. Distinctio eligendi error harum impedit laborum mollitia nam nemo perferendis quod similique? At. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nemo sequi voluptatem. Autem consequuntur cum <strong>dolorum enim maxime</strong> modi nesciunt qui saepe sit? Amet blanditiis minus, odit officiis pariatur quos.</p>

                    <blockquote>
                        <p>Architecto deleniti doloremque et explicabo illum minima natus nulla. Distinctio eligendi error harum impedit laborum mollitia nam nemo</p>
                    </blockquote>

                    <h3>3 - Mobortis nisl ut aliquip</h3>
                    <p>Mobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in
                        vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                        accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                        feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Architecto deleniti doloremque et explicabo illum minima natus nulla. Distinctio eligendi error harum impedit laborum mollitia nam nemo perferendis quod similique? At. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nemo sequi voluptatem. Autem consequuntur cum <strong>dolorum enim maxime</strong> modi nesciunt qui saepe sit? Amet blanditiis minus, odit officiis pariatur quos.</p>

                </div>
                <!--end of article body-->
                <div class="tags-list">
                    <a href="#" class="tag">#education</a>
                    <a href="#" class="tag">#vulputate velit</a>
                    <a href="#" class="tag">#Architecto</a>
                    <a href="#" class="tag">#Architecto deleniti</a>
                </div>

                <div class="article-suggestions">
                    <div class="section-title small" data-animate="fadeInUp">
                        <h3>Dans la même catégorie</h3>
                    </div>

                    <ul class="suggestion-list">
                        <?php for ($i = 0; $i < 3; $i++): ?>
                            <li><a href="#" class="list-item" data-animate="fadeInUp">
                                    <div class="image-frame">
                                        <img src="http://tntribune.com/wp-content/uploads/2016/08/iStock_000010561067Medium.jpg" alt="titre de l'article">
                                    </div>
                                    <h4 class="title" title="Lorem ipsum dolor sit amet, consectetuer Lorem ipsum dolor">Lorem ipsum dolor sit amet, consectetuer Lorem ipsum dolor</h4>
                                </a>
                            </li>
                        <?php endfor;?>
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
