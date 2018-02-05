 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Inyección de Comando OS - REST</a></h3>
        
        <p align="justify">
        Algunas aplicaciones usan comandos del sistema operativo para ejecutar ciertas funcionalidades mediante el uso de malas prácticas de codificación.
	digamos, por ejemplo, el uso de funciones como system (), shell_exec (), etc. Esto permite a un usuario inyectar comandos arbitrarios que se ejecutarán en el host remoto con
        el privilegio del usuario del servidor web.
	Un atacante puede engañar al intérprete para que ejecute los comandos que desee en el sistema.</p><br><br>
        <p>Leer más de Inyección de comando OS <br><br>
        <a target="_blank" href="https://www.owasp.org/index.php/Inyecci%C3%B3n_de_C%C3%B3digo">https://www.owasp.org/index.php/Inyecci%C3%B3n_de_C%C3%B3digo </a></p>
        <a target="_blank"https://www.welivesecurity.com/la-es/2013/04/30/inyeccioncomandos-servidores-web/">https://www.welivesecurity.com/la-es/2013/04/30/inyeccioncomandos-servidores-web/ </a></p>
    </div>
    
</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>Comprobar DNSLookUp.  
            <form method='get' action='' onSubmit="RestDNSLookUp();return false;">
                <div class="form-group"> 
                    <label></label>
                    <input class="form-control" width="50%" placeholder="Ingrese IP/HOSTNAME" name="target" id="target"></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Enviar</button></div>
               </div> 
            </form>
        </p>
    </div>
    
</div>
<div id="resultado"></div>
<?php include_once('../../about.html'); ?>

<script>
function RestDNSLookUp() {
  var API = "/asyrv/vuln/inyso-rest/api.php/dnslookup/"+$("#target").val();
  var tabla ="";
    $.ajax({url: API, dataType: "text", success: function(result){
        var myObj = JSON.parse(result);
        
        $("#resultado").html("<h3>Respuesta REST:</h3><pre>"+myObj+"</pre>");
    }});
 }
</script>
