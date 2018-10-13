<?php


require_once('lib/nusoap.php'); 


   $server = new soap_server();

   $server->configureWSDL('Subir Foto Cliente', 'urn:uploadwsdl');

    $server->register('upload_file',                                
        array('file' => 'xsd:string','location' => 'xsd:string'),   
        array('return' => 'xsd:string'),                            
        'urn:uploadwsdl',                                          
        'urn:uploadwsdl#upload_file',                             
        'rpc',                                                   
        'encoded',                                               
        'Subir imagen de clientes'                         
    );


    function upload_file($encoded,$name) {
        $location = "upload/".$name;                           
        //$current = file_get_contents($location);                
        $current = base64_decode($encoded);                 
        file_put_contents($location, $current);         
        if($name!=""){
            return "/asyrv/vuln/fileupload-soap/".$location;                              
        }
        else{
            return "";
        }
    }

    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
    //$server->service($HTTP_RAW_POST_DATA); 
    $server->service(file_get_contents("php://input"));

?>
