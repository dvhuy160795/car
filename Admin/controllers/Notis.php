<?php
    class Notis{
        public function Url($url){
        require_once './models/'.$url.'.php';
    }
        function Logout() {
            unset($_SESSION['login']);
            echo "<script>location='".$_SERVER['SEVER_SELF']."'</script>";
        }
        function OrderUser() {
            $this->Url("masterModel");
            $model= new MasterModel();
            $get=$model->Command("SELECT * FROM `donhang`INNER JOIN `khachhang` ON donhang.id_user=khachhang.user_id WHERE donhang.id_user!=1 and donhang.dh_trangthai=0");
           
            return $get;
            
            
        }
        function OrderKhach() {
            $this->Url("masterModel");
            $model= new MasterModel();
            $get=$model->Command("SELECT * FROM `donhang`INNER JOIN `khach` ON donhang.id_khach=khach.id WHERE donhang.id_khach!=1 and donhang.dh_trangthai=0");
           
            return $get;
            
        }
        function Show() {
             $this->Url("pagination");
            $pagi=new Pagination();//lớp lấy hàm phân trang
            $getorderuser0= $this->OrderUser();
            $getorderuser=$pagi->PagiMore($getorderuser0, "donhang","INNER JOIN `khachhang` ON donhang.id_user=khachhang.user_id", "WHERE donhang.id_user!=1 and donhang.dh_trangthai=0");
            $getorderkhach0= $this->OrderKhach();
            $getorderkhach=$pagi->PagiMore($getorderkhach0,"donhang","INNER JOIN `khach` ON donhang.id_khach=khach.id", "WHERE donhang.id_khach!=1 and donhang.dh_trangthai=0");
            require_once './views/notis/notispage.php';
            $pagi->Numpage($getorderkhach0,"mngOrder","OrderKhach");//hàm lấy danh sách số trang
        }
    }
?>

