<?php
//error_reporting (0);
include("class.TemplatePower.inc.php");
$tpl= new TemplatePower("simple.tpl");
$tpl->prepare();

$leerling1="markishomo";

$tpl->assign("leerling",$leerling1);
$tpl->assign("leerling2","mocrocrimineel");

$tpl->printtoscreen();
?>