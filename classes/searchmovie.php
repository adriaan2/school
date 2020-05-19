<?php
//BussinessLogic Laag == OBJECT GEORIENTEERD 
//Filename: "SEARCHMOVIE.PHP"
//var_dump($_POST);
include('Movie.class.php');
include('helper.php');

$postTitle = $_GET['title']; //URL balk variable(GET) of form input HTML(POST)

//OBSTAKEL: Bad Boys wordt Bad_Boys -> replace spaces with underscores vanwege API
$newTitle = MovieHelper::ReplaceTitle($postTitle);

//Maak object
$movieObj = new Movie($newTitle); //bad boys geef ik mee, om de rest van deze film info op te halen

//Vullen object
$movieObj->setMovieProperties(); //gebruik de Json class om de movieobject(eigenschappen) te vullen

//Tonen object a.j.eijeriks@tcrmbo.nl
echo '	<h1>		' .$movieObj->Title()	.'</h1>		';
echo '	<pre>			' .$movieObj->Year()	.'</pre>	';
echo '	<img src="' .$movieObj->Poster()	.'" /><br />';

echo '<h2></h2>';
/*echo"<form method ='get' action='addmoviedb.php'>";
echo"<input type ='hidden' value='".$sendon."name='IMDB'>"; 
echo "<input type='submit' value='submit'>";
echo"</form>";
*/
//echo" <a href='addmoviedb.php?imdbID='".$sendon."'</a><button>toevoegen</button>";
echo'<a href="addmoviedb.php?imdbID="'..'"<button>toevoegen</button></a>';

include 'dbclass.php';

// Define configuration  
define("DB_HOST", "localhost");  
define("DB_USER", "root");  
define("DB_PASS", "");  
define("DB_NAME", "moviedatabaseoop");  

var_dump($_GET);
$dbObj = new Database(); //wordt hier automatisch altijd de constructor, constructor bouwt het object

//INSERT
$dbObj->query('INSERT INTO film(imdbID) VALUES(:imdbID)');  
$dbObj->bind(':imdbID', $_GET["imdbID"]);
var_dump($dbObj->resultset());

 if ($dbobj->query=true) {
     echo"true";
 } else {
     echo"flase";
 } 

echo "<h1>U hebt succesvol een film toegevoegd aan uw watchlist</h1>";

//echo'<p>U wilt de film met ID toevoegen: '.$_GET['imdbID'].'</p>';





//Vanuit hier een Database object aan te maken en de title op te slaan.
//TODO: roep een methode op om de ID mee op te slaan.
?>




 
