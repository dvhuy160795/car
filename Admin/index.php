<?php if(isset($control)&& isset($action)) ?>

<?php

session_start();
//unset($_SESSION['login']);
//echo $_SESSION['login'];
require_once '../config/config.php';
    $db= new Config();
	$conn=$db->Connect();
if(!isset($_SESSION['login'])){
    require_once './controllers/LoginAdmin.php';
    new Login();
}
else{
    
    if(isset($_GET['control']) && isset($_GET['action'])){
    $control=$_GET['control'];
    $action=$_GET['action'];
    echo"<title>$control/$action</title>";
    }
    else if(isset ($_GET['control'])){
        $control=$_GET['control'];
        echo"<title>$control</title>";
    }
    else{
    
    $control="Notis";


    }

require_once 'views/layout.php';
}
?>