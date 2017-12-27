<?php
header('Access-Control-Allow-Origin: *');

$type = $_REQUEST['type'];

switch($type){
	
	case "countries" :
	 require_once("countries.php");
	break;
	
	case  "states" :
	 require_once("states.php");
	break;
	
	case  "cities" :
	 require_once("cities.php");
	break;
	
	default :
	 require_once("countries.php");
	break;
}
?>