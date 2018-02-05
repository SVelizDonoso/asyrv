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
            echo json_encode( "Metodo no implementado!");
             break;
        case 'POST':
              $url_amigable = amigable(); 
              $upload = $url_amigable['upload'];
               if($upload =="imagen"){
                   $tmpfile = $_FILES["uploadfiles"]["tmp_name"];  
                   $filename = $_FILES["uploadfiles"]["name"]; 
                   $uploaded_type = $_FILES[ 'uploadfiles' ][ 'type' ];  
                   if($uploaded_type == "image/jpeg" || $uploaded_type == "image/png" ){
                        $handle = fopen($tmpfile, "r");                 
                        $contents = fread($handle, filesize($tmpfile)); 
                        fclose($handle);  
                        echo upload_file($contents,$filename);                              
                        
                   }else {
                         echo " Error al Subir Imagen, Formato Permitido jpg y png!";
                   }
              }else{ echo "No tienes permitido subir archivos al servidor!";}
            break;
        case 'PUT':
           echo json_encode( "Metodo no implementado!");
            break;
        case 'DELETE':
            echo json_encode( "Metodo no implementado!");
            break;
}

function upload_file($current,$name) {
        $location = "upload/".$name;                                                          
        file_put_contents($location, $current);         
        if($name!=""){
            return "/asyrv/vuln/fileupload-rest/".$location;                              
        }
        else{
            return "Error al copiar imagen.";
        }
}

