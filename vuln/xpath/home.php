<?php
$result = '';
if(isset($_POST['submit'])){
$doc = new DOMDocument;
$doc->load('personajes.xml');
$xpath = new DOMXPath($doc);
$input = $_POST['search'];
$query = "/Personajes/persona[@ID='".$input."']";
#$result = isset($xpath->query($query)) ? $xpath->query($query) : '';
$result = $xpath->query($query);
}
?>
<div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Inyeccin XPATH </a></h3>
        
        <p align="justify">
	Las inyecciones de XPATH son bastante similares a las inyecciones de SQL, con la diferencia de que utiliza consultas XML en lugar de consultas SQL. Esta vulnerabilidad se 
	produce cuando la aplicacin no valida la informacin proporcionada por el usuario que construye consultas XML. Un atacante puede enviar solicitudes maliciosas a la aplicacin
	 para descubrir cmo se estructuran los datos XML y puede aprovechar el ataque para acceder a datos XML no autorizados.      </p><br><br>
        <p>Leer ms de inyecciones XPATH<br><br>
	<a target="_blank" href="https://www.owasp.org/index.php/Inyecci%C3%B3n_XPath_Ciega">https://www.owasp.org/index.php/Inyecci%C3%B3n_XPath_Ciega</a></p>
	<a target="_blank" href="https://es.wikipedia.org/wiki/Inyecci%C3%B3n_XPath">https://es.wikipedia.org/wiki/Inyecci%C3%B3n_XPath</a></p>
	<a target="_blank" href="https://backtrackacademy.com/articulo/inyeccion-xpath-en-aplicaciones-web">https://backtrackacademy.com/articulo/inyeccion-xpath-en-aplicaciones-web</a></p>
        <a target="_blank" href="https://www.owasp.org/index.php/XPATH_Injection">https://www.owasp.org/index.php/XPATH_Injection</a></p>

    </div>

</div>

<div class="well">
    <div class="col-lg-6"> 
        <p><b>Busca tu personaje Favorito:</b>
            <form method='POST' action='#resultado'>
                <div class="form-group"> 
                    <label></label> 
                    <input type="text" class="form-control" placeholder="Buscar por ID" name="search" > </input> <br>
                    <div align="right"> <button class="btn btn-default" name="submit" type="submit">Buscar</button></div>
               </div> 
            </form>
        
        </p>

    </div>
      

    <hr>
    
</div>
<div id='resultado'>
<h3>Respuesta Back-End:</h3>
    <?php
        if (is_array($result) || is_object($result)){
            echo "<table class='table'>";
            echo "<tr><th>ID</th><th>&nbsp;&nbsp;</th><th>Nombre y Descripcin</th></tr>";
            foreach($result as $row){
                echo " ";
                echo "<tr><td valign=\"top\">".$row->getElementsByTagName('ID')->item(0)->nodeValue."</td><td>&nbsp;&nbsp;</td>";
                echo "<td valign=\"top\"><b>".utf8_decode($row->getElementsByTagName('Name')->item(0)->nodeValue)."</b><br>".utf8_decode($row->getElementsByTagName('Desc')->item(0)->nodeValue)."</td></tr>";
                echo "<tr><td colspan=2>&nbsp;</td></tr>";
            }
            echo "</table>";
        }else{
            echo "<div class='alert alert-danger'>Sin resultados!</div>";
        }
    ?>
</div>
<?php include_once('../../about.html'); ?>