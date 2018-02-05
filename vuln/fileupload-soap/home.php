
<div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
      -->
      <div class="caption-full">
        <h3><a href="#">Carga de Archivos Insegura - SOAP</a></h3>
        
        <p align="justify">
        Como su nombre lo indica, este problema ocurre cuando la aplicación no valida el archivo que el usuario está cargando.
        Un atacante puede cargar archivos maliciosos llamados webshells 
        en el servidor que podrían llevar a un compromiso completo del servidor. 
        </p><br><br>
        <p>Leer más de Carga de Archivos Insegura<br><br>
        <a target="_blank" href="https://www.owasp.org/index.php/Unrestricted_File_Upload">https://www.owasp.org/index.php/Unrestricted_File_Upload</a></p>
        <a target="_blank" href="https://www.owasp.org/index.php/Top_10_2007-Ejecuci%C3%B3n_de_Ficheros_Malintencionados">https://www.owasp.org/index.php/Top_10_2007-Ejecuci%C3%B3n_de_Ficheros_Malintencionados</a></p>
	<a target="_blank" href="http://www.hackplayers.com/2017/03/pentesterlab-write-up-web-for-pentester-1-upload-ldap-xml-attacks.html">http://www.hackplayers.com/2017/03/pentesterlab-write-up-web-for-pentester-1-upload-ldap-xml-attacks.html</a></p>
    </div>
      </div>

      <div class="well">
          <div class="col-lg-12"> 
            <p><h4>Agregar nueva Foto de Cliente</h4><br>
              <form name="name1" method="post" action="" enctype="multipart/form-data">
                 <input type="file" name="uploadfiles"><br /><br />
                 <input type="submit" name="submit" value="Subir Imagen"><br />
              </form>
         </div>

        <div class="col-lg-12"> 
		<?php 
                   
                   if($_POST['submit']){
                     $tmpfile = $_FILES["uploadfiles"]["tmp_name"];  
                     $filename = $_FILES["uploadfiles"]["name"]; 
                     $uploaded_type = $_FILES[ 'uploadfiles' ][ 'type' ];  
                     if($uploaded_type == "image/jpeg" || $uploaded_type == "image/png" ){
                            $handle = fopen($tmpfile, "r");                 
                            $contents = fread($handle, filesize($tmpfile)); 
                            fclose($handle);                                
                            $decodeContent   = base64_encode($contents); 
      
                             require 'lib/nusoap.php';
                             $wsdl="http://".$_SERVER['SERVER_NAME']."/asyrv/vuln/fileupload-soap/server.php?wsdl";
                             $client=new nusoap_client($wsdl);
                             $response=$client->call('upload_file',array($decodeContent,$filename));  
                             if(!empty($response)){
                                 echo "<br /> <h3>Respuesta SOAP:</h3><pre>Ruta Imagen: $response</pre>";
                              }else{
                              echo "<br /> <div class='alert alert-danger'>No se pudo realizar la operación</div>";
                              }
		     }else {
                            echo " <br /><div class='alert alert-danger'>Error al Subir Imagen, Formato Permitido jpg y png!</div>";
		     }

                  }   

             ?>

       </div>

    </div>
    <?php include_once('../../about.html'); ?>


