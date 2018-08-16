<?php

 class mngMember {
    public function Url($url){
        require_once './models/'.$url.'.php';
    }
    function __construct() {
         $this->Url("masterModel");
    }
    function Add() {
         
        $model= new MasterModel();
        $getbp=$model->Get("bophan");
        if(isset($_POST['sb'])){
            if(isset($_POST['ht'])) $ht=$_POST['ht'] ;
            if(isset($_POST['ye'])) $ye=$_POST['ye'] ;
            if(isset($_POST['email'])) $email=$_POST['email'] ;
            if(isset($_POST['sdt'])) $sdt=$_POST['sdt'] ;
            if(isset($_POST['qq'])) $qq=$_POST['qq'] ;
            if(isset($_POST['bp'])) $bp=$_POST['bp'] ;
            if(isset($_POST['mt'])) $mt=$_POST['mt'] ;
            if(isset($_POST['tdn'])) $tdn=$_POST['tdn'];
            if(isset($_POST['pass'])) $pass=$_POST['pass'] ;
            if(isset($_FILES['fileupload'])) echo$img=$_FILES['fileupload']['name'] ;
             if(isset($_FILES['fileupload']['name']))
             $target="./upload/".$_FILES['fileupload']['name'];
             move_uploaded_file($_FILES['fileupload']['tmp_name'],$target);
             $model->Insert("nhanvien","`nv_idbophan`, `nv_tennv`, `nv_tendangnhap`, `nv_matkhau`, `nv_sdt`, `nv_quequan`, `nv_tuoi`, `nv_ngayvaolam`, `nv_mota`, `nv_anh`", "$bp,'$ht','$tdn','$pass','$sdt','$qq','$ye',now(),'$mt','$img'");
        }
        require_once './views/member/addmember.php';
    }
    function Show() {
        $this->Url("masterModel");
        $this->Url("pagination");
        if(isset($_GET['id'])) $idbp=$_GET['id'];
        $model=new MasterModel();
        $result=$model->Check("nhanvien","nv_idbophan=$idbp and nv_tinhtrang=0");
        $pagi=new Pagination();//lớp lấy hàm phân trang
        $get=$pagi->PagiCus($result,"nhanvien","where nv_idbophan=$idbp and nv_tinhtrang=0");
       
       
        require_once './views/member/list_member.php';
       
        $pagi->Numpage_search_id($result,"mngMember","Show",$idbp);//hàm lấy danh sách số trang
    }
    function Out(){
         if(isset($_GET['id']))
                $id=$_GET['id'];
            $this->Url("masterModel");
            $model=new MasterModel();
            $model->Update("`nhanvien`","`nv_tinhtrang`=1","`nv_id`='$id'");
            echo"<script>location='".$_SERVER['HTTP_REFERER']."'</script>";
    }
    function ListOut(){
        $this->Url("masterModel");
        $this->Url("pagination");
        if(isset($_GET['id'])) $idbp=$_GET['id'];
        $model=new MasterModel();
        $result=$model->Check("nhanvien"," nv_tinhtrang=1");
        $pagi=new Pagination();//lớp lấy hàm phân trang
        $get=$pagi->PagiCus($result,"nhanvien","where nv_tinhtrang=1");
       
       
        require_once './views/member/list_member.php';
       
        $pagi->Numpage($result,"Member","ListOut");//hàm lấy danh sách số trang
    }
}
