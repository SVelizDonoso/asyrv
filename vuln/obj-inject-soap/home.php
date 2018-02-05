 <div class="thumbnail">
    <div class="caption-full">
        <h3><a href="#">Inyección de Objetos PHP - SOAP</a></h3>
        
        <p align="justify">
		Aunque PHP Object Injection no es una vulnerabilidad muy común y también difícil de explotar, se considera que es una vulnerabilidad realmente peligrosa, ya que podría 
		llevar a un atacante a realizar diferentes tipos de ataques maliciosos, como Inyección de código, Inyección SQL, Rutas transversales y Denegación de servicio,
	        según el contexto de la aplicación. La vulnerabilidad de inyección de objetos PHP ocurre cuando las entradas suministradas por el usuario no se sanitizan adecuadamente 
		antes de pasar a la función PHP unserialize () en el servidor. Dado que PHP permite la serialización de objetos, los atacantes podrían pasar cadenas seriales ad-hoc 
		a las llamadas unserialize() vulnerables, lo que da como resultado una inyección arbitraria de objetos PHP en el alcance de la aplicación.<br><br>
        </p>         
	<p>Leer más de Inyección de objetos PHP<br><br><div id="posision"></div>
	<strong><a target="_blank"href="http://www.elladodelmal.com/2014/11/ataques-de-php-object-injection-en.html">http://www.elladodelmal.com/2014/11/ataques-de-php-object-injection-en.html</a></p></strong>
        <strong><a target="_blank"href="http://blog.alguien.site/2013/08/php-object-injection.html">http://blog.alguien.site/2013/08/php-object-injection.html</a></p></strong>
	<strong><a target="_blank"href="https://www.owasp.org/index.php/PHP_Object_Injection">https://www.owasp.org/index.php/PHP_Object_Injection</a></p></strong>

        </div>

    </div>
    <div class="well">
    <div class="col-lg-6"> 
        <p>Enviar Mensaje al Back-End: 
            <form method='GET' action='#posicion'>
                <div class="form-group"> 
                    <label></label>
                    <input class="form-control" width="50%"  name="msj" id="msj" value='a:2:{i:0;s:5:"ASYRV";i:1;s:17:"Hackeando con PHP";}' ></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Enviar</button></div>
               </div> 
            </form>
        </p>
    </div>
               

<div id="resultado">
<?php
    //create nusoap client
	require 'lib/nusoap.php';
	$client=new nusoap_client("http://".$_SERVER['SERVER_NAME']."/asyrv/vuln/obj-inject-soap/service.php?wsdl");
        //echo $client;
         $msj=$_GET['msj'];
	 if ($msj){
		  $response=$client->call('DeserializeObjeto',array("serializado" => $msj));
                  if(!empty($response)){
                    echo "<div class='alert alert-success'>$response</div>";
                   }else{
		      echo "<div class='alert alert-danger'>Respuesta Fallida!</div>";
		  }
          }
?>

</div>

<?php include_once('../../about.html'); ?>

