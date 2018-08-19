<?php
 class Car{
    public function Url($url){
        require_once './models/'.$url.'.php';
    }
    function product() {
        $this->Url("Select_product");
        $det=new Product();
        $row=$det->Detail();
        $row = mysqli_fetch_assoc($row);
        $aryTab = $this->getTab();
        $aryDataTab = $this->getDataTab();
        require_once './views/client/Car/Detail.php';
    }
    
    public function getTab() {
        return [
            'tab_1' => "Tổng quan",
            'tab_2' => "Tính năng & Thông số",
            'tab_3' => "Thư viện hình ảnh",
        ];
    }
    
    public function getDataTab() {
        return [
            'tab_1' => [
                'sp_intro',
                'sp_design',
                'sp_technologi',
                'sp_action',
                'sp_protected'
            ],
            'tab_2' => [
                'sp_engine1',
                'sp_engine2',
                'sp_engine3',
                'sp_engine4',
                'sp_engine5',
                'sp_engine6',
                'sp_engine7',
                'sp_engine8',
            ],
            'tab_3' => ['sp_list_img'],
        ];
    }
 }
?>