<?php
require_once 'masterModel.php';
class Pagination extends MasterModel{
    public function Pagi($result,$where){//hàm phân trang cho home vs tìm kiếm ID
        if(isset($_GET['page'])){
        $page=$_GET['page'];}//trang số
        else{$page=1;}
        $num= mysqli_num_rows($result);//tổng số sản phẩm 
        $numproduct=6;//số sản phẩm 1 trang
        $numpage= ceil($num/$numproduct);//số trang
        $product=($page-1)*$numproduct;//sản phẩm bắt đầu
        $get= parent::Command("select *from sanpham $where limit $product,$numproduct");
        return $get;   
    }
    public function PagiMore($result,$table,$inner,$where){//hàm phân trang cho home vs tìm kiếm ID
        if(isset($_GET['page'])){
        $page=$_GET['page'];}//trang số
        else{$page=1;}
        $num= mysqli_num_rows($result);//tổng số sản phẩm 
        $numproduct=6;//số sản phẩm 1 trang
        $numpage= ceil($num/$numproduct);//số trang
        $product=($page-1)*$numproduct;//sản phẩm bắt đầu
        $get= parent::Command("select *from $table $inner $where limit $product,$numproduct");
        return $get;   
    }
    public function PagiCus($result,$table,$where){//hàm phân trang cho home vs tìm kiếm ID
        if(isset($_GET['page'])){
        $page=$_GET['page'];}//trang số
        else{$page=1;}
        $num= mysqli_num_rows($result);//tổng số sản phẩm 
        $numproduct=6;//số sản phẩm 1 trang
        $numpage= ceil($num/$numproduct);//số trang
        $product=($page-1)*$numproduct;//sản phẩm bắt đầu
        $get= parent::Command("select *from $table $where limit $product,$numproduct ");
        return $get;   
    }
     public function Pagi_keyword($result,$keyword){//hàm phân trang cho tìm kiêm key word
        if(isset($_GET['page'])){
        $page=$_GET['page'];}//trang số
        else{$page=1;}
        $num= mysqli_num_rows($result);//tổng số sản phẩm 
        $numproduct=6;//số sản phẩm 1 trang
        $numpage= ceil($num/$numproduct);//số trang
        $product=($page-1)*$numproduct;//sản phẩm bắt đầu
        $get= parent::Command("select *from sanpham where sp_tensanpham like '%$keyword%' limit $product,$numproduct");
        return $get;   
    }
    public function Numpage($result,$control,$action){
        
        $num= mysqli_num_rows($result);//số sản phẩm 
        $numproduct=6;//số sản phẩm 1 trang
        $numpage= ceil($num/$numproduct);//số trang
        ?>
            <div class="pagination" style="width: 100%; text-align: center">
        <?php
        if(isset($_GET['page']))
        $page=$_GET['page'];
        else $page=1;
        ?>
                <ul class="pagination">       
 <?php
 if($numpage>1){
    if($page>1){ ?> 
                    <li>
                        <a class="pagination" href="?control=<?=$control?>&action=<?=$action?>&page=<?php if(isset($page)) echo $page-1?>">Previous</a></li>
 <?php }else echo"";
                    for($i=$page;$i<=$numpage;$i++){
                        if($i<=$page+2){
        ?>
    
                    <li><a class="pagination" href="<?php echo "?control=".$control."&action=".$action."&page=".$i?>" style="text-align: center;<?php if($i == $page) echo 'color: red'; ?>; font-weight:bold"><?=$i?></a></li>
        <?php
                    }}
                    if($page<$numpage){ ?>
                    <li>   <a class="pagination" href="?control=<?=$control?>&action=<?=$action?>&page=<?php echo $page+1?>">Next</a></li>
 <?php }}
 else echo"";
        ?>
         </ul></div>
        <?php
}
    public function Numpage_search_id($result,$control,$action,$id){
        $num= mysqli_num_rows($result);//số sản phẩm 
        $numproduct=6;//số sản phẩm 1 trang
        $numpage= ceil($num/$numproduct);//số trang
        ?>
                <div class="pagination" style="width: 100%; text-align: center">
        <?php
        if(isset($_GET['page']))
        $page=$_GET['page'];
        else $page=1;
        ?>
                <ul class="pagination">       
 <?php
 if($numpage>1){
    if($page>1){ ?> 
                    <li>
                        <a class="pagination" href="?control=<?=$control?>&action=<?=$action?>&id=<?=$id?>&page=<?php if(isset($page)) echo $page-1?>">Previous</a></li>
 <?php }else echo"";
                    for($i=$page;$i<=$numpage;$i++){
                        if($i<=$page+2){
        ?>
    
                    <li><a class="pagination" href="<?php echo "?control=".$control."&action=".$action."&id=".$id."&page=".$i?>" style="text-align: center;<?php if($i == $page) echo 'color: red'; ?>; font-weight:bold"><?=$i?></a></li>
        <?php
                    }}
                    if($page<$numpage){ ?>
                    <li>   <a class="pagination" href="?control=<?=$control?>&action=<?=$action?>&id=<?=$id?>&page=<?php echo $page+1?>">Next</a></li>
 <?php }}
 else echo"";
        ?>
         </ul></div>
        <?php
        }  
     public function Numpage_search_keyword($result,$control,$action,$key){
        $num= mysqli_num_rows($result);//số sản phẩm 
        $numproduct=6;//số sản phẩm 1 trang
        $numpage= ceil($num/$numproduct);//số trang
        ?>
             <div class="pagination" style="width: 100%; text-align: center">
        <?php
        if(isset($_GET['page']))
        $page=$_GET['page'];
        else $page=1;
        ?>
                <ul class="pagination">       
 <?php
 if($numpage>1){
    if($page>1){ ?> 
                    <li>
                        <a class="pagination" href="?control=<?=$control?>&action=<?=$action?>&keyword=<?=$key?>&page=<?php if(isset($page)) echo $page-1?>">Previous</a></li>
 <?php }else echo"";
                    for($i=$page;$i<=$numpage;$i++){
                        if($i<=$page+2){
        ?>
    
                    <li><a class="pagination" href="<?php echo "?control=".$control."&action=".$action."&keyword=".$key."&page=".$i?>" style="text-align: center;<?php if($i == $page) echo 'color: red'; ?>; font-weight:bold"><?=$i?></a></li>
        <?php
                    }}
                    if($page<$numpage){ ?>
                    <li>   <a class="pagination" href="?control=<?=$control?>&action=<?=$action?>&keyword=<?=$key?>&page=<?php echo $page+1?>">Next</a></li>
 <?php }}
 else echo"";
        ?>
         </ul></div>
        <?php
}
}

?>