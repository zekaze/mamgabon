<?php include "assets/header.php"; ?>
    <ul class="breadcrumbs">
        <li><a href="#">éducation</a></li>
        <li><a href="#">articles</a></li>
    </ul>
    <div class="container">
        <h1 class="article-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER
            ADIPISCING ELIT, SED</h1>
        
        <div class="hero-image">
            <img src="https://teddibearswimschool.com/wp-content/uploads/2013/12/031.jpg" alt="titre de l'article">
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

                    <h3>3 - Mobortis nisl ut aliquip</h3>
                    <p>Mobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in
                        vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                        accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                        feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Architecto deleniti doloremque et explicabo illum minima natus nulla. Distinctio eligendi error harum impedit laborum mollitia nam nemo perferendis quod similique? At. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nemo sequi voluptatem. Autem consequuntur cum <strong>dolorum enim maxime</strong> modi nesciunt qui saepe sit? Amet blanditiis minus, odit officiis pariatur quos.</p>
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
                    <h3>Laissez un commentaire</h3>



                    <div class="inscription">
                        Veuillez vous inscrire  pour pouvoir laisser un commentaire. <button id="loginFormButton">S'inscrire</button>
                        Déjà inscrit? Veuillez vous identifier <button id="regFormButton">S'identifier</button>
                    </div>
                    
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
                                        En cochant cette case vous acceptez de recevoir notre newsletter à cette adresse
                                    </label>

                                </div>
                                <button type="submit">S'inscrire</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


            <?php include "assets/aside.php"; ?>
        </div>
    </div>
<?php include "assets/footer.php"; ?>