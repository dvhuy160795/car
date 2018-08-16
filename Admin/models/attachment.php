<?php
require_once 'masterModel.php';
class LoginAdmin extends MasterModel{
function CheckLogin($username,$pass){
    $master=new MasterModel();
    return $master->Command("select *from admin where tendangnhap= '$username' and matkhau='$pass'");
}
function ShowBoPhan() {
    $master=new MasterModel();
    return $master->Get("bophan");
}
}
?>

