<?php
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
              $url_amigable = amigable(); 
              $metodo = $url_amigable['metodo'];
              $ip= $url_amigable['ip'];
              $puerto= $url_amigable['puerto'];
              if($metodo=="curl"){
                 echo VerSitioCurl($ip.":".$puerto);
	      }else if($metodo=="socket"){
                 echo VerDisponibilidadSitio($ip.":".$puerto);
              }else{
                echo json_encode( "Error de busqueda....");
              }
             break;
        case 'POST':
               echo json_encode( "Metodo no implementado!");
              break;
        case 'PUT':
               echo json_encode( "Metodo no implementado!");
            break;
        case 'DELETE':
               echo json_encode( "Metodo no implementado!");
            break;
}

function VerSitioCurl($url){
	$ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);  
        return $output;
}

function VerDisponibilidadSitio($url){
	$direccion = gethostbyname($url);
	$cliente = stream_socket_client("tcp://$direccion", $errno, $errorMessage);
	if ($cliente === false) {
	    throw new UnexpectedValueException("La conexion fallo: $errorMessage");
	}
	
	fwrite($cliente, "GET / HTTP/1.0\r\nHost: www.example.com\r\nAccept: */*\r\n\r\n");
	return stream_get_contents($cliente);
	fclose($cliente);

}
?>