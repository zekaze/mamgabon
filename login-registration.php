<?php include "assets/header.php"; ?>
    <div class="container">
        <ul class="breadcrumbs left">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">S'identifier</a></li>
        </ul>
        <div class="row login-registration-forms">
            <div class="col-sm-6">
                <form method="get" action="" id="registration-form">
                    <h2>S'inscrire</h2>
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
            <div class="col-sm-5 col-sm-push-1">
                <form method="get" action="" id="login-form">
                    <h2>S'identifier</h2>
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
<?php include "assets/footer.php"; ?>