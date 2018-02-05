<?php
error_reporting( E_ALL );
require('lib/nusoap.php');
require('funciones.php');
$server = new soap_server();

$server->configureWSDL('Servicio de Usuario ', 'urn:MyService');
$server->soap_defencoding = 'utf-8';

$server->register(
    'XSSBasico',  
    array('msj' => 'xsd:string'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',      
    'literal', 
    'metodo saludar XSS basico sin filtros'
);

$server->register(
    'XSSFiltro1',  
    array('msj' => 'xsd:string'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',      
    'literal', 
    'metodo saludar XSS con filtros str_replace'
);

$server->register(
    'XSSFiltro2',  
    array('msj' => 'xsd:string'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',      
    'literal', 
    'metodo saludar XSS con filtros str_ireplace'
);

$server->register(
    'XSSFiltro3',  
    array('pagina' => 'xsd:string'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',      
    'literal', 
    'metodo saludar XSS con filtros htmlentities'
);

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>


