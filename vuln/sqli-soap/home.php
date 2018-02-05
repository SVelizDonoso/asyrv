 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Inyección SQL Basada en Error - SOAP</a></h3>
        
        <p align="justify">
	Las inyecciones de SQL siguen siendo una de las formas más comunes de atacar los servicios web, aunque los riesgos son enormes y es muy fácil de evitar. 
        es una técnica de ataque mediante la cual un usuario malintencionado puede ejecutar código SQL con el privilegio en el que se configura la aplicación. 
        Las inyecciones de SQL basadas en errores son fáciles de detectar y explotar aún más. Responde a la solicitud del usuario con mensajes de error de back-end detallados. 
        Estos mensajes de error se generan debido a solicitudes de usuarios especialmente diseñadas, de modo que se rompe la sintaxis de consulta SQL utilizada en la aplicación. 
        </p><br><br><div id="posision"></div>
        <p>Leer más de Inyección SQL Basada en Error<br><br>
        <a target="_blank"" href="https://www.owasp.org/index.php/Inyecci%C3%B3n_SQL"> https://www.owasp.org/index.php/Inyecci%C3%B3n_SQL</a></p>
        <a target="_blank"" href="https://backtrackacademy.com/articulo/inyeccion-sql-definicion-y-ejemplos"> https://backtrackacademy.com/articulo/inyeccion-sql-definicion-y-ejemplos</a></p>
    </div>
    
</div>

<div class="well">
    <div class="col-lg-6"> 
        
        <h3>Ver Personajes de Futurama :</h3><br>
         <form method='post' action='#posision' class="form-inline">         
          <div class="form-group">
 		 <select class="form-control" id="sel1" name="futurama">
  		  <option value='0'>Elija su Personaje</option>
  		  <option value='1'>J. Fry</option>
  		  <option value='2'>Leela</option>
  		  <option value='3'>Bender</option>
                  <option value='4'>Zoidberg</option>
 	 	</select>
                <button class="btn btn-default" type="submit">Buscar Personaje</button>
	 </div>
        </form>
        </p>
    </div>

<div id="personaje">

<?php
    //create nusoap client
	require 'lib/nusoap.php';
	$client=new nusoap_client("http://".$_SERVER['SERVER_NAME']."/asyrv/vuln/sqli-soap/personajes.php?wsdl");
        //echo $client;
         $id=$_POST['futurama'];
         
	 if ($id){
		  $response=$client->call('ObtenerPersonaje',array("id" => $id));
                  if(!empty($response)){
                     $obj =json_decode($response);
                     echo "<table class='table'>";
                     echo "<tr class='table-light'>";
		     echo "<td rowspan='2'><img src='".utf8_decode($obj->{'url'})."' class='img-circle'></td><td><b>Nombre:</b> </td><td>".utf8_decode($obj->{'nombre'})."</td>";
                     echo "</tr>";
		     echo "<tr class='table-light'>";
		     echo "<td><b>Descripción:</b></td><td>".utf8_decode($obj->{'descripcion'})."</td>";
		     echo "</tr>";
                     echo "</table>";
	          }else{
		      echo "Busqueda sin Fallida!";
		  }
          }
?>
</div>
    
</div>

<?php include_once('../../about.html'); ?>