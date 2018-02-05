<?php
error_reporting( E_ALL );
require('lib/nusoap.php');
require('funciones.php');
$server = new soap_server();

$server->configureWSDL('Servicio de Comentarios', 'urn:MyService');
$server->soap_defencoding = 'utf-8';

$server->register(
    'GuardarComentario',  
    array('usr' => 'xsd:string','msj' => 'xsd:string','date' => 'xsd:string'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',      
    'literal', 
    'metodo guardar comentario.'
);


$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>