<?php
//BussinessLogic Laag == OBJECT GEORIENTEERD 
//Filename: "SEARCHMOVIE.PHP"
//var_dump($_POST);
include('./classes./Movie.class.php');
include('./classes./helper.php');

$postTitle = $_GET['title']; //URL balk variable(GET) of form input HTML(POST)

//OBSTAKEL: Bad Boys wordt Bad_Boys -> replace spaces with underscores vanwege API
$newTitle = MovieHelper::ReplaceTitle($postTitle);

//Maak object
$movieObj = new Movie($newTitle); //bad boys geef ik mee, om de rest van deze film info op te halen

//Vullen object
$movieObj->setMovieProperties(); //gebruik de Json class om de movieobject(eigenschappen) te vullen

//Tonen object
echo '	<h1>		' .$movieObj->Title()	.'</h1>		';
echo '	<pre>		' .$movieObj->Year()	.'</pre>	';
echo '	<img src="	' .$movieObj->Poster()	.'" /><br />';

echo"<a href='addmoviedb.php'".$movieObj->Imdbid()."<button>toevoegen aan mijn watchlist</button></a>";

?> 
