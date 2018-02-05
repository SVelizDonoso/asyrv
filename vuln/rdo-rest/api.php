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
              $empleado_codigo = $url_amigable['empleado'];
              if($empleadocodigo=="all"){
                ObtenerTodoslosEmpleados();
              }else{
                  ObtenerEmpleados($empleado_codigo);
              }
             break;
        case 'POST':
              echo json_encode( "Metodo POST no implementado!");
              break;
        case 'PUT':
           echo json_encode( "Metodo PUT no implementado!");
            break;
        case 'DELETE':
            echo json_encode( "Metodo no implementado!");
            break;
}


function ObtenerEmpleados($id){
	include("../../config.php");
	$sql = "select * from empleados where id=$id";
	$stmt = $conn1->prepare($sql);
	$stmt->execute();
        $rows = array();
	while($ro = $stmt->fetch(PDO::FETCH_ASSOC)){
		$rows = $ro;
	}
          echo json_encode($rows);
}
function ObtenerTodoslosEmpleados(){
        $id = $id;
	include("../../config.php");
	$sql = "select * from empleados";
        //echo $sql;
	$stmt = $conn1->prepare($sql);
	$stmt->execute();
        $rows = array();
	while($ro = $stmt->fetch(PDO::FETCH_ASSOC)){
		$rows = $ro;
	}
          echo json_encode($rows);
}


