<?php include "assets/header.php"; ?>
    <div class="error404">
        <div class="container">
            <h1>Page non trouvée</h1>
            <p>Désolé, il semblerait que la page que vous recherchez n'existe pas. <br>Nous vous invitons à revenir
                vers la <a href="index.php">page d'accueil</a> ou alors esseyez de lancer une recherche.</p>

            <div class="row">
                <div class="col-lg-10 col-sm-8">
                    <form method="get" action="">
                        <input type="text" class="search-input" placeholder="Que recherchez-vous sur MamGabon?" name="q"
                               autocomplete="off" required>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
<?php include "assets/footer.php"; ?>