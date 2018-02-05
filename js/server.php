<?php
$simple = $_POST['xml'];
$xml=simplexml_load_string($simple);     
$nombre = ((string)$xml);
echo "<br><br> Hola $nombre";
?>