

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Inyeccin XXE</a></h3>
        
        <p align="justify">
        Muchas aplicaciones web y mviles se basan en la comunicacin de servicios web para la interaccin cliente-servidor. Un ataque XML de entidad externa es un tipo de ataque contra una aplicacin que analiza entradas XML.
        Un ataque XXE ocurre cuando la entrada XML que contiene una referencia a una entidad externa es procesada por un analizador XML dbilmente configurado. Este ataque puede conducir a la divulgacin de datos confidenciales, denegacin de servicio, escaneo de puertos desde la perspectiva de la mquina donde se encuentra el analizador, y otros impactos del sistema.
        </p><br><br>
        <p>Leer ms de Inyeccin XXE<br><br>
        <a target="_blank" href="http://www.securitybydefault.com/2013/09/ataques-basados-en-entidades-xml.html">http://www.securitybydefault.com/2013/09/ataques-basados-en-entidades-xml.html </a></p>
        <a target="_blank" href="https://backtrackacademy.com/articulo/explorando-la-vulnerabilidad-xxe-xml-external-entity">https://backtrackacademy.com/articulo/explorando-la-vulnerabilidad-xxe-xml-external-entity</a></p>
        <a target="_blank" href="http://arthusu.blogspot.cl/2016/08/inyeccion-xxe-ataque-y-defensa.html">http://arthusu.blogspot.cl/2016/08/inyeccion-xxe-ataque-y-defensa.html </a></p>
    </div>
    
</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>Enviar Mensaje al Back-End: 
            <form method='get' action='#resultado' onSubmit="CargaMensaje();return false;">
                <div class="form-group"> 
                    <label></label>
                    <input class="form-control" width="50%" placeholder="Mensaje" name="msj" id="msj" value="ASYRV" readonly></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Enviar</button></div>
               </div> 
            </form>
        </p>
    </div>
               
</div>
<div id="resultado"></div>
<script>
function CargaMensaje() {
      //Armando el mensaje xml
      var parametros="";
      var msj = $("#msj").val();
      parametros += "<uservalue>\n";
      parametros += "<value>"+ msj + "</value>\n";
      parametros += "</uservalue>\n";
      $.ajax({
      url: "server.php", 
      type: 'post',
      data:parametros,
      dataType: "text", 
      success: function(result){        
        $("#resultado").html("<h3>Respuesta Back-End:</h3><div class='alert alert-success'>"+result+"</div>");
    }});
}
</script>
<?php include_once('../../about.html'); ?>

