

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Inyección SQL Basada en Error - REST</a></h3>
        
        <p align="justify">
	Las inyecciones de SQL siguen siendo una de las formas más comunes de atacar los servicios web, aunque los riesgos son enormes y es muy fácil de evitar. 
        es una técnica de ataque mediante la cual un usuario malintencionado puede ejecutar código SQL con el privilegio en el que se configura la aplicación. 
        Las inyecciones de SQL basadas en errores son fáciles de detectar y explotar aún más. Responde a la solicitud del usuario con mensajes de error de back-end detallados. 
        Estos mensajes de error se generan debido a solicitudes de usuarios especialmente diseñadas, de modo que se rompe la sintaxis de consulta SQL utilizada en la aplicación. 
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
  var API = "/asyrv/vuln/sqli-rest/api.php/blogs/"+$("#sel1").val();
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