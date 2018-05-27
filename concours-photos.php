<?php include "assets/header.php"; ?>
    <ul class="breadcrumbs">
        <li><a href="#">éducation</a></li>
        <li><a href="#">articles</a></li>
    </ul>
    <div class="container">
        <h1 class="article-title">Nathan, grand vainqueur du consours de photos Mai 2018</h1>
        
        <div class="hero-image">
            <img src="https://i.pinimg.com/originals/20/c1/8c/20c18caa57e9077e4559ab35a93029e0.jpg" alt="titre de l'article">
        </div>

        <div class="publication-date">
            15 mai 2018
        </div>

        <div class="sharethis-inline-share-buttons"></div>

        <div class="row">
            <div class="col-md-9">
                <div class="article-body">
                    <h2>Félicitations à Nathan</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam at deleniti est fugit iste iure nobis officiis voluptatem. Corporis cumque dolore obcaecati soluta sunt. Cum eligendi est et nulla.</p>


                    <h3>Photos des autres participants</h3>


                        <div class="module gallery-photo">
                            <div class="grid-sizer"></div>
                            <a href="https://i.pinimg.com/originals/48/a1/e3/48a1e3dec355840b4aca924ae9769dc6.jpg" class="grid-item"><img src="https://i.pinimg.com/originals/48/a1/e3/48a1e3dec355840b4aca924ae9769dc6.jpg" alt="Photo"></a>

                            <a href="https://i.pinimg.com/originals/80/f1/9c/80f19cbfbbaac5346e8c13b483fd2a3b.jpg" class="grid-item"><img src="https://i.pinimg.com/originals/80/f1/9c/80f19cbfbbaac5346e8c13b483fd2a3b.jpg" alt="Photo"></a>

                            <a href="https://i.pinimg.com/originals/d4/51/5b/d4515bae414a6f3d65d8c991958c1672.jpg" class="grid-item"><img src="https://i.pinimg.com/originals/d4/51/5b/d4515bae414a6f3d65d8c991958c1672.jpg" alt="Photo"></a>

                            <a href="https://i.pinimg.com/originals/c1/ec/fa/c1ecfa88d29b6515426286eaa342c598.jpg" class="grid-item"><img src="https://i.pinimg.com/originals/c1/ec/fa/c1ecfa88d29b6515426286eaa342c598.jpg" alt="Photo"></a>

                            <a href="https://i.pinimg.com/originals/af/24/09/af240921fd8ebee21a01728a3a454cec.jpg" class="grid-item"><img src="https://i.pinimg.com/originals/af/24/09/af240921fd8ebee21a01728a3a454cec.jpg" alt="Photo"></a>

                            <a href=https://i.pinimg.com/originals/84/86/1e/84861e1917b5bdd8ac6b667567fee466.jpg" class="grid-item"><img src="https://i.pinimg.com/originals/84/86/1e/84861e1917b5bdd8ac6b667567fee466.jpg" alt="Photo"></a>

                            <a href="https://www.childtrends.org/wp-content/uploads/2015/12/bigstock-Young-African-American-Mother-85812815.jpg" class="grid-item"><img src="https://www.childtrends.org/wp-content/uploads/2015/12/bigstock-Young-African-American-Mother-85812815.jpg" alt="Photo"></a>

                            <a href="https://i.pinimg.com/originals/ec/6f/a1/ec6fa18ae1d7d0bd44b824bf2dfd8733.jpg" class="grid-item"><img src="https://i.pinimg.com/originals/ec/6f/a1/ec6fa18ae1d7d0bd44b824bf2dfd8733.jpg" alt="Photo"></a>

                            <a href="https://i.pinimg.com/originals/0a/26/50/0a2650685db6e97db5ba2e98c0be591c.jpg" class="grid-item"><img src="https://i.pinimg.com/originals/0a/26/50/0a2650685db6e97db5ba2e98c0be591c.jpg" alt="Photo"></a>

                            <a href="https://i.pinimg.com/originals/f4/11/f9/f411f9f6b104552a8ae3cc323e9ddb3c.jpg" class="grid-item"><img src="https://i.pinimg.com/originals/f4/11/f9/f411f9f6b104552a8ae3cc323e9ddb3c.jpg" alt="Photo"></a>
                        </div>

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
                                    <div class="abstract">
                                        Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed
                                    </div>
                                </a>
                            </li>
                        <?php endfor;?>
                    </ul>
                </div>
                <div class="comments-section">
                    <div class="header">
                        <h3 class="title">Laissez un commentaire</h3>

                        <div class="inscription">
                            Veuillez vous inscrire  pour pouvoir laisser un commentaire. Cliquez<button id="loginFormButton">ici pour vous inscrire.</button>
                            <br>
                            Déjà inscrit? Cliquez<button id="regFormButton">ici pour vous identifier.</button>

                            <div id="slick-forms">
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
                                <div class="slide img" style="background-image: url('https://thumbs.dreamstime.com/b/surprised-african-kid-hands-face-close-up-portrait-hand-little-girl-open-mouth-isolated-white-background-71111084.jpg')">
                                    <div class="img">
                                    </div>
                                </div>

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
                        <?php for($k = 0; $k < 10; $k++):;?>
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
                                    <label for="comment-field" class="hidden">Saisissez votre commentaire</label>
                                    <input type="text" name="commentaire" class="form-input" id="comment-field" required placeholder="Saisissez votre commentaire...">
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
                                            <label for="comment-field" class="hidden">Saisissez votre commentaire</label>
                                            <input type="text" name="commentaire" class="form-input" id="comment-field" required placeholder="Saisissez votre commentaire...">
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
                                            <label for="comment-field" class="hidden">Saisissez votre commentaire</label>
                                            <input type="text" name="commentaire" class="form-input" id="comment-field" required placeholder="Saisissez votre commentaire...">
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
                                            <label for="comment-field" class="hidden">Saisissez votre commentaire</label>
                                            <input type="text" name="commentaire" class="form-input" id="comment-field" required placeholder="Saisissez votre commentaire...">
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
