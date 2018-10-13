

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Secuencias de Comandos en Sitios Cruzados (XSS) - Reflejados -SOAP</a></h3>
        
        <p align="justify">
        Cross Site Scripting ataca el abuso de la funcionalidad del navegador para enviar scripts maliciosos a la m&aacute;quina del cliente. En otras palabras, este es un ataque del lado del cliente. Los ataques de Cross Site Scripting generalmente se clasifican en dos categor&iacute;as: almacenados y reflejados. En los ataques reflejados, la aplicaci&oacute;n refleja el script malicioso en el navegador. El servidor no almacena nada, solo env&iacute;a de vuelta las entradas de los usuarios, por ejemplo, mensajes de error, resultados de b&uacute;squeda, etc. Dichos ataques hacen campa&ntilde;a a trav&eacute;s de diferentes rutas como correos electr&oacute;nicos, chats o en sitios web de terceros..  
        </p><br><br>
        <p>Leer m&aacute;s de Secuencias de comandos en sitios cruzados (XSS) - Reflejados<br><br>
        <a target="_blank" href="https://backtrackacademy.com/articulo/xss-capturando-cookies-de-sesion">https://backtrackacademy.com/articulo/xss-capturando-cookies-de-sesion</a></p>
	<a target="_blank" href="http://www.reydes.com/d/?q=Cross_Site_Scripting_XSS_Reflejado_en_OWASP_Vicnum">http://www.reydes.com/d/?q=Cross_Site_Scripting_XSS_Reflejado_en_OWASP_Vicnum </a></p>
	<a target="_blank" href="https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)">https://www.owasp.org/index.php/Cross-site_Scripting_(XSS) </a></p>
	<a target="_blank" href="https://www.owasp.org/index.php/Types_of_Cross-Site_Scripting#Reflected_XSS_.28AKA_Non-Persistent_or_Type_II.29">https://www.owasp.org/index.php/Types_of_Cross-Site_Scripting#Reflected_XSS_.28AKA_Non-Persistent_or_Type_II.29 </a></p>

    </div>

</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>Nivel de Dificultad XSS  
            <form method='get' action=''>
                <div class="form-group"> 
                    <div class="form-group">
                          <select class="form-control" id="sel1" name="sel1">
                          <option value="0">--------------------</option>
                          <option value="1"> XSS Basico</option>
                          <option value="2"> XSS Filtro str_replace</option>
                          <option value="3"> XSS Filtro str_ireplace</option>
                          <option value="4"> XSS Filtro htmlentities</option>
                          </select>
                     </div>
                    <input class="form-control" width="50%" placeholder="Mensaje..." name="msj"></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Enviar</button></div>
               </div> 
            </form>

    </div>
      
    <hr><div id="resultado">
<?php
   
	require 'lib/nusoap.php';
	$client=new nusoap_client("http://".$_SERVER['SERVER_NAME']."/asyrv/vuln/refl-xss-soap/metodos.php?wsdl");
         $msj=base64_encode($_GET['msj']);
         $i=$_GET['sel1'];
         	 if ($msj){
                    if ($i == 0) {
                        echo " <div class='alert alert-danger'>Seleccione Dificultad XSS</div>";
                    } elseif ($i == 1) {
			$response=$client->call('XSSBasico',array("msj" => $msj));
                    } elseif ($i == 2) {
			$response=$client->call('XSSFiltro1',array("msj" => $msj));
                    }elseif ($i == 3) {
			$response=$client->call('XSSFiltro2',array("msj" => $msj));
                    }elseif ($i == 4) {
			$response=$client->call('XSSFiltro3',array("pagina" => $msj));
                    }else{echo " <div class='alert alert-danger'>Error Parametro Selecci&oacute;n</div>";}
                  if(!empty($response)){
                       echo " <h3>Respuesta SOAP:</h3><pre>".base64_decode($response)."</pre>";
                   }else{
		       echo " <div class='alert alert-danger'>No se pudo realizar la operaci&oacute;n</div>";
		  }
          }
?>
</div>
<?php include_once('../../about.html'); ?>
