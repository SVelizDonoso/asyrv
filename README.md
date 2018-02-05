Aplicación SOAP y REST Vulnerable(ASYRV)
=========================================
ASYRV es una aplicación escrita en PHP/MySQL, con Servicios Web mal desarrollados(SOAP/REST/XML), esperando ayudar a los entusiastas de la seguridad informática a comprender esta tecnología tan utilizada hoy en día por las Organizaciones. 
Esta Genial Herramienta tan especializada, puede agudizar tus habilidades en el arte de Hackear Web Services, ten en cuenta que este proyecto es totalmente Legal romperlo o piratearlo. La idea es evangelizar la importancia de desarrollar servicios con seguridad y que en un futuro podamos tener un internet más seguro y libre. Antes que comiences a probar esta app, te pido por favor que adquieras estas habilidades para un buen propósito.



ASYRV está diseñado para comprender los siguientes problemas de seguridad.

## Vulnerabilidades SOAP:
+ Enumeración de WSDL
+ Inyección SQL (Error) - SOAP
+ Inyección SQL (Ciegas) - SOAP
+ nyección Comandos OS - SOAP
+ Inyección Objetos - SOAP
+ Carga de Archivos - SOAP
+ XSS-Reflejado -SOAP
+ XSS-Almacenado- SOAP
+ SSRF/XSPA - SOAP
+ RDO - SOAP

## Vulnerabilidades REST:
+ Inyección SQL (Error) - REST
+ Inyección SQL (Ciegas) - REST
+ Inyección Comandos OS - REST
+ Inyección Comandos OS - SOAP
+ Inyección Objetos - REST
+ Carga de Archivos - REST
+ XSS-Reflejado -REST
+ XSS-Almacenado- REST
+ SSRF/XSPA - REST
+ RDO - REST

## Vulnerabilidades XML:
+ Inyección XPATH
+ Inyección XXE
+ Bomba XML


## Aclaración

No alojes esta aplicación en linea ni en el entorno de producción. ASYRV es una aplicación de Web Services totalmente vulnerable y el acceso en línea de esta aplicación podría llevar a un completo compromiso de su sistema. No somos responsables de dichos incidentes. Mantengase a salvo por favor !

## Copyright

Este trabajo esta bajo la licencia GNU GENERAL PUBLIC LICENSE Version 3 
Para ver una copia de esta licencia visita http://www.gnu.org/licenses/gpl-3.0.txt


## Instrucciones
ASYRV es fácil de instalar y Puede ser configurado Linux por el momento. Los siguientes son los pasos básicos que debes seguir en tu entorno Para la instalacion. Puedes usar WAMP, XAMP o cualquier cosa Apache-PHP-MYSQL para que funcione correctamente


## Instalación Manual

Copie la carpeta asyrv en su directorio web raíz. Asegúrese de que el nombre del directorio sea asyrv. Realice los cambios necesarios en asyrv/config.php para la conexión a la base de datos. Ejemplo a continuación:

```php
$XVWA_WEBROOT = '';  
$host = "localhost"; 
$dbname = 'xvwa';  
$user = 'root'; 
$pass = 'root';
```

Realice los siguientes cambios en el archivo de configuración de PHP. 

```php
file_uploads = on 
allow_url_fopen = on 
allow_url_include = on 
```
Instalar extenciones extensiones XML y JSON según corresponda:

```php
sudo apt-get install php-json php-xml
sudo apt-get install php5-json php5-xml
```
Acceso a la Web : http://localhost/asyrv/
Configure la base de datos y la tabla accediendo http://localhost/asyrv/setup/ 
Detalles del Acceso:

```php
admin:admin
asyrv:asyrv
user:vulnerable
```

## About 

ASYRV está diseñado intencionalmente con muchos fallos de seguridad y suficiente fundamento técnico para mejorar el conocimiento de la seguridad de los Web Services. La idea es evangelizar los problemas de seguridad que afecta esta tecnología. Sus sugerencias son importantes para mejora esta app y si te gustaría ver cualquier otra vulnerabilidad en el proyecto, envíame tu idea para tenerla en cuenta en futuros lanzamientos de ASYRV.

## Autor:
- Sebastian Veliz Donoso https://www.linkedin.com/in/sebastianvelizdonoso/
- Correo: cyslabs@gmail.com

## Buena Suerte y Happy Hacking!

