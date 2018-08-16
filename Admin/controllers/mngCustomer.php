<?php

class mngCustomer{
    public function Url($url){
        require_once './models/'.$url.'.php';
    }
    function Show() {
        $this->Url("pagination");
        $pagi=new Pagination();
        $this->Url("masterModel");
        $model=new MasterModel();
        $get1=$model->Command("SELECT * FROM `khach` ORDER BY `id` desc ");
        $get=$pagi->PagiCus($get1,"khach","order by `id` desc");
       require_once './views/customer/list_custome.php';
        $pagi->Numpage($get1,"mngCustomer","Show");
    }
    
//    function Del() {
//        $this->Url("masterModel");
//        if(isset($_GET['id']))
//         echo $id=$_GET['id'];
//        
//        $model=new MasterModel();
//        $orderdetail=$model->Command("select *from `order` where `Customer_ID`=$id");
//        
//        foreach ($orderdetail as $detail)
//        if($id == $detail['Customer_ID']){ 
//            
//            echo"<script>alert('Bạn không thể xóa vì sản phẩm này tồn tại trong một đơn hàng chưa được xử lý')</script>";
//            echo"<script>location='?control=mngCustomer'</script>";
//        }
//        
//        
//        
//        $del=$model->Delete("customer","`Customer_ID`=$id");
//   // if($del=TRUE){echo "success";}else{echo "sản phẩm tồn tại trong 1 đơn hàng";}
//       
//        echo"<script>location='?control=mngCustomer'</script>";
//			
//    }
    
}

