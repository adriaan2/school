<?php
//Hier komen alleen ondersteunende functies om te helpen bij Movie gerelateerde probleempjes
class MovieHelper
{
    private static $input = '';
	
	/* voor toekomstige aanpassingen, als een bepaalde 
	//actie altijd eerst uitgevoerd moet worden
    //check of de API url in de lucht is?
	
	private static function initialize()
    {
		echo'In de INITIZLIAZE van Helper!';
    }
	*/

    public static function ReplaceTitle($input)
    {
        //self::initialize(); // 'De constructor'

		$replaceChars = array(' ');
		self::$input = str_replace($replaceChars , '_', $input);
		return self::$input;
    }
}
?>
<!-- ______                               _ 
    (_____ \         copyright           (_)
     _____) )  ___   _____  ____   _____  _ 
    |  ____/  / _ \ | ___ ||  _ \ (____ || |
    | |      | |_| || ____|| | | |/ ___ || |
    |_|       \___/ |_____)|_| |_|\_____||_|
-->
