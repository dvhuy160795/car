<?php
class mngFile{
    public function Url($url){
        require_once './models/'.$url.'.php';
    }
    function Show() {
        $this->Url("masterModel");
        $this->Url("pagination");
        $model=new MasterModel();
        $rfood=$model->Get("attachment");
        $pagi=new Pagination();//lớp lấy hàm phân trang
        $get=$pagi->PagiCus($rfood,"attachment","");

        require_once './views/file/list_file.php';
       
        $pagi->Numpage($rfood,"mngFile","Show");//hàm lấy danh sách số trang
    }
    function Edit() {
        $this->Url("masterModel");
        $model=new MasterModel();
        $check=$model->Get("attachment");
        foreach ($check as $arr)
            $arr1[$arr['sp_id']]=$arr;
        if(isset($_GET['id'])&& isset($arr1[$_GET['id']]) ){
        $id=$_GET['id'];
//        echo"<pre>";
//        print_r($arr1[$_GET['id']]);
//        
//        echo"</pre>";
         if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $price=$_POST['price'];
            $description=$_POST['description1'];
            $descriptionshort=$_POST['descriptionshort'];
            $kt1=$_POST['kt1'];
            $kt2=$_POST['kt2'];
            $kt3=$_POST['kt3'];
            $kt4=$_POST['kt4'];
            $kt5=$_POST['kt5'];
            $cate=$_POST['select_catalog'];
            $lspp=$_POST['select_lsp'];
            //nếu đã chọn file để đăng thì img= tên file
            if($arr1[$_GET['id']]['sp_anh']!=NULL){
                if($_FILES['fileupload']['name']!=NULL)  $img=$_FILES['fileupload']['name'];
                else  $img=$arr1[$_GET['id']]['sp_anh'];
            }
            else {
                if($_FILES['fileupload']['name']!=NULL)  $img=$_FILES['fileupload']['name'];
                else  $img=$arr1[$_GET['id']]['sp_anh'];
            }
            if($arr1[$_GET['id']]['sp_anhphu1']!=NULL){
                if($_FILES['fileupload1']['name']!=NULL)  $img1=$_FILES['fileupload1']['name'];
                else  $img1=$arr1[$_GET['id']]['sp_anhphu1'];
            }
            else {
                if($_FILES['fileupload1']['name']!=NULL)  $img1=$_FILES['fileupload1']['name'];
                else  $img1=$arr1[$_GET['id']]['sp_anhphu1'];
            }
            if($arr1[$_GET['id']]['sp_anhphu2']!=NULL){
                if($_FILES['fileupload2']['name']!=NULL)  $img2=$_FILES['fileupload2']['name'];
                else  $img2=$arr1[$_GET['id']]['sp_anhphu2'];
            }
            else {
                if($_FILES['fileupload2']['name']!=NULL)  $img2=$_FILES['fileupload2']['name'];
                else  $img2=$arr1[$_GET['id']]['sp_anhphu2'];
            }
            if($arr1[$_GET['id']]['sp_anhphu3']!=NULL){
                if($_FILES['fileupload3']['name']!=NULL)  $img3=$_FILES['fileupload3']['name'];
                else  $img3=$arr1[$_GET['id']]['sp_anhphu3'];
            }
            else {
                if($_FILES['fileupload3']['name']!=NULL)  $img3=$_FILES['fileupload3']['name'];
                else  $img3=$arr1[$_GET['id']]['sp_anhphu3'];
            }
            //đưa ảnh vào folder upload
            $target="./upload/".$img;
             $target1="./upload/".$img1;
              $target2="./upload/".$img2;
               $target3="./upload/".$img3;
            move_uploaded_file($_FILES['fileupload']['tmp_name'],$target);
            move_uploaded_file($_FILES['fileupload']['tmp_name'],$target1);
            move_uploaded_file($_FILES['fileupload']['tmp_name'],$target2);
            move_uploaded_file($_FILES['fileupload']['tmp_name'],$target3);
           $model->Update("sanpham","`sp_tensanpham`='$name',`sp_gia`='$price',`sp_anh`='$img',`sp_anhphu3`='$img3',`sp_anhphu2`='$img2',`sp_anhphu1`='$img1',`sp_mota`='$description',`sp_motangan`='$descriptionshort',`sp_idloai`='$lspp',`sp_ngaysua`=now(),`sp_HSX`='$cate'","`sp_id`='$id'" );
           //echo"<script>location='?control=mngSanpham'</script>";
          
         }
            
            $r=$model->Command("select *from sanpham where sp_id=$id");
            $thongso=$model->Check("thongsokythuat","sp_id=$id");
            $category=$model->Get("hangsanxuat");
            $lsp=$model->Get("loaisanpham");
         require_once './views/sanpham/edit_sanpham.php';
         
         }
         
         else{ 
             //echo $severname=$_SERVER['HTTP_REFERER'];
             //echo $severuri=$_SERVER['REQUEST_URI'];
             echo"<script>location='?control=mngSanpham'</script>";}
        
    
    }
    function Add() {
        $this->Url("masterModel");
        $model=new MasterModel();
        if (isset($_POST['submit'])) {
            $model->processFile();
            echo"<script>alert('Thêm file thành công');location='?control=mngFile'</script>";
        }
        require_once './views/file/add_file.php';
    }
    function Del() {
        $this->Url("masterModel");
        if(isset($_GET['id']))
          $id=$_GET['id'];
        
        $model=new MasterModel();
        $food=$model->Command("select *from attachment where sp_id=$id");
        $orderdetail=$model->Command("select *from chitietdonhang where sp_id=$id");
        foreach ($orderdetail as $detail)
        if($id == $detail['sp_id']){ 
            
            echo"<script>alert('Bạn không thể xóa vì sản phẩm này tồn tại trong một đơn hàng chưa được xử lý')</script>";
            echo"<script>location='?control=mngSanpham'</script>";
        }
        
        foreach ($food as $f)
        
        $del=$model->Delete("sanpham","`sp_id`=$id");
   // if($del=TRUE){echo "success";}else{echo "sản phẩm tồn tại trong 1 đơn hàng";}
        unlink("./upload/".$f['sp_anh']);
        echo"<script>alert('Xóa sản phẩm thành công!');location='?control=mngSanpham'</script>";
    }
    
}

