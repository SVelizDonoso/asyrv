<?php
error_reporting( E_ALL );
function XSSBasico($msj){
  return base64_encode("Hola ".base64_decode($msj). " Bienvenido a ASYRV.");
}

function XSSFiltro1($msj){
   $filtrar = array("<script>","</script>","<iframe>", "etc");
    $filtro = str_replace($filtrar,"",base64_decode($msj));
    return base64_encode("Hola ".$filtro. " Bienvenido a ASYRV.");
}

function XSSFiltro2($msj){
  $filtrar = array("<script>","</script>","<iframe>", "etc");
   $filtro = str_ireplace($filtrar,"",base64_decode($msj));
   return base64_encode("Hola ".$filtro. " Bienvenido a ASYRV.");
}

function XSSFiltro3($pagina){
  $pagina = htmlentities(base64_decode($pagina));
  switch($pagina){
        case "servicios.php":
          return "Bienvenido a el Menu de Servicios.";
        break;
        case "contacto.php":
            return "Bienvenido a el Menu de Contacto."; 
        break;
 
        default:
            return base64_encode("Error al cargar. <a href='$pagina'>Reintente</a>");
        }
}
?>
