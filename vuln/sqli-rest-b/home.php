

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Inyección SQL a Ciegas - REST</a></h3>
        
        <p align="justify">
	Las inyecciones SQL a ciegas son difíciles de detectar y explotar ya que el Servicio WEB está diseñada para manejar errores y excepciones inteligentemente. Sin embargo, 
        la vulnerabilidad aún existe. Las inyecciones SQL a ciegas son casi idénticas a las inyecciones de SQL basadas en errores o normales. La diferencia aquí es que el atacante no verá ningún mensaje de error de back-end en este caso.
         Dado que no se proporcionan errores en las respuestas web, si no se cuenta con el entranamiento adecuado, resulta difícil para un atacante explotar esta vulnerabilidad. 
        </p><br><br>
        <p>Leer más de Inyección SQL Basada en Error<br><br>
        <a target="_blank"" href="https://www.owasp.org/index.php/Inyecci%C3%B3n_SQL"> https://www.owasp.org/index.php/Inyecci%C3%B3n_SQL</a></p>
        <a target="_blank"" href="https://backtrackacademy.com/articulo/inyeccion-sql-definicion-y-ejemplos"> https://backtrackacademy.com/articulo/inyeccion-sql-definicion-y-ejemplos</a></p>
    </div>
    
</div>

<div class="well">
    <div class="col-lg-7"> 
       
        <h3>Buscar Blogs de Seguridad TI :</h3><br>
         <form method='get' action='#blogs' class="form-inline" onSubmit="Restblogs();return false;">         
          <div class="form-group">
 		 <select class="form-control" id="sel1" name="bsec">
  		  <option value='0'>Blogs de Seguridad TI</option>
  		        <?php
                        include("../../config.php");
		        $sql = "select id, nombre from blogsec";
	                $stmt = $conn1->prepare($sql);
	                $stmt->execute();
	                while($ro = $stmt->fetch(PDO::FETCH_ASSOC)){
		            echo "<option value='".$ro['id']."'>".utf8_decode($ro['nombre'])."</option>";
	                }
                        ?>
 	 	</select>
                <button class="btn btn-default" type="submit">Buscar</button>
	 </div>
        </form>
        </p>
    </div>
<br><br>
   <div id="blogs"></div>
    
</div>

<script>
function Restblogs() {
  var API = "/asyrv/vuln/sqli-rest-b/api.php/blogs/"+$("#sel1").val();
  var tabla ="";
    $.ajax({url: API, dataType: "text", success: function(result){
        var myObj = JSON.parse(result);
        tabla += "<table class='table'>";
        tabla +=  "<tr class='table-light'>";
	tabla +=  "<td rowspan='3'><img src='"+myObj.img+"' class='img-thumbnail'></td><td><b>Nombre:</b> </td><td>"+myObj.nombre+"</td>";
        tabla +=  "</tr>";
	tabla +=  "<tr class='table-light'>";
	tabla +=  "<td><b>Descripción:</b></td><td>"+myObj.desc+"</td>";
	tabla +=  "</tr>";
        tabla +=  "<tr class='table-light'>";
	tabla +=  "<td><b>URL:</b></td><td>"+myObj.url+"</td>";
	tabla +=  "</tr>";
        tabla +=  "</table>";


        $("#blogs").html(tabla);
    }});
 }
</script>




















<?php include_once('../../about.html'); ?>