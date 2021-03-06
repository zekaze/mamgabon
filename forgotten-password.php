<?php include "assets/header.php"; ?>
    <div class="container">
        <div class="section-title" data-animate="fadeInUp">
            <h1>Mot de passe oublié</h1>
        </div>
<?php if(isset($_GET["e"]) && !empty($_GET["e"])):?>

        <div class="article-body text-center">
            <p>Un email a été envoyé à l'adresse : <strong><?php echo $_GET{"e"};?></strong></p>
            <a href="index.php">Retour à l'accueil</a>
        </div>
<?php else:?>

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

<?php endif;?>
    </div>
<?php include "assets/footer.php"; ?>