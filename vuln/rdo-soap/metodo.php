<?php

require('lib/nusoap.php');
require('funciones.php');
$server = new soap_server();


$server->configureWSDL('Servicio Empleados', 'urn:MyService');
$server->soap_defencoding = 'utf-8';


$server->register(
    'ObtenerEmpleados',  
    array('id' => 'xsd:string'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#empleados',  
    'rpc',       //style
    'literal',   //can be encoded but it doesn't work with silverlight
    'metodo para obtener sueldos empleados'
);


$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>