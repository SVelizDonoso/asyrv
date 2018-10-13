<?php

require('lib/nusoap.php');
require('funciones.php');
$server = new soap_server();


$server->configureWSDL('Personajes Futurama', 'urn:MyService');
$server->soap_defencoding = 'utf-8';



$server->register(
    'ObtenerPersonaje',  
    array('id' => 'xsd:int'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',       //style
    'literal',   //can be encoded but it doesn't work with silverlight
    'metodo para obtener personaje de futurama'
);


$server->register(
    'EliminarPersonaje',  
    array('id' => 'xsd:int'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',       //style
    'literal',   //can be encoded but it doesn't work with silverlight
    'metodo para eliminar personaje de la base de datos'
);




$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//$server->service($HTTP_RAW_POST_DATA);
$server->service(file_get_contents("php://input"));
?>
