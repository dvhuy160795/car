<?php
   
    class ShowCart extends MasterModel{
         public function Addtocart(){
            // unset($_SESSION['cart']);
            
             if(isset($_GET['id'])){
                $id=$_GET['id'];//lấy id trên thanh dia chi
             
                $arr=$this->Get("sanpham");//truy vấn sp trong csdl
             foreach ($arr as $val) {
                $arr1[$val["sp_id"]]=$val;//lấy mảng arr1[id]
                
                                  }
                if(!isset($_SESSION['cart']) || isset($_SESSION['cart'])==NULL){
                   $arr1[$id]['sl']=1;
                   $_SESSION['cart'][$id]=$arr1[$id];}
                else{ if(array_key_exists($id, $_SESSION['cart'])){
                        $_SESSION['cart'][$id]['sl']+=1;}
                      else{
                       $arr1[$id]['sl']=1;
                       $_SESSION['cart'][$id]=$arr1[$id]; }
                          }
               return  $_SESSION['cart'];
                
             }
             else{
                 if(!isset($_SESSION['cart'])||$_SESSION['cart']==NULL){echo "";}
                 else{
                  return  $_SESSION['cart'];
                
                    }
                 } 
        }
        public function Viewcart(){
            $row=$this->Addtocart(); 
            if(isset($_GET['act'])){
                $act=$_GET['act'];
            switch ($act) {
                case "Del":
                    $this->Del();
                     echo "<script>location='?control=Cart&action=Viewcart'</script>";
                    break;
                case "Delall":
                    $this->Delall();
                     echo "<script>location='?control=Cart&action=Viewcart'</script>";
                    break;
                 case "Delall":
                    $this->Delall();
                     
                    break;
                
            }}
            return $row;
        }
        public function Del(){
            if(isset($_GET['id']))
                $id=$_GET['id'];
            $cart=$this->Addtocart();
            unset($cart[$id]);
            $_SESSION['cart']=$cart;
          
        }
        public function Delall(){
            unset($_SESSION['cart']);
            // echo"<script>location='?control=Cart&action=Viewcart'</script>";
        }
        

        public function Pay(){
           if(isset($_POST['send']) && $_SESSION['token']==$_POST['hide']){
               if(isset ($_POST['name']))
               $name=$_POST['name'];
               if((isset ($_POST['tel'])))
               $tel=$_POST['tel'];
               if((isset ($_POST['address'])))
               $address=$_POST['address'];
               if(isset ($_POST['email']))
               $email=$_POST['email'];
               if(isset($_SESSION['cart'])){
         $this->Command("INSERT INTO khach( ten, sodienthoai, diachi, email) VALUES ('$name','$tel','$address','$email')");
          $get=$this->Command("select * from khach order by id desc limit 0,1");
          foreach ($get as $g) $cid=$g['id'];
         $get2= $this->Command("INSERT INTO `donhang`(`id_khach`,`id_user`, `dh_ngaydat`) VALUES ('$cid','1',now())");
         $cart=$this->Addtocart();
          //echo $count=count($cart);
          
          echo"<hr>";
       
         $get=$this->Command("select * from `donhang` order by dh_id desc limit 0,1");
          foreach ($get as $g) $oid=$g['dh_id'];
        
         foreach ($cart as $car){
            
          $id=$car['sp_id'];
           $sl=$car['sl'];
           $price=$car['sp_gia'];
         
          
          //echo"INSERT INTO `chitietdonhang`(`sp_id`, `id_dh`, `soluong`, `gia`) VALUES ($oid,$id,$sl,$price)";
            $get3= $this->Command("INSERT INTO `chitietdonhang`(`dh_id`, `sp_id`, `soluong`, `dongia`) VALUES ($oid,$id,$sl,$price)");
         }
            $this->Delall();//hủy giỏ hàng
            echo"<script>alert('Shopping success');location='?'</script>";
          }
           }
           $token= rand(0, 1000000);
           $_SESSION['token']=$token;
        }
        function PayUser() {
            $id= $_SESSION['user'];
            $get= new MasterModel();
            $iuser=$get->Check("khachhang", "user_id=$id");
            $getuser= mysqli_fetch_array($iuser);
                  $iduser=$getuser['user_id'];
            $get->Command("insert into donhang(`id_khach`,`id_user`, `dh_ngaydat`) value('1','$iduser',now()) ");
            $get=$this->Command("select * from `donhang` order by dh_id desc limit 0,1");
                foreach ($get as $g) $oid=$g['dh_id'];
            $cart=$this->Addtocart();
                foreach ($cart as $car){
            
                    $id=$car['sp_id'];
                    $sl=$car['sl'];
                    $price=$car['sp_gia'];
         
          
          //echo"INSERT INTO `chitietdonhang`(`sp_id`, `id_dh`, `soluong`, `gia`) VALUES ($oid,$id,$sl,$price)";
                    $get3= $this->Command("INSERT INTO `chitietdonhang`(`dh_id`, `sp_id`, `soluong`, `dongia`) VALUES ($id,$oid,$sl,$price)");
         }
            $this->Delall();
           ?>
<div style="text-align: center">
<h2>Đặt hàng thành công! Bộ phân hỗ trợ sẽ liên lạc với quý khách sau ít phút!</h2>
<p>Xin trân thành cảm ơn!</p>
<input type="button" value="Tiếp tục mua hàng >>>" class="form-bottom" onclick="location='?control=Home'">
</div>
            <?php
        }
    }
    
    
?>

