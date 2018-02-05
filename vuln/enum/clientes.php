<?php

require('lib/nusoap.php');
require('funciones.php');
$server = new soap_server();


$server->configureWSDL('Area Clientes Tienda', 'urn:MyService');
$server->soap_defencoding = 'utf-8';

$server->register(
    'ObtenerToken',   //Name of function
    array('usuario' => 'xsd:string', 'clave' => 'xsd:string'), //Input Values
    array('return' =>'xsd:string'), //Output Values
      'urn:MyServicewsdl',  //Namespace
    'urn:MyServicewsdl#InsertData',  //SoapAction
    'rpc',       //style
    'literal',   //can be encoded but it doesn't work with silverlight
    'metodo para obtener token de sesion'
);

$server->register(
    'BuscarCliente',  
    array('id' => 'xsd:int'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',       //style
    'literal',   //can be encoded but it doesn't work with silverlight
    'metodo para obtener datos del cliente'
);

$server->register(
    'AgregarCliente',   //Name of function
    array('nombre' => 'xsd:string', 'clave' => 'xsd:string','direccion' => 'xsd:string','comuna' => 'xsd:string','telefono' => 'xsd:string'), 
    array('return' =>'xsd:string'), //Output Values
      'urn:MyServicewsdl',  //Namespace
    'urn:MyServicewsdl#InsertData',  //SoapAction
    'rpc',       //style
    'literal',   //can be encoded but it doesn't work with silverlight
    'metodo para agregar cliente'
);

$server->register(
    'EliminarCliente',  
    array('id' => 'xsd:int'), 
    array('return' =>'xsd:string'), 
      'urn:MyServicewsdl',  
    'urn:MyServicewsdl#InsertData',  
    'rpc',       //style
    'literal',   //can be encoded but it doesn't work with silverlight
    'metodo para eliminar cliente'
);




$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>