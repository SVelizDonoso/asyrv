<?php


function ObtenerPersonaje($id){
	include("../../config.php");
	$cliente = '';
	$sql = "select * from futurama where id=$id";
        //echo $sql;
	$stmt = $conn1->prepare($sql);
	$stmt->execute();
        $rows = array();
	while($ro = $stmt->fetch(PDO::FETCH_ASSOC)){
		$rows = $ro;
	}
          return json_encode($rows);
}


function EliminarPersonaje($id){
	include("../../config.php");
	$msj = 'Cliente Eliminado con exito!';
	$sql = "delete from futurama where id=$id";
	$stmt = $conn1->prepare($sql);
	$stmt->execute();
        return $msj;
}







