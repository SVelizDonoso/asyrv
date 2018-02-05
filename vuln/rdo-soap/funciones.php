<?php


function ObtenerEmpleados($id){
        $id = base64_decode($id);
	include("../../config.php");
	$sql = "select * from empleados where id=$id";
        //echo $sql;
	$stmt = $conn1->prepare($sql);
	$stmt->execute();
        $rows = array();
	while($ro = $stmt->fetch(PDO::FETCH_ASSOC)){
		$rows = $ro;
	}
          return json_encode($rows);
}
