<?php
include('JsonConversie.class.php');

class Movie
{
	//eigenschappen
	private $title = "";
	private $year = "";
	private $imdbID = "";
	private $poster = "";

	//ngo 20 properties
	
	//constuctor
	function __construct($title)
	{
		$this->title = $title; //Bad_boys
		//echo'TEST: Het object is aangemaakt';
	}
	
	//methodes
	public function Title()
	{
		return $this->title;
	}
	
	public function Year()
	{
		return $this->year;
	}
	
	public function Poster()
	{
		return $this->poster;
	}
	
	public function ImdbID(){
		return $this->imdbID;

	}
	public function setMovieProperties() //setInfo()
	{
		//hier kroep je de Json class aan om de eigenschappen van de film te vullen
		$jsonconversie = new JsonConversie($this->title); //TITEL wordt niet opgehaald, maar ingevuld door de gebruiker obv titel halen we de rest op dmv de API
		$jsonconversie->setAPIUrl("http://www.omdbapi.com/?apikey=186be766&t="); //JSON URL
		
	$this->properties = $jsonconversie->Conversie();
    $this->year = $jsonconversie->getInfo("Year");
	$this->imdbID = $jsonconversie->getInfo("imdbID");
	$this->poster = $jsonconversie->getInfo("Poster");
		
		
	}
}

?>

