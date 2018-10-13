<?php
require 'functions.php';
require 'lib/nusoap.php';
$server=new soap_server();

$server->configureWSDL("Objeto Serializado","dvwa:webservice");
$server->register(
	"DeserializeObjeto", 
	 array("serializado"=>'xsd:string'),	
	 array("return"=>"xsd:string")  
	);

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//$server->service($HTTP_RAW_POST_DATA);
$server->service(file_get_contents("php://input"));
?>
