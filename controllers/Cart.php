<?php

class Cart{
    public function Url($url){
        require_once './models/'.$url.'.php';
    }

    public function Addtocart(){
        $this->Url("master");
        $this->Url("Cart");
        $get=new ShowCart();
        //$row=$get->demo();
        $row1=$get->Addtocart();
//        var_dump($row); die;
      
        if(!isset($row1) || $row1==NULL){?><h2 style="text-align: center">EMPTY SHOPPING CART</h2><div style="text-align: center"><p> Please go to shopping</p><input type='button' value="Shopping" onclick='location="?control=home&action=Select_product"'></div>
           <?php }
          else{
              $row=$row1;
         
        require_once './views/client/Cart/Show_cart.php';
       //echo $row["Food_ID"];
          
          }
        echo "<script>location='?control=Cart&action=Viewcart'</script>";        
}
    public function Viewcart(){
        $this->Url("Cart");
        $get=new ShowCart();
        $row1=$get->Viewcart();
        if(!isset($row1) || $row1==NULL){?><h2 style="text-align: center">EMPTY SHOPPING CART</h2><div style="text-align: center"><p> Please go to shopping</p><input type='button' value="Shopping" onclick='location="?control=Home&action=Select_product"'></div>
           <?php }
          else{
              $row=$row1;
        require_once './views/client/Cart/Show_cart.php';
       //echo $row["Food_ID"];
          }
    }
    public function Del(){
         $this->Url("Cart");
          $get=new ShowCart();
          $get->Del();
          echo "<script>location='?control=Cart&action=Viewcart'</script>";
    }
    public function Delall(){
        $this->Url("Cart");
          $get=new ShowCart();
          $get->Delall();
          echo "<script>location='?control=Cart&action=Viewcart'</script>";
    }

    public function Pay(){
        $this->Url("Cart");
        $get=new ShowCart();
        if(!isset($_SESSION["user"])){
          $get->Pay();
        require_once './views/client/Cart/Payments.php';}
        else{
            $get->PayUser();
        }
       
    }
    public function Thank(){
        
          
        require_once './views/client/thankyou.php';
    }
}
?>

