 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Inyeccin de Comando OS - SOAP</a></h3>
        
        <p align="justify">
        Algunas aplicaciones usan comandos del sistema operativo para ejecutar ciertas funcionalidades mediante el uso de malas prcticas de codificacin.
	digamos, por ejemplo, el uso de funciones como system (), shell_exec (), etc. Esto permite a un usuario inyectar comandos arbitrarios que se ejecutarn en el host remoto con
       el privilegio del usuario del servidor web.
	Un atacante puede engaar al intrprete para que ejecute los comandos que desee en el sistema.</p><br><br>
        <p>Leer ms de Inyeccin de comando OS <br><br><div id="posision"></div>
        <a target="_blank" href="https://www.owasp.org/index.php/Inyecci%C3%B3n_de_C%C3%B3digo">https://www.owasp.org/index.php/Inyecci%C3%B3n_de_C%C3%B3digo </a></p>
        <a target="_blank"https://www.welivesecurity.com/la-es/2013/04/30/inyeccioncomandos-servidores-web/">https://www.welivesecurity.com/la-es/2013/04/30/inyeccioncomandos-servidores-web/ </a></p>
    </div>
    
</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>ingrese la IP o nombre del host para comprobar disponibilidad.  
            <form method='get' action='#posicion'>
                <div class="form-group"> 
                    <label></label>
                    <input class="form-control" width="50%" placeholder="Ingrese IP/HOSTNAME" name="target"></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Enviar</button></div>
               </div> 
            </form>
        </p>
    </div>

    

<div id="resultado">
<?php
    //create nusoap client
	require 'lib/nusoap.php';
	$client=new nusoap_client("http://".$_SERVER['SERVER_NAME']."/asyrv/vuln/inyso-soap/comandos.php?wsdl");
         $target=$_GET['target'];
	 if ($target){
		  $response=$client->call('ObtenerDisponibilidadPing',array("ip" => $target));
                  if(!empty($response)){
                       echo " <h3>Respuesta SOAP:</h3><pre>$response</pre>";
                   }else{
		       echo " <div class='alert alert-danger'>No se pudo realizar la operacin</div>";
		  }
          }
?>
</div>
</div>
<?php include_once('../../about.html'); ?>