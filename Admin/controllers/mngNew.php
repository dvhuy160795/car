<?php
class mngNew {
    public function Url($url){
         require_once './models/'.$url.'.php';
    }
    function __construct() {
         $this->Url("masterModel");
    }
    function Show() {
        $model=new MasterModel();
        $get1=$model->Command("SELECT * FROM `tintuc`INNER JOIN nhanvien ON tintuc.tt_idnv=nhanvien.nv_id ");
        $get2=$model->Command("SELECT * FROM `tintuc` where tt_idnv=0");
        require_once './views/new/list_new.php';
    }
    function Add(){
        if(isset($_POST['submit'])){
            if(isset($_POST['td'])) $td=$_POST['td'];
            if(isset($_POST['nd'])) $nd=$_POST['nd'];
            if(isset($_SESSION['idcheck'])) $idcheck=$_SESSION['idcheck'];
            else $idcheck=0;
        $model=new MasterModel();
        $model->Insert("tintuc","`tt_tieude`, `tt_noidung`, `tt_ngaycapnhat`, `tt_idnv`","'$td','$nd',now(),$idcheck");
        }
       
        require_once './views/new/add_new.php';
    }
    function Edit() {
        
        if(isset($_GET['id'])) $id=$_GET['id'];
        $model=new MasterModel();
        $get=$model->Check("tintuc","tt_id=$id");
        if(isset($_POST['submit'])){
            if(isset($_POST['td'])) $td=$_POST['td'];
            if(isset($_POST['nd'])) $nd=$_POST['nd'];
            if(isset($_SESSION['idcheck'])) $idcheck=$_SESSION['idcheck'];
            else $idcheck=0;
            $model->Update("tintuc","tt_tieude='$td',tt_noidung='$nd',tt_ngaysua=now(),tt_idnv=$idcheck","tt_id=$id");
            echo"<script>location='?control=mngNew'</script>";
        }
        foreach ($get as $row)
        
        require_once './views/new/edit_new.php';
    }
    function Del() {
        if(isset($_GET['id'])) $id=$_GET['id'];
        $model=new MasterModel();
        $get=$model->Delete("tintuc","tt_id=$id");
        echo"<script>location='?control=mngNew'</script>";
    }
}
