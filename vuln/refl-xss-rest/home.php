
 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Secuencias de Comandos en Sitios Cruzados (XSS) - Reflejados -REST</a></h3>
        
        <p align="justify">
        Cross Site Scripting ataca el abuso de la funcionalidad del navegador para enviar scripts maliciosos a la mquina del cliente. En otras palabras, este es un ataque del lado del cliente. Los ataques de Cross Site Scripting generalmente se clasifican en dos categoras: almacenados y reflejados. En los ataques reflejados, la aplicacin refleja el script malicioso en el navegador. El servidor no almacena nada, solo enva de vuelta las entradas de los usuarios, por ejemplo, mensajes de error, resultados de bsqueda, etc. Dichos ataques hacen campaa a travs de diferentes rutas como correos electrnicos, chats o en sitios web de terceros..  
        </p><br><br>
        <p>Leer ms de Secuencias de comandos en sitios cruzados (XSS) - Reflejados<br><br>
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
                    <input class="form-control" width="50%" placeholder="Mensaje..." name="msj" id="msj"></input> <br>
                    <div align="right"> <button class="btn btn-default" type="button" onclick='EnviarMensaje()'>Enviar</button></div>
               </div> 
            </form>

    </div>
      
    <hr><div id="resultado">
</div>
<script>
function EnviarMensaje() {
var opcion = parseInt($("#sel1").val());
var t=0;
switch (opcion) {
    case 0:
       alert("Por favor elija una opcion de dificultad!");
         return;
        break;
    case 1:
        t=1;
        break;
    case 2:
        t=2;
        break;
    case 3:
        t=3;
        break;
    case 4:
        t=4;
        break;
}


  var API = "/asyrv/vuln/refl-xss-rest/api.php/xss/"+t;
  var msj = $("#msj").val();
    $.ajax({url: API,type: "POST",data:"mensaje="+msj, dataType: "text", success: function(result){
        var myObj = JSON.parse(result);
        
        $("#resultado").html("<h3>Respuesta REST:</h3><pre>"+myObj+"</pre>");
    }});
 }
</script>

<?php include_once('../../about.html'); ?>
