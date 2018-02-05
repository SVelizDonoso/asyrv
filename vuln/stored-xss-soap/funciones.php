
<?php

function GuardarComentario($usr,$msj,$date){
	include("../../config.php");
        $today = date("d M Y");
         $sql="insert into comentarios (usuario,com,fecha) values(:nom,:com,:fecha)";
         $stmt = $conn1->prepare($sql);
         $stmt->execute(array('nom' => base64_decode($usr),'com' => base64_decode($msj),'fecha' => base64_decode($date)));
         return "Listo!";
} 

?>
