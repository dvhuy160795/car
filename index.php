
<?php
defined('LOCATION_URL')
    || define('LOCATION_URL', $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);

defined('LOCATION_URL_PUBLIC')
    || define('LOCATION_URL_PUBLIC', "http://".str_replace("/index.php", "", $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

 session_start();
    require_once './config/config.php';
    $db= new Config();
	$conn=$db->Connect();
    if(isset($_GET['control']) && isset($_GET['action'])){
    $control=$_GET['control'];
    $action=$_GET['action'];
}
else{
    
$control="Home";
$action="Select_product";
}
require_once 'views/client/layout.php';
?>


