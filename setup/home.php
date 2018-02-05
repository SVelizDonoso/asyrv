 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">Aplicación SOAP y REST Vulnerable(ASYRV) - Configuración</a></h4>
        </div>
    <div class="col-lg-12"> 
         En este menú se crea una base de datos con el nombre de variable dbname en el archivo config.php.
         Luego, se realiza una carga de la base de datos por medio de un backup sql que se encuentra en la ruta backup/asyrv.sql.
         Finalmente se cargan los registros para poder utilizar la app y se resetean nuevamente todas las tablas.

        <p align="center"> 
            <form method='get' action=''>
                <div class="form-group" align="center"> 
                    <label></label>
                    <button class="btn btn-primary" name="action" value="do" type="submit">Enviar / Restauración</button>
               </div> 
            </form>
        </p>
    </div>
</div>
<pre>
<?php
$submit = isset($_GET['action']) ? $_GET['action'] : '';

if($submit){
include("../config.php");
$filename = 'backup/asyrv.sql';

mysql_connect($host, $user, $pass) or die('Error al conectar a MySQL Server: ' . mysql_error());
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Base de datos Datos $dbname Creada con Exito!<br />";
} else {
    echo "Error Creando Base de Datos : " . mysqli_error($conn);
}
mysql_select_db($dbname) or die('Error al seleccionar base de datos:: ' . mysql_error());
 

$templine = '';
$lines = file($filename);
foreach ($lines as $line)
{
    // Omitir si es un comentario
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;
 
    // Agregue esta línea al segmento actual
    $templine .= $line;
    // Si tiene un punto y coma al final, es el final de la consulta
    if (substr(trim($line), -1, 1) == ';')
    {
        // Realiza la consulta
        mysql_query($templine) or print('Error al realizar consulta \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
        // Restablecer la variable temporat y la deja vacia
        $templine = '';
    }
}
 echo "Carga de datos en la Base de Datos! <br /> </pre>" ;

}

?>
<?php include_once('../about.html'); ?>