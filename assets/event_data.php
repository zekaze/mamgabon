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
    "2018-07-14" => array(
        array(
            "titre" => "Titre de l'événement 1",
            "ville" => "Libreville",
            "quartier" => "Angondje",
            "categorie" => "Cinéma",
            "lieu" => "L'Institut français du Gabon",
            "photo_couverture" => "https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/30656512_1640560252718607_3635224169070276705_n.jpg?_nc_cat=0&oh=77374de791fbebb84b017074c2245163&oe=5B4FB868",
            "url" => "article.php"
        ),
        array(
            "titre" => "Titre de l'événement 2",
            "ville" => "Libreville",
            "quartier" => "Angondje",
            "categorie" => "Concert",
            "lieu" => "L'Institut français du Gabon",
            "photo_couverture" => "https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/31277589_1651529734954992_6658242169030714875_n.jpg?_nc_cat=0&oh=19dc7941e95d351f99d9c81380fe82aa&oe=5B95021D",
            "url" => "article.php"
        )
    ),
    "2018-07-20" => array(
        array(
            "titre" => "Titre de l'événement 1",
            "ville" => "Libreville",
            "quartier" => "Angondje",
            "categorie" => "Exposition",
            "lieu" => "L'Institut français du Gabon",
            "photo_couverture" => "https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/29186965_1610944632346836_3342431140360164448_n.jpg?_nc_cat=0&oh=9f8f46a7d12bd35b9e1fc1b7c7ad10d3&oe=5B9CD38D",
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