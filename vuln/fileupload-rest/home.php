
<div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
      -->
      <div class="caption-full">
        <h3><a href="#">Carga de Archivos Insegura - REST</a></h3>
        
        <p align="justify">
        Como su nombre lo indica, este problema ocurre cuando la aplicacin no valida el archivo que el usuario est cargando.
        Un atacante puede cargar archivos maliciosos llamados webshells 
        en el servidor que podran llevar a un compromiso completo del servidor. 
        </p><br><br>
        <p>Leer ms de Carga de Archivos Insegura<br><br>
        <a target="_blank" href="https://www.owasp.org/index.php/Unrestricted_File_Upload">https://www.owasp.org/index.php/Unrestricted_File_Upload</a></p>
        <a target="_blank" href="https://www.owasp.org/index.php/Top_10_2007-Ejecuci%C3%B3n_de_Ficheros_Malintencionados">https://www.owasp.org/index.php/Top_10_2007-Ejecuci%C3%B3n_de_Ficheros_Malintencionados</a></p>
	<a target="_blank" href="http://www.hackplayers.com/2017/03/pentesterlab-write-up-web-for-pentester-1-upload-ldap-xml-attacks.html">http://www.hackplayers.com/2017/03/pentesterlab-write-up-web-for-pentester-1-upload-ldap-xml-attacks.html</a></p>
    </div>
      </div>

      <div class="well">
          <div class="col-lg-12"> 
            <p><h4>Agregar nueva Foto de Cliente</h4><br>
              <form id="formupimagen"  onSubmit='return false;' >
                 <input type="file" name="uploadfiles"><br /><br />
                 <input  type='button'value="Subir Imagen" id='formuploadajax' onclick='enviarform()'><br />
              </form>
         </div>

        <div class="col-lg-12"> 
		<br /><br />
           <div id='mensaje'></div>
       </div>

    </div>
<script>
function enviarform(){
    var form = $('#formupimagen')[0];
     var data = new FormData(form);
            $.ajax({
                url: "api.php/upload/imagen",
                type: "POST",
                enctype: 'multipart/form-data',
                processData: false,
                dataType: false,
                data: data,
                cache: false,
                contentType: false,
	     processData: false
            }).done(function(res){
                    $("#mensaje").html("<div class='alert alert-success'>Respuesta REST: "+res+"</div>");
                   
            });
return false;
}
</script>




    <?php include_once('../../about.html'); ?>


