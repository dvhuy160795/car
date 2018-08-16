<?php
require_once 'master.php';
    class Category extends MasterModel{
        public function GetCategory($cate){
          return  parent::Get($cate);
        }
    }
?>

