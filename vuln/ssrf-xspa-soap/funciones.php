<?php

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