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

$url_amigable = amigable(); 
$com = $url_amigable['comentarios'];
switch ($method) {
        case 'GET': 
             // if($com =="all"){ 
                   VerComentarios();
             //  }
             break;
        case 'POST':
              if($com =="add"){
                  $user = $_POST['name'];
                  $msj = $_POST['msg'];
                  if($user == null){ $user = "Anonymous";}  
                  GuardarComentario($user,$msj);
              }
              break;
        case 'PUT':
           echo json_encode( "Metodo no implementado!");
            break;
        case 'DELETE':
            echo json_encode( "Metodo no implementado!");
            break;
}



function GuardarComentario($usr,$msj){
	 include("../../config.php");
         $today = date("d M Y");
         $sql="insert into comentarios (usuario,com,fecha) values(:nom,:com,:fecha)";
         $stmt = $conn1->prepare($sql);
         $stmt->execute(array('nom' => $usr,'com' => $msj,'fecha' => $today));
         echo "Listo!";
}

function VerComentarios(){
        include_once('../../config.php');
        $sql = "select usuario,com,fecha from comentarios"; 
        $stmt = $conn1->prepare($sql);
	$stmt->execute();
	while($rows = $stmt->fetch(PDO::FETCH_NUM)){
            echo "<div class='row'>";
                echo "<div class='col-md-12'>";
                echo "<span class='glyphicon glyphicon-star'></span> ";
                    echo ucfirst($rows[0]);
                echo "<span class='pull-right'>".$rows[2]."</span>";
                echo "<p>".$rows[1]."</p>";
                echo "</div>";
                echo "</div>";
        } 
 
}



