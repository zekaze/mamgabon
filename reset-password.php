<?php include "assets/header.php"; ?>
    <div class="container">
        <div class="section-title" data-animate="fadeInUp">
            <h1>Changer de mot de passe</h1>
        </div>
<?php if(isset($_GET["e"]) && !empty($_GET["e"])):?>

        <div class="article-body text-center">
            <p>Un email a été envoyé à l'adresse : <strong><?php echo $_GET{"e"};?></strong></p>
            <a href="index.php">Retour à l'accueil</a>
        </div>
<?php else:?>

        <div class="article-body">
            <p class="text-center">Veuillez remplir ce formulaire pour réinitialiser votre mot de passe.</p>
            <div class="row">
                <div class="col-sm-4 col-sm-push-4">
                    <form action="" id="reset-password-form">
                        <input type="password" name="new-password" class="form-input error" required placeholder="Nouveau mot de passe">
                        <span class="error-message">Les mots de passe ne sont pas identiques</span>
                        <input type="password" name="re-new-password" class="form-input error" required placeholder="Répéter le mot de passe">

                        <span class="error-message">Les mots de passe ne sont pas identiques</span>
                        <button type="submit" class="submit-button">Enregistrer</button>
                    </form>

                </div>
            </div>
        </div>

<?php endif;?>
    </div>
<?php include "assets/footer.php"; ?>