

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Falsificacin de Solicitudes del Lado del Servidor (SSRF/XSPA) - SOAP</a></h3>
        
        <p align="justify">
        Esta vulnerabilidad tambin conocida como Cross Site Port Attack ocurre cuando un atacante tiene la capacidad de iniciar solicitudes desde el servidor afectado. Un atacante puede engaar al servidor web que probablemente se ejecute detrs de un firewall para que se enve solicitudes a s mismo para identificar los servicios que se ejecutan en l, o incluso puede enviar trfico de enlace a otros servidores.
        </p><br><br>
        <p>Leer ms de Falsificacin de solicitudes del lado del servidor <br><br>
	<a target="_blank" href="http://www.elladodelmal.com/2015/04/ssrf-server-side-request-forgery-xspa.html">http://www.elladodelmal.com/2015/04/ssrf-server-side-request-forgery-xspa.html</a></p>
	<a target="_blank" href="http://blog.elevenpaths.com/2015/11/como-funciona-server-side-request.html">http://blog.elevenpaths.com/2015/11/como-funciona-server-side-request.html</a></p>
        <a target="_blank" href="https://docs.google.com/document/d/1v1TkWZtrhzRLy0bYXBcdLUedXGb9njTNIJXa3u9akHM/edit">https://docs.google.com/document/d/1v1TkWZtrhzRLy0bYXBcdLUedXGb9njTNIJXa3u9akHM/edit</a></p>

    </div>

</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>Ingrese un Servidor Remoto.  
            <form method='GET' action=''>
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

                    <div align="right"> <button class="btn btn-default" type="submit">Ver</button></div>
               </div> 
            </form>
            <?php
               require 'lib/nusoap.php';
	       $client=new nusoap_client("http://".$_SERVER['SERVER_NAME']."/asyrv/vuln/ssrf-xspa-soap/metodo.php?wsdl");
               $i = $_GET['sel1'];
               $s = $_GET['sel2']; 
                if($i and $s){

                    if ($i == 0){
                        echo " <div class='alert alert-danger'>Seleccione una Funcionalidad.</div>";
                    } elseif ($i == 1) {
			$response=$client->call('VerSitioCurl',array("url" => $s));
                    } elseif ($i == 2) {
			$response=$client->call('VerDisponibilidadSitio',array("url" => $s));
                    }else{
			echo "Error en la Funcionalidad Elegida.";
                    }
                 echo $response;

                }

            ?>
        </p>
    </div>
      
    <hr>

</div>
<?php include_once('../../about.html'); ?>