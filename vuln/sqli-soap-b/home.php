 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Inyección SQL Basada a Ciegas - SOAP</a></h3>
        
        <p align="justify">
	Las inyecciones SQL a ciegas son difíciles de detectar y explotar ya que el Servicio WEB está diseñada para manejar errores y excepciones inteligentemente. 
        Sin embargo, la vulnerabilidad aún existe. Las inyecciones SQL a ciegas son casi idénticas a las inyecciones de SQL basadas en errores o normales. 
        La diferencia aquí es que el atacante no verá ningún mensaje de error de back-end en este caso. Dado que no se proporcionan errores en las respuestas web, 
        si no se cuenta con el entranamiento adecuado, resulta difícil para un atacante explotar esta vulnerabilidad.</p><br><br>
        <p>Leer más de Inyección SQL Basada a Ciegas - SOAP<br><br>
        <a target="_blank" href="https://www.owasp.org/index.php/Inyecci%C3%B3n_SQL_Ciega"> https://www.owasp.org/index.php/Inyecci%C3%B3n_SQL_Ciega</a></p>
        <a target="_blank" href="http://www.elladodelmal.com/2007/06/blind-sql-injection-i-de-en-mysql.html"> http://www.elladodelmal.com/2007/06/blind-sql-injection-i-de-en-mysql.html</a></p>
        <a target="_blank" href="http://www.securitybydefault.com/2014/05/blind-sqli-cuando-la-inyeccion-no.html"> http://www.securitybydefault.com/2014/05/blind-sqli-cuando-la-inyeccion-no.html</a></p>
    </div>
    
</div>

<div class="well">
    <div class="col-lg-6"> 
        
        <h3>Ver Personajes de Futurama :</h3><br>
         <form method='post' action='#posicion' class="form-inline">         
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
<br><br>
<div id="personaje">
<div id="posision"></div>
<?php
    //create nusoap client
	require 'lib/nusoap.php';
	$client=new nusoap_client("http://".$_SERVER['SERVER_NAME']."/asyrv/vuln/sqli-soap-b/personajes.php?wsdl");
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