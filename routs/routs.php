<?php
require_once './models/pagination.php';
require_once './controllers/'.$control.'.php';
switch ($control) {
    case "Home":
            $control=new Home();
            $control->{$action}();
        break;
    case "Cart":
            $control=new Cart();
            $control->{$action}();
        break;
    case "User":
            $control=new User();
            $control->{$action}();
            break;
}

?>