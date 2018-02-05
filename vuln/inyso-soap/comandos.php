<?php

require('lib/nusoap.php');
require('funciones.php');
$server = new soap_server();

$server->configureWSDL('Verificar Direccion IP', 'urn:MyService');
$server->soap_defencoding = 'utf-8';

$server->register(
    'ObtenerDisponibilidadPing',  
    array('ip' => 'xsd:string'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',      
    'literal', 
    'metodo para obtener por medio de ping disponibilidad equipo'
);


$server->register(
    'ObtenerDNSLookUP',  
    array('ip' => 'xsd:string'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',       
    'literal',   
    'nombre de dominio que esta asociado a una determinada direccion IP '
);




$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
