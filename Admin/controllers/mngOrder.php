<?php

class mngOrder{
     public function Url($url){
        require_once './models/'.$url.'.php';
    }
        function OrderUser() {
            $this->Url("masterModel");
            $model= new MasterModel();
            $this->Url("pagination");
            $pagi=new Pagination();//lớp lấy hàm phân trang
            $getorder1=$model->Command("SELECT * FROM `donhang`INNER JOIN `khachhang` ON donhang.id_user=khachhang.user_id WHERE donhang.id_user!=1 and donhang.dh_trangthai=0");
            $getorder=$pagi->PagiMore($getorder1, "donhang","INNER JOIN `khachhang` ON donhang.id_user=khachhang.user_id", "WHERE donhang.id_user!=1 and donhang.dh_trangthai=0");
            require_once './views/order/listuser.php';
            $pagi->Numpage($getorder1,"mngOrder","OrderUser");//hàm lấy danh sách số trang
            
        }
        function OrderKhach() {
            $this->Url("masterModel");
            $model= new MasterModel();
            $this->Url("pagination");
            $pagi=new Pagination();//lớp lấy hàm phân trang
            $getorder1=$model->Command("SELECT * FROM `donhang`INNER JOIN `khach` ON donhang.id_khach=khach.id WHERE donhang.id_khach!=1 and donhang.dh_trangthai=0");
            $getorder=$pagi->PagiMore($getorder1,"donhang","INNER JOIN `khach` ON donhang.id_khach=khach.id", "WHERE donhang.id_khach!=1 and donhang.dh_trangthai=0");
           require_once './views/order/listkhach.php';
             $pagi->Numpage($getorder1,"mngOrder","OrderKhach");//hàm lấy danh sách số trang
        }
        function Show() {
            $this->Url("masterModel");
            $model= new MasterModel();
             $this->Url("pagination");
            $pagi=new Pagination();//lớp lấy hàm phân trang
            $getorderuser0=$model->Command("SELECT * FROM `donhang`INNER JOIN `khachhang` ON donhang.id_user=khachhang.user_id WHERE donhang.id_user!=1 and donhang.dh_trangthai=0");
            $getorderuser=$pagi->PagiMore($getorderuser0, "donhang","INNER JOIN `khachhang` ON donhang.id_user=khachhang.user_id", "WHERE donhang.id_user!=1 and donhang.dh_trangthai=0");
            $getorderkhach0= $model->Command("SELECT * FROM `donhang`INNER JOIN `khach` ON donhang.id_khach=khach.id WHERE donhang.id_khach!=1 and donhang.dh_trangthai=0");
            $getorderkhach=$pagi->PagiMore($getorderkhach0,"donhang","INNER JOIN `khach` ON donhang.id_khach=khach.id", "WHERE donhang.id_khach!=1 and donhang.dh_trangthai=0");
            require_once './views/order/list_order.php';
            
        }
        function Process() {
            if(isset($_GET['id']))
                $id=$_GET['id'];
            $this->Url("masterModel");
            $model=new MasterModel();
            $model->Update("`donhang`","`dh_trangthai`=1","`dh_id`='$id'");
            echo"<script>location='".$_SERVER['HTTP_REFERER']."'</script>";
        }
        function Delete() {
            if(isset($_GET['id']))
                $id=$_GET['id'];
            $this->Url("masterModel");
            $model=new MasterModel();
                $model->Delete("chitietdonhang", "dh_id=$id");
                $model->Delete("donhang","dh_id=$id");
            echo"<script>location='?control=mngOrder'</script>";
        }
        function Detail() {
            $this->Url("pagination");
            $this->Url("masterModel");
            if(isset($_GET['id'])) $iddh=$_GET['id'];
            $model=new MasterModel();
            $get1=$model->Command("SELECT * FROM `chitietdonhang` INNER JOIN  sanpham ON chitietdonhang.sp_id=sanpham.sp_id 
INNER JOIN donhang ON chitietdonhang.dh_id=donhang.dh_id WHERE chitietdonhang.dh_id=$iddh");
        require_once './views/order/chitiet_order.php';
        }
    }

