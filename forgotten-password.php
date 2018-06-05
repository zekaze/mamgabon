<?php include "assets/header.php"; ?>

<?php if(isset($_GET["e"]) && !empty($_GET["e"])):?>
    <div class="container">
        <ul class="breadcrumbs left">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Mot de passe oublié</a></li>
        </ul>
        <h2>Mot de passe oublié</h2>

        <div class="article-body">
            <p>Un email a été envoyé à l'adresse : <?php echo $_GET{"e"};?></p>
            <a href="index.php">Retour vers l'accueil</a>
        </div>
    </div>
<?php else:?>
    <div class="container">
        <div class="section-title" data-animate="fadeInUp">
            <h1>Mot de passe oublié</h1>
        </div>

        <div class="article-body">
            <p class="text-center">Veuillez entrer votre adresse mail. Un e-mail de réinitialisation sera envoyé à cette adresse si elle associée à un compte utilisateur.</p>
            <div class="row">
                <div class="col-sm-4 col-sm-push-4">
                    <form action="" id="reset-password-form">
                        <input type="email" name="e" class="form-input" required placeholder="Adresse mail">
                        <button type="submit" class="submit-button">Envoyer</button>
                        <div class="text-center" style="padding: 15px 0">
                            <a href="login-registration.php">Je me souviens de mon mot de passe</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
<?php endif;?>
<?php include "assets/footer.php"; ?>