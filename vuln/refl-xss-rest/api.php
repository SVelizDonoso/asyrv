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
              $xss = $url_amigable['xss'];
              $msj = $_POST['mensaje'];
              if($xss==1){
		echo json_encode( XSSBasico($msj));
              }else if($xss==2){
                echo json_encode( XSSFiltro1($msj));
              }else if($xss==3){
                echo json_encode( XSSFiltro2($msj));
              }else if($xss==4){
                echo json_encode( XSSFiltro3($msj));
              }else{
                echo json_encode( "Error de busqueda....");
              }
              break;
        case 'PUT':
           echo json_encode( "Metodo no implementado!");
            break;
        case 'DELETE':
            echo json_encode( "Metodo no implementado!");
            break;
}


function XSSBasico($msj){
  return "Hola ".$msj. " Bienvenido a ASYRV.";
}

function XSSFiltro1($msj){
   $filtrar = array("<script>","</script>","<iframe>");
    $filtro = str_replace($filtrar,"",$msj);
    return "Hola ".$filtro. " Bienvenido a ASYRV.";
}

function XSSFiltro2($msj){
  $filtrar = array("<script>","</script>","<iframe>");
   $filtro = str_ireplace($filtrar,"",$msj);
   return "Hola ".$filtro. " Bienvenido a ASYRV.";
}

function XSSFiltro3($pagina){
  $pagina = htmlentities($pagina);
  switch($pagina){
        case "servicios.php":
          return "Bienvenido a el Menu de Servicios.";
        break;
        case "contacto.php":
            return "Bienvenido a el Menu de Contacto."; 
        break;
 
        default:
            return "Error al cargar. <a href='$pagina'>Reintente</a>";
        }
}
?>
