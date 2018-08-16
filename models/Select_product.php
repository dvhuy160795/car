<?php
require_once 'master.php';
    class Product extends MasterModel{
        public function Getall(){
          return  $get=parent::Get("sanpham");
        }
        public function Detail(){
            if(isset($_GET['id']))
                $id=$_GET['id'];
           // parent::Command("UPDATE `food` SET `View`=$view WHERE Food_ID= $id");
            return $get=$this->Command("select *from sanpham where sp_id= $id");
            
        }
        public function Asc(){
            return $get= $this->Command("SELECT * FROM `sanpham` ORDER BY `sp_gia` ASC ");
        }
        public function Desc(){
            return $get= $this->Command("SELECT * FROM `sanpham` ORDER BY `sp_gia` DESC ");
        }
        public function Price_show(){
            return $get= parent::Get("price");
        }
        
    }
    
?>

