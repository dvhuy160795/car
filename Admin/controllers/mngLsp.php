<?php

class mngLsp{
    public function Url($url){
        require_once './models/'.$url.'.php';
    }
    function Show() {
        $this->Url("masterModel");
        $model=new MasterModel();
        $category=$model->Get("loaisanpham");
        if(isset($_GET['AddNameLsp'])){
            $namecate=$_GET['AddNameLsp'];
            $model->Insert("loaisanpham","lsp_ten","'$namecate'");
            echo"<script>location='?control=mngLsp'</script>";
             
        }
        if(isset($_GET['id'])&& isset($_GET['name'])){
            $id=$_GET['id'];
            $name=$_GET['name'];
            $model->Update("loaisanpham","lsp_ten='$name'", "lsp_id=$id");
            echo"<script>location='?control=mngLsp'</script>";
            
        }
        if(isset($succes)) echo $succes;
       require_once './views/lsp/list_lsp.php';
        }
    function Delete() {
        $this->Url("masterModel");
        $model=new MasterModel();
       if(isset($_GET['id']))
            $id=$_GET['id'];
           $model->Delete("loaisanpham","lsp_id=$id");
    echo"<script>location='?control=mngLsp'</script>";
        }
    }

