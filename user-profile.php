<?php include "assets/header.php"; ?>
    <div class="container">
        <div class="row" style="background-color: #fff">
            <div class="col-sm-6">
                <h1>Modifier mes informations</h1>
                <div class="article-body">
                    <p>Bonjour <strong>Samir</strong>! Ici vous pouvez changer votre nom, mot de passe, adresse mail, et plus. </p>

                    <form action="" class="user-profile-form">
                        <h3>Nom & email</h3>
                        <input type="text" name="nom" class="form-input" required placeholder="Modifier votre nom">

                        <input type="email" name="e" class="form-input" required placeholder="Adresse mail">
                        <label>
                            <input type="checkbox" name="">
                            Recevoir notre newsletter à cette adresse
                        </label>

                        <button type="submit" class="submit-button">Enregistrer les modifications</button>
                    </form>

                    <h3>Mot de passe</h3>
                    <form action="" class="user-profile-form">
                        <input type="password" name="re-new-password" class="form-input" required placeholder="Nouveau mot de passe">

                        <input type="password" name="re-new-password" class="form-input error" required placeholder="Répéter le mot de passe">

                        <span class="error-message">Les mots de passe ne sont pas identiques</span>
                        <button type="submit" class="submit-button">Enregistrer les modifications</button>
                    </form>
                </div>
            </div>

            <div class="col-sm-3 col-sm-push-3" style="background-color: #fff; padding-top: 20px">
                <div class="sidebar">
                    <div class="widget calendar">
                        <div id="calendar"></div>
                        <a href="calendrier.php" class="link center">Voir tous les événements</a>
                    </div>
                    <div class="widget sondage">
                        <h3 class="widget-title">Sondage</h3>
                        <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto ?</div>

                        <form action="">
                            <ul>
                                <li><label class="radio-option"><input type="radio" value="1" required name="sondage-001"> Lorem ipsum dolor sit amet</label></li>
                                <li><label class="radio-option"><input type="radio" value="2" required name="sondage-001"> Architecto, culpa debitis</label></li>
                                <li><label class="radio-option"><input type="radio" value="3" required name="sondage-001"> Obcaecati officiis pariatur</label></li>
                            </ul>
                            <button type="submit">Soumettre</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        body:before{background-image: url("https://image.shutterstock.com/z/stock-photo-african-american-mother-and-daughter-753499996.jpg");}
    </style>

    <script>
        PNotify.success({
            title: 'Success!',
            text: 'That thing that you were trying to do worked.'
        });
    </script>
<?php include "assets/footer.php"; ?>