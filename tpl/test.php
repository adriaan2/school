<?php
//Getmovie OBJECT GEORIENTEERD

include('JsonConversie.php');

$title = $_GET['title']; //URL balk variable of form input HTML

//Stap 1 = Maak Object en geef een titel mee
$jsonConvert = new JsonConversie($title);

//Stap 2 = Geef de API mee
$jsonConvert->setAPIUrl("http://www.omdbapi.com/?apikey=186be766");

//Stap 3 = Combineer title en API en converteer
$jsonConvert->Conversie($jsonConvert->url, $jsonConvert->title);

//Stap 4 = get Movie info from objects
$movieInfo = $jsonConvert->getMovieInfo("Poster"); //verander hier je argumenten om de juiste film data op te halen

//var_dump($movieInfo);

echo '<img src="'.$movieInfo.'" /><br />';
echo"<button>toevoegen</button>";

?>