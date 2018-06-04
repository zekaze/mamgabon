<?php include "assets/header.php"; ?>

<?php if(isset($_GET["e"]) && !empty($_GET["e"])):?>
    <div class="container">
        <ul class="breadcrumbs left">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Mot de passe oublié</a></li>
        </ul>
        <div class="section-title left" data-animate="fadeInUp">
            <h1>Mot de passe</h1>
        </div>

        <div class="article-body">
            <p>Un email a été envoyé à l'adresse : <?php echo $_GET{"e"};?></p>
            <a href="index.php">Retour vers l'accueil</a>
        </div>
    </div>
<?php else:?>
    <div class="container">
        <ul class="breadcrumbs left">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Mot de passe oublié</a></li>
        </ul>
        <div class="section-title left" data-animate="fadeInUp">
            <h1>Mot de passe</h1>
        </div>

        <div class="article-body">
            <p>Veuillez entrer votre adresse mail. Un e-mail de réinitialisation sera envoyé à cette adresse si elle associée à un compte utilisateur.</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <form action="" id="reset-password-form">
                        <input type="email" name="e" class="form-input" placeholder="Adresse mail">
                    <button type="submit" class="submit-button"><i class="fa fa-envelope-o"></i></button>
                </form>
            </div>
        </div>
    </div>
<?php endif;?>
<?php include "assets/footer.php"; ?>