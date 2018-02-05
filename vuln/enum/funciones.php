<?php


function ObtenerToken($usuario,$clave){
	include("../../config.php");
	$ActiveUser = '';
	$sql = "select * from clientes where nombre=:username and clave=:password";
	$stmt = $conn1->prepare($sql);
	$stmt->bindParam(':username',$usuario);
        $stmt->bindParam(':password',$clave);
	$stmt->execute();
	while($rows = $stmt->fetch(PDO::FETCH_NUM)){
		$ActiveUser = $rows[0];
	}
        if(!empty($ActiveUser)){
		$ActiveUser =md5(time());
	}else{
                $ActiveUser ="";
        }
   return $ActiveUser;
}

function BuscarCliente($id){
	include("../../config.php");
	$cliente = '';
	$sql = "select * from clientes where idclientes=:id";
	$stmt = $conn1->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
        $rows = array();
	while($ro = $stmt->fetch(PDO::FETCH_ASSOC)){
		$rows = $ro;
	}
          return json_encode($rows);
}

function AgregarCliente($nombre,$clave,$direccion,$comuna,$telefono){
	include("../../config.php");
	$msj = 'Cliente creado con exito!';
	$sql = "INSERT INTO clientes(nombre,clave,direccion,comuna,telefono) VALUES(:nom,:cl,:dir,:com,:tel)";
	//echo $sql;
	$stmt = $conn1->prepare($sql);
	$stmt->bindParam(':nom',$nombre);
	$stmt->bindParam(':cl',$clave);
	$stmt->bindParam(':dir',$direccion);
	$stmt->bindParam(':com',$comuna);
	$stmt->bindParam(':tel',$telefono);
	$stmt->execute();
        return $msj;
}


function EliminarCliente($id){
	include("../../config.php");
	$msj = 'Cliente Eliminado con exito!';
	$sql = "delete from clientes where idclientes=:id";
	$stmt = $conn1->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
        return $msj;
}







?>