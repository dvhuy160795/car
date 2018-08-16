
<?php
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


