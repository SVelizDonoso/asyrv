<?php
error_reporting( E_ALL );
require('lib/nusoap.php');
require('funciones.php');
$server = new soap_server();

$server->configureWSDL('Servicio de Disponibilidad', 'urn:MyService');
$server->soap_defencoding = 'utf-8';

$server->register(
    'VerSitioCurl',  
    array('url' => 'xsd:string'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',      
    'literal', 
    'metodo usa curl.'
);

$server->register(
    'VerDisponibilidadSitio',  
    array('url' => 'xsd:string'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',      
    'literal', 
    'metodo usa socket'
);


$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//$server->service($HTTP_RAW_POST_DATA);
$server->service(file_get_contents("php://input"));
?>
