

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Bomba XML</a></h3>
        
        <p align="justify">
        Las vulnerabilidades de expansión de las entidades XML surgen porque la especificación XML permite que los documentos XML definan entidades que hacen referencia a otras entidades definidas dentro del documento. Si esto se hace recursivamente a una profundidad significativa, entonces el analizador XML consumirá cantidades cada vez mayores de la memoria y los recursos del procesador a medida que se procesa cada nivel de recursión. Esto podría dar como resultado una condición de denegación de servicio, haciendo que toda la aplicación deje de funcionar.
        </p><br><br>
        <p>Leer más de Bomba XML<br><br>
        <a target="_blank" href="https://www.soapui.org/security-testing/security-scans/xml-bomb.html">https://www.soapui.org/security-testing/security-scans/xml-bomb.html</a></p>
        <a target="_blank" href="http://www.securitybydefault.com/2013/09/ataques-basados-en-entidades-xml.html">http://www.securitybydefault.com/2013/09/ataques-basados-en-entidades-xml.html </a></p>
        <a target="_blank" href="https://backtrackacademy.com/articulo/explorando-la-vulnerabilidad-xxe-xml-external-entity">https://backtrackacademy.com/articulo/explorando-la-vulnerabilidad-xxe-xml-external-entity</a></p>
        <a target="_blank" href="http://arthusu.blogspot.cl/2016/08/inyeccion-xxe-ataque-y-defensa.html">http://arthusu.blogspot.cl/2016/08/inyeccion-xxe-ataque-y-defensa.html </a></p>
    </div>
    
</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>Enviar Mensaje XML: 
            <form action="<?php $_PHP_SELF ?>" method="POST">
                 Nombre: <input type="text" name="name" value="<name>ASYRV</name>" />
         <input type="submit" />
      </form>
        </p>
    </div>
               
</div>
<div id="resultado">
 <?php
   if (isset( $_POST["name"]))
   {
      if (!preg_match("/<|>/",$_POST['name'] ))   
      {
         die ("Error al convertir Objeto XML");
		}
		$xml=simplexml_load_string($_POST['name']);       
		$yourname = ((string)$xml);
                echo "<h2>Respuesta Back-End:</h2><br>";
                echo "<h3 class='display-1'>CPU  <span class='label label-default'>".getCPU()."%</span> RAM <span class='label label-default'>".getRAM()."%</span></h3>";
               
		print "<pre> Hola $yourname </pre>";
      exit();
   }

function getCPU(){
      //obtener uso de CPU en porcentaje 
     $exec_loads = sys_getloadavg();
     $exec_cores = trim(shell_exec("grep -P '^processor' /proc/cpuinfo|wc -l"));
     $cpu = round($exec_loads[1]/($exec_cores + 1)*100, 0) ;
     return $cpu;
}

function getRAM(){
      // obtener uso Ram en porcentaje 
     $exec_free = explode("\n", trim(shell_exec('free')));
     $get_mem = preg_split("/[\s]+/", $exec_free[1]);
     $mem = round($get_mem[2]/$get_mem[1]*100, 0) ;
     return $mem;
}


?>

</div>
<?php include_once('../../about.html'); ?>

