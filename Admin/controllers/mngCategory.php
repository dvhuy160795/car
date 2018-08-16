<?php

class mngCategory{
    public function Url($url){
        require_once './models/'.$url.'.php';
    }
    function Show() {
        $this->Url("masterModel");
        $model=new MasterModel();
        $category=$model->Get("hangsanxuat");
        if(isset($_GET['AddNameCategory'])){
            $namecate=$_GET['AddNameCategory'];
            $model->Insert("hangsanxuat","hsx_ten","'$namecate'");
            echo"<script>location='?control=mngCategory'</script>";
             
        }
        if(isset($_GET['id'])&& isset($_GET['name'])){
            $id=$_GET['id'];
            $name=$_GET['name'];
            $model->Update("hangsanxuat","hsx_ten='$name'", "hsx_id=$id");
            echo"<script>location='?control=mngCategory'</script>";
            
        }
        if(isset($succes)) echo $succes;
       require_once './views/category/list_category.php';
        }
    function Delete() {
        $this->Url("masterModel");
        $model=new MasterModel();
       if(isset($_GET['id']))
            $id=$_GET['id'];
           $model->Delete("hangsanxuat","hsx_id=$id");
    echo"<script>location='?control=mngCategory'</script>";
        }
    }

