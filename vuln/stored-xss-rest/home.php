

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Secuencias de Comandos en Sitios Cruzados (XSS) - REST</a></h3>
        
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
            
                <div class="form-group"> 
                    <label></label>
                    <b>Ingresa tu Nombre</b>
                    <input class="form-control" placeholder="Anonymous" name="name" id="name"></input> <br>
                    <b>Ingresa tu comentario</b>
                    <textarea class="form-control" name="msg" id="msg"> </textarea> <br>
                    <div align="right"> <button class="btn btn-default" type="button" onclick='AddComentarios()'>Enviar Publicación</button></div>
               </div> <br><div id='backend'></div>

            
        </p>
    </div>
        <div id='todos' ></div>

        

</div>
<?php include_once('../../about.html'); ?>

<script>
$( document ).ready(function() {
    console.log( "ready!" );
    VerTodosLosComentarios();
});


function VerTodosLosComentarios(){
  var API = "/asyrv/vuln/stored-xss-rest/api.php/comentarios/all";
    $.ajax({url: API, dataType: "text", success: function(result){    
        $("#todos").html(result);
        }});
 }

function AddComentarios(){
   var usr = $("#name").val();
   var com = $("#msg").val();
   var API = "/asyrv/vuln/stored-xss-rest/api.php/comentarios/add";

    $.ajax({url: API,type:"POST",data:"name="+usr+"&msg="+com+"", dataType: "text", success: function(result){    
        $("#backend").html(result);
        VerTodosLosComentarios();
    }});
 return false;
 }
</script>
