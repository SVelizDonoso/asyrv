<?php
error_reporting(0);
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

function ObtenerBlogs($id){
        include("../../config.php");
	$sql = "select * from blogsec where id=$id";
	$stmt = $conn1->prepare($sql);
	$stmt->execute();
        $rows = array();
	while($ro = $stmt->fetch(PDO::FETCH_ASSOC)){
		$rows = $ro;
	}
          return json_encode($rows);
}

function AgregarBlogs($nom,$desc,$ulr,$img){
        include("../../config.php");
	$sql = "INSERT INTO blogsec (nombre,desc,url,img) VALUES ('$nom', '$desc','$url','$img');";
	$stmt = $conn1->prepare($sql);
	$stmt->execute();
        echo json_encode("Nueva Entrada Lista!");
        
}

function ActualizarBlogs($id,$nom,$desc,$ulr,$img){
        include("../../config.php");
	$sql = "UPDATE blogsec (nombre,desc,url,img) SET nombre='$nom', desc='$desc',url='$url',img='$img') WHERE id=$id;";
	$stmt = $conn1->prepare($sql);
	$stmt->execute();
        echo json_encode("Nueva Entrada Actualizada!");
        
}

function EliminarBlogs($id){
        include("../../config.php");
	$sql = "DELETE FROM blogsec WHERE id=$id;";
	$stmt = $conn1->prepare($sql);
	$stmt->execute();
        echo json_encode("Entrada Eliminada!");
        
}

switch ($method) {
        case 'GET':
             $result = null;
             $url_amigable = amigable(); 
             $id = $url_amigable['blogs'];
             echo ObtenerBlogs($id);
             break;
        case 'POST':
            $arguments = $_POST;
            $nom =  $arguments['nom'];
            $desc =  $arguments['desc'];
            $url =  $arguments['url'];
            $img =  $arguments['img'];
            AgregarBlogs($nom,$desc,$ulr,$img);
            break;
        case 'PUT':
            parse_str(file_get_contents('php://input'), $arguments);
            $url_amigable = amigable(); 
            $id = $url_amigable['blogs'];
            $nom =  $arguments['nom'];
            $desc =  $arguments['desc'];
            $url =  $arguments['url'];
            $img =  $arguments['img'];
            ActualizarBlogs($id,$nom,$desc,$ulr,$img);
            break;
        case 'DELETE':
            $url_amigable = amigable(); 
            $id = $url_amigable['blogs'];
	    EliminarBlogs($id);
            break;
}
