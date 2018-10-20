<?php

//Fausse données juste pour le test
/*
 * Les données sont structurées comme suit:
 *
 * Date 1 du calendrier
 *    |
 *    | Evenement 1
 *    |      |
 *    |      |Titre evenement 1
 *    |      |Ville evenement 1
 *    |      | ...
 *    |      | ...
 *    | Evenement 2
 *    |      |Titre evenement 2
 *    |      |Ville evenement 2
 *    |      | ...
 *    |      | ...
 * Date 2 du calendrier
 * ...
 * ...
 *
 *
 * */
//Vérification de la requête AJAX
if(isset($_GET["event-data"]) && !empty($_GET["event-data"])){
    //Intégration des données
}

$dates = array(
    "2018-10-20" => array(
        array(
            "titre" => "Titre de l'événement 1",
            "ville" => "Libreville",
            "quartier" => "Angondje",
            "categorie" => "Cinéma",
            "lieu" => "L'Institut français du Gabon",
            "photo_couverture" => "http://mamgabon.com/uploads/articles/5bc6f4b4480a0.jpg",
            "url" => "article.php"
        ),
        array(
            "titre" => "Titre de l'événement 2",
            "ville" => "Libreville",
            "quartier" => "Angondje",
            "categorie" => "Concert",
            "lieu" => "L'Institut français du Gabon",
            "photo_couverture" => "http://mamgabon.com/uploads/articles/5bc0b2d4372cb.jpg",
            "url" => "article.php"
        )
    ),
    "2018-10-25" => array(
        array(
            "titre" => "Titre de l'événement 1",
            "ville" => "Libreville",
            "quartier" => "Angondje",
            "categorie" => "Exposition",
            "lieu" => "L'Institut français du Gabon",
            "photo_couverture" => "http://mamgabon.com/uploads/articles/5bc6f35e4ab59.jpg",
            "url" => "article.php"
        )
    )
);

$date_calendrier = array();
$count = 0;

foreach ($dates as $date => $events){
    $mois = array(null, "janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre");
    $mois_short = array(null, "jan","fév","mar","avri","mai","juin","juil","août","sept","oct","nov","déc");

    $date_calendrier[$count]['date'] = $date;
    $date_array = preg_split("#-#",$date);
    $date_calendrier[$count]['badge'] = false;
    $date_calendrier[$count]['title'] = "Événements du ".$date_array[2]."&nbsp;".$mois[(int)($date_array[1])]."&nbsp;".$date_array[0]."";
    $date_calendrier[$count]['body'] = null;
    $date_calendrier[$count]['footer'] = "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>";
    foreach ($events as $event){
        $titre = $event['titre'];
        $ville = $event['ville'];
        $quartier = $event['quartier'];
        $categorie = $event['categorie'];
        $annonceur = $event['lieu'];
        $photo_couverture = $event['photo_couverture'];
        $url = $event['url'];


        $date_calendrier[$count]['body'] .= "<div class=\"event\">";
        $date_calendrier[$count]['body'] .= "<div class=\"article-category\">$categorie</div>";
        $date_calendrier[$count]['body'] .= "<div class=\"event-count\">1 / 2</div>";
        $date_calendrier[$count]['body'] .= "<div class=\"event_title\">$titre</div>";
        $date_calendrier[$count]['body'] .= "<div class=\"event_location\">$quartier, $ville</div>";
        //if (client ==  premium, etc)
        $date_calendrier[$count]['body'] .= "<div class=\"event_picture_frame\">";
        $date_calendrier[$count]['body'] .= "<img src=\"$photo_couverture\" class=\"img-responsive\" alt=\"$titre\">";
        $date_calendrier[$count]['body'] .= "</div>"; //closes picture frame
        //end if
        $date_calendrier[$count]['body'] .= "<div class=\"annonceur\">Par $annonceur</div>";
        $date_calendrier[$count]['body'] .= "<a href='".$url."' class='btn'>En savoir plus</a>";
        $date_calendrier[$count]['body'] .= "</div>"; //closes event


    }
    //Incrémente le compteur
    $count++;

}
echo json_encode($date_calendrier);