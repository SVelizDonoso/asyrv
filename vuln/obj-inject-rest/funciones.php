<?php 
class PHPObjectInjection{
public $inject;

function __construct(){}
function __wakeup(){
    if(isset($this->inject)){
           eval($this->inject);
    }
 }
}

function DeserializeObjeto($serializado){
    
    $var1=unserialize($serializado);
    if(is_array($var1)){ 
       return "".$var1[0]." - ".$var1[1];
     }else{
        return ""; 
    }
}
?>