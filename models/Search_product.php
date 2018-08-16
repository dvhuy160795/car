<?php
require_once 'master.php';
    class Search extends MasterModel{
        public function Search_product($id){
            return parent::Command("select*from sanpham where sp_HSX='$id'");
            
        }
        public function Search_keyword($keyword){
            return parent::Command("select*from sanpham where sp_tensanpham like '%$keyword%'");
        }
    }
?>