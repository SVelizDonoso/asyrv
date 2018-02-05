<?php
include("funciones.php");
$method = $_SERVER['REQUEST_METHOD'];
$resource = $_SERVER['REQUEST_URI'];

function amigable( $pos = '' ) { 
    $url_amigable = explode( '/', substr( $_SERVER['PATH_INFO'] , 1) ); 
    for( $n=0; $n < count( $url_amigable ); $n++ ) { 
      if( $n % 2 == 0 ) { 
          $re[ $url_amigable[ $n ] ] = $url_amigable[ ( $n + 1 ) ]; 
      } 
    } 
     
    $re = ! empty( $pos ) ? $re[ $pos ] : $re; 
    return $re; 
} 


switch ($method) {
        case 'GET':
             $result = null;
             $url_amigable = amigable(); 
             $des =  base64_decode($url_amigable['deserializar']);
             if($des){
               echo json_encode(DeserializeObjeto($des));
             }else{
              echo json_encode( "Metodo Desconocido!");
             }
             break;
        case 'POST':
            echo "Metodo POST no Implementado!";
            break;
        case 'PUT':
            echo "Metodo PUT no Implementado!";
            break;
        case 'DELETE':
            echo "Metodo DELETE no Implementado!";
            break;
}

