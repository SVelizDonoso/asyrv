

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Falsificaci&oacute;n de Solicitudes del Lado del Servidor (SSRF/XSPA) - SREST</a></h3>
        
        <p align="justify">
        Esta vulnerabilidad tambi&eacute;n conocida como Cross Site Port Attack ocurre cuando un atacante tiene la capacidad de iniciar solicitudes desde el servidor afectado. Un atacante puede enga&ntilde;ar al servidor web que probablemente se ejecute detr&aacute;s de un firewall para que se env&iacute;e solicitudes a s&iacute; mismo para identificar los servicios que se ejecutan en &eacute;l, o incluso puede enviar tr&aacute;fico de enlace a otros servidores.
        </p><br><br>
        <p>Leer m&aacute;s de Falsificaci&oacute;n de solicitudes del lado del servidor <br><br>
	<a target="_blank" href="http://www.elladodelmal.com/2015/04/ssrf-server-side-request-forgery-xspa.html">http://www.elladodelmal.com/2015/04/ssrf-server-side-request-forgery-xspa.html</a></p>
	<a target="_blank" href="http://blog.elevenpaths.com/2015/11/como-funciona-server-side-request.html">http://blog.elevenpaths.com/2015/11/como-funciona-server-side-request.html</a></p>
        <a target="_blank" href="https://docs.google.com/document/d/1v1TkWZtrhzRLy0bYXBcdLUedXGb9njTNIJXa3u9akHM/edit">https://docs.google.com/document/d/1v1TkWZtrhzRLy0bYXBcdLUedXGb9njTNIJXa3u9akHM/edit</a></p>

    </div>

</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>Ingrese un Servidor Remoto.  
                 <div class="form-group"> 
                    <div class="form-group">
                          <select class="form-control" id="sel1" name="sel1">
                          <option value="0">Funcionalidad a Elegir</option>
                          <option value="1">Ver Sitio</option>
                          <option value="2">Disponibilidad Sitio</option>
                          </select>
                          <select class="form-control" id="sel2" name="sel2">
                          <option value="">Sitio A Revisar</option>
                          <option value="www.duoc.cl:80">Douc</option>
                          <option value="www.inacap.cl:80">Inacap</option>
                          <option value="www.aiep.cl:80">AIEP</option>
                          <option value="www.ipp.cl:80">IPP</option>
                          </select>
			<br>

                    <div align="right"> <button class="btn btn-default" type="submit" onclick='VerSitios()'>Ver</button></div>
               </div> 
              <h3 hidden id='titulores'>Respuesta REST: </h3>
              
               
                  
    </div>
      
</div>
<pre id='resultado' hidden></pre> 
<?php include_once('../../about.html'); ?>
<script>

function VerSitios(){

$("#titulores").show();
$("#resultado").show();

 var seleccion = $("#sel1").val();
 var ip_puerto = $("#sel2").val().split(":");
 var direccion = ip_puerto[0];
 var puerto = ip_puerto[1];
 var metodo ="";

 if(seleccion =="1"){
   metodo ="curl";
 }
 if(seleccion =="2"){
   metodo ="socket";
 }
  $("#resultado").html("<b>Espere un momento por Favor......</b>");
  var API = "/asyrv/vuln/ssrf-xspa-rest/api.php/metodo/"+metodo+"/ip/"+direccion+"/puerto/"+puerto+"/";
    $.ajax({url: API, dataType: "text", 
        beforeSend: function(msg){
          $("#resultado").hide(3000);
          $("#resultado").show(3000);
          $("#resultado").hide(3000);
          $("#resultado").show(3000);
         },
        success: function(result){   
        $("#resultado").show();
        $("#resultado").html(result);
      }});
 }

</script>