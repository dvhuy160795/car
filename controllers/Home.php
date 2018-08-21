<?php
    require_once './models/pagination.php';
    require_once 'Cart.php';
 class Home{
     public function Url($url){
         require_once './models/'.$url.'.php';
     }
     public function Select_product(){
         $this->Url('Select_product');//hàm gọi file bên model
         $get=new Product();//lớp lấy kết quả truy vấn
         $r=$get->Getall();
         $pagi=new Pagination();//lớp lấy hàm phân trang
         $row=$pagi->Pagi($r,NULL);
          
         require_once './views/client/product.php';
         
         $r=$get->Getall();
         $pagi->Numpage($r,"Home","Select_product");//hàm lấy danh sách số trang
        
     }
     public function Select_Category(){
         $this->Url("Select_category");//hàm gọi file bên model
         $get=new Category();//lớp lấy kết quả truy vấn
         $cate=$get->GetCategory("hangsanxuat");
         $drive=$get->GetCategory("loaisanpham");
         require_once './views/client/category.php';
        
     
     }
     public function Search(){
         $this->Url("Search_product");//hàm gọi file bên model
         if(isset($_GET['id']))
             $id=$_GET['id'];
         $get1=new Search();//lớp lấy kết quả truy vấn
         $row1=$get1->Search_product($id);
         $pagi=new Pagination();//lớp lấy hàm phân trang
         $row=$pagi->Pagi($row1,"where sp_HSX=$id");
         
         require_once './views/client/product.php';
         
         $pagi->Numpage_search_id($row1,"Home","Search",$id);
     }
     public function Search_lsp(){
         $this->Url("Search_product");//hàm gọi file bên model
         if(isset($_GET['id']))
             $id=$_GET['id'];
         $get1=new Search();//lớp lấy kết quả truy vấn
         $row1=$get1->Search_product($id);
         $pagi=new Pagination();//lớp lấy hàm phân trang
         $row=$pagi->Pagi($row1,"where sp_idloai=$id");
         
         require_once './views/client/product.php';
         
         $pagi->Numpage_search_id($row1,"Home","Search",$id);
     }
     public function Keyword(){
         $this->Url("Search_product");//hàm gọi file bên model
         if(isset($_POST['btn']))//nếu click mua thì 
         $keyword=$_POST['keyword'];//lấy key word
         else{if(isset($_GET['keyword']))//nếu không thì
             $keyword=$_GET['keyword'];// lấy keyword trên thanh địa chỉ
         }
         $get1=new Search();//lớp lấy kết quả truy vấn
         $row1=$get1->Search_keyword($keyword);
         $pagi=new Pagination();//lớp lấy hàm phân trang
         $row=$pagi->Pagi_keyword($row1,$keyword);
         
         require_once './views/client/product.php';
         
         $pagi->Numpage_search_keyword($row1,"Home","Keyword",$keyword);
         
        
        }
     public function Delall(){
         require_once './models/Cart.php';
         $cart=new ShowCart();
         $cart->Delall();
         echo "<script>location='?control=Home&action=Select_product'</script>";    
         
        }

     public function Detail(){
         $this->Url('Select_product');
         $det=new Product();
         $row=$det->Detail();
         foreach ($row as $r)
             $id=$r['sp_id'];
             $idloai=$r['sp_idloai'];
             $idhsx=$r['sp_HSX'];
         $thongso=$det->Check("thongsokythuat","sp_id=$id");
         $cungloai=$det->Check("sanpham","sp_idloai=$idloai limit 0,4");
         $cunghang=$det->Check("sanpham","sp_HSX=$idhsx limit 0,4");
        require_once './views/client/detail.php';
        
       
     }
     public function Asc(){
         $this->Url("Select_product");
         $get=new Product();
         $r=$get->Asc();
         $pagi=new Pagination();
         $row=$pagi->Pagi($r,"order by sp_gia asc");
         require_once './views/client/product.php';
         $r=$get->Asc();
         $pagi->Numpage($r,"Home","Asc");
     }
     public function Desc(){
         $this->Url("Select_product");
         $get=new Product();
         $r=$get->Desc();
         $pagi=new Pagination();
         $row=$pagi->Pagi($r,"order by sp_gia Desc");
         require_once './views/client/product.php';
         $r=$get->Desc();
         $pagi->Numpage($r,"Home","Desc");
     }
     public function Price(){
         $this->Url("Select_product");
         $get=new Product();
         $p=$get->Price_show();
         require_once './views/client/price.php';
     }
     function Tintuc() {
         $this->Url('master');//hàm gọi file bên model
         $model=new MasterModel();
         $r1=$model->Get("tintuc");
         $pagi=new Pagination();//lớp lấy hàm phân trang
         $row=$pagi->PagiCus($r1,"tintuc","order by tt_id desc");
         require_once './views/client/tintuc/new.php';
         $pagi->Numpage($r1,"Home","Tintuc");//hàm lấy danh sách số trang
     }
     function PartiNew() {
          $this->Url('master');//hàm gọi file bên model
         $model=new MasterModel();
         return $model->Command("select *from tintuc ORDER BY tt_id DESC limit 0,1");
     }
     function Help() {
        
          require_once './views/client/tintuc/help.php';
     }
     function Contact() {
          require_once './views/client/tintuc/contact.php';
     }
     function About() {
          require_once './views/client/tintuc/about.php';
     }
     function topsp(){
        $this->Url('master');//hàm gọi file bên model
         $model=new MasterModel();
         return $row=$model->Command("SELECT `sp_id`, `sp_tensanpham`, `sp_gia`, `sp_anh`, `sp_anhphu3`, `sp_anhphu2`, `sp_anhphu1`, `sp_mota`, `sp_motangan`, `sp_giamgia`, `sp_idloai`, `sp_ngaynhap`, `sp_ngaysua`, `sp_soluong`, `sp_HSX`, `sp_baohanh`, `sp_view` FROM `sanpham`  ORDER BY  sp_view DESC LIMIT 0,4");   
     }
 }
?>