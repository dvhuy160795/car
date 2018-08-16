<?php

require_once './controllers/'.$control.'.php';
switch ($control) {
case "$control":
    $control=new $control();
    if(isset($action)){
    $control->{$action}();}
 else {
     $control->Show();
 }
    
}

?>