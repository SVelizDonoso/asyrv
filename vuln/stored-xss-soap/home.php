

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Secuencias de Comandos en Sitios Cruzados (XSS) - SOAP</a></h3>
        
        <p align="justify">
	Los ataques de Cross Site Scripting Stored se producen cuando la aplicación no valida las entradas del usuario contra scripts maliciosos, y ocurre cuando estos scripts se almacenan 
	en la base de datos. La víctima se infecta cuando visita una página web que carga estos scripts maliciosos desde la base de datos. Por ejemplo, foro de mensajes, página de 
	comentarios, registros de visitantes, página de perfil, etc.      </p><br><br>
        <p>Leer más de Secuencias de comandos en sitios cruzados (XSS) - Almacenado<br><br>
        <a target="_blank" href="https://www.welivesecurity.com/la-es/2013/12/04/stored-xss-impacto-sobre-usuario/">https://www.welivesecurity.com/la-es/2013/12/04/stored-xss-impacto-sobre-usuario/</a></p>
	<a target="_blank" href="https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)#Stored_XSS_Attacks">https://donttouchmy.net/introduccion-ataques-xss/</a></p>
	<a target="_blank" href="https://donttouchmy.net/introduccion-ataques-xss/">https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)#Stored_XSS_Attacks</a></p>

    </div>


</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>  <h4>Publica tus comentarios </h4>
            <form method='post' action=''>
                <div class="form-group"> 
                    <label></label>
                    <b>Ingresa tu Nombre</b>
                    <input class="form-control" placeholder="Anonymous" name="name"></input> <br>
                    <b>Ingresa tu comentario</b>
                    <textarea class="form-control" name="msg"> </textarea> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Enviar Publicación</button></div>
               </div> 
            </form>
        </p>
    </div>
        <hr>
        <?php 
        include_once('../../config.php');

        $user = isset($_POST['name']) ? $_POST['name'] : '';
        $comment = isset($_POST['msg']) ? $_POST['msg'] : '';
        if($comment){
            if(!$user){
                $user = "Anonymous";
            }
          require 'lib/nusoap.php';
	  $client=new nusoap_client("http://".$_SERVER['SERVER_NAME']."/asyrv/vuln/stored-xss-soap/metodo.php?wsdl");
          $response=$client->call('GuardarComentario',array('usr' => base64_encode($user),'msj' => base64_encode($comment),'date' => base64_encode($today)));
                  if(!empty($response)){
                     echo "".$response;
	          }else{
		      echo "";
		  }

        }

        $stmt = $conn1->prepare("select usuario,com,fecha from comentarios"); 
        $stmt->execute();
        while($rows = $stmt->fetch(PDO::FETCH_NUM)){
            echo "<div class=\"row\">";
                echo "<div class=\"col-md-12\">";
                echo "<span class=\"glyphicon glyphicon-star\"></span> &nbsp;";
                    echo ucfirst($rows[0]);
                echo "<span class=\"pull-right\">".$rows[2]."</span>";
                echo "<p>".$rows[1]."</p>";
                echo "</div>";
                echo "</div><hr>";
        } 

        ?>

        <hr>

        

</div>
<?php include_once('../../about.html'); ?>