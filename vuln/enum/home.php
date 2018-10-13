

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Enumeracin de WSDL</a></h3>
        
        <p align="justify">
         La mayora de los servicios SOAP se implementan para procesar solicitudes dadas por un usuario a travs de una aplicacin web. En escenarios comunes, 
         el archivo WSDL no est expuesto al pblico. Sin embargo, si un atacante puede acceder al archivo WSDL de una aplicacin, puede intentar enumerar y buscar los servicios 
	 ocultos utilizados por la aplicacin web.La enumeracin WSDL tiene como objetivo descubrir servicios web no pblicos recuperando su archivo WSDL.
        </p><br><br>
        <p>Leer ms de Enumeracn de WSDL<br><br>
        <a target="_blank" href="https://es.wikipedia.org/wiki/WSDL">https://es.wikipedia.org/wiki/WSDL</a></p>
        <a target="_blank" href="http://www.ws-attacks.org/WSDL_Disclosure">http://www.ws-attacks.org/WSDL_Disclosure</a></p>
        <a target="_blank" href="https://www.soapui.org/security-testing/security-scans/sql-injection.html">https://www.soapui.org/security-testing/security-scans/sql-injection.html</a></p>
    </div>
    
</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>ingrese su Usuario y Clave para Obtener su Token.  
            <form method='post' action=''>
                <div class="form-group"> 
                    <label></label>
                    <input class="form-control" width="50%" placeholder="Ingrese Usuario" name="usuario"></input> <br>
		    <input class="form-control" width="50%" placeholder="Ingrese Clave" name="clave" type="password"></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Obtener</button></div>
               </div> 
            </form>
        </p>
    </div>
 <?php
    //create nusoap client
	require 'lib/nusoap.php';
	$client=new nusoap_client("http://".$_SERVER['SERVER_NAME']."/asyrv/vuln/enum/clientes.php?wsdl");
        //echo $client;
         $user=$_POST['usuario'];
         $clv=$_POST['clave'];

	 if ($user and $clv){
		  $response=$client->call('ObtenerToken',array("usuario" => $user, "clave" => $clv));
                  if(!empty($response)){
		      echo "<div class='alert alert-success'>Su Token es: $response</div>";
	          }else{
		      echo "<div class='alert alert-danger'>Usuario No Registrado!</div>";
		  }
          }
?>
        
    
</div>
<?php include_once('../../about.html'); ?>
