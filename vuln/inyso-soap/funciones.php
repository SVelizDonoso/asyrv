<?php

function ObtenerDNSLookUP($ip){
   if($ip){
         if (stristr(php_uname('s'), 'Windows')) { 
            $cmd = shell_exec( 'nslookup -debug $ip ');
            return $cmd;
         } else { 
             $cmd = shell_exec( 'nslookup ' . $ip);
             return $cmd;
         }
   }
}

function ObtenerDisponibilidadPing($ip){
   if($ip){
         if (stristr(php_uname('s'), 'Windows')) { 
            $cmd = shell_exec( 'ping  ' . $ip );
            return $cmd;
         } else { 
             $cmd = shell_exec( 'ping  -c 3 ' . $ip);
             return $cmd;
         }
   }
}