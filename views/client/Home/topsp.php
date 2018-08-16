<fieldset>
    <legend>Sản phẩm nổi bật</legend>

<?php
   require_once './controllers/Home.php';
   $control1= new Home();
   $row=$control1->topsp()
?>
﻿<?php
if(mysqli_num_rows($row)==0){
    echo "<h2>Not found product</h2>";
}
else{
    foreach ($row as $r){ 
        $idspbh=$r['sp_id'];
        $ms=new MasterModel();
        $getbhmota=$ms->Command("SELECT baohanh.bh_mota FROM `baohanh` INNER JOIN sanpham ON baohanh.bh_id=sanpham.sp_baohanh WHERE sanpham.sp_id=$idspbh");
        $mota= mysqli_fetch_array($getbhmota);
?>
<style>
    #<?php echo "imgt".$r['sp_id']?>{
        width: 98%;
        height:100px;
        background-image: url("<?php if($r['sp_anh'] == null) echo './style/upload/placeholder_deal.png';
                                     else echo "./style/upload/".$r['sp_anh'];?>");
        background-size: 100%;
	background-repeat: no-repeat;
        box-sizing:border-box;
        
    }
</style>
<script>
    function oblur(img,detai,btnbuy,sp){
        var idsp=document.getElementById(sp);
        var bgimg=document.getElementById(img);
        var detail=document.getElementById(detai);
        var buy=document.getElementById(btnbuy);
        bgimg.style.width="100%"; 
        bgimg.style.margin="0px 0px 0px 0px";
        bgimg.style.opacity="0.8";
        detail.style.display="block"; 
        detail.style.opacity="1";
      
    }
    function mouseout(img,detai,btnbuy,sp){
        var idsp=document.getElementById(sp);
        var bgimg=document.getElementById(img);
        var detail=document.getElementById(detai);
        var buy=document.getElementById(btnbuy);
        bgimg.style.width="95%"; 
        bgimg.style.margin="0px 0px 1 0px";
        detail.style.display="none";
        bgimg.style.opacity="1";
       
    }
</script>
<div  class="col-md-6" style="text-align: center; box-sizing: border-box;   position: relative; overflow: hidden; -webkit-border-radius: 10px; border-radius: 10px; background: #fff; margin-bottom: 15px;" onmouseout="mouseout('<?php echo "imgt".$r['sp_id']?>','<?php echo "btnt".$r['sp_id']?>','<?php echo "btnbuyt".$r['sp_id']?>','<?php echo "spt".$r['sp_id']?>')" onmouseover="oblur('<?php echo "imgt".$r['sp_id']?>','<?php echo "btnt".$r['sp_id']?>','<?php echo "btnbuyt".$r['sp_id']?>','<?php echo "spt".$r['sp_id']?>')">
    <div   id="<?php echo "spt".$r['sp_id']?>">
    <a href="?control=Home&action=Detail&id=<?php echo $r['sp_id']?>">
        <!-- ảnh sản phẩm-->
        <div id="<?php echo "imgt".$r['sp_id']?>" style="height: 100px">
            <div id="<?php echo "btnt".$r['sp_id']?>" style=" text-align: center; display: none;margin: 0px ">
            <h4 style="padding: 30px 0px 0px 30px ;margin: 0px; text-align: left; color: red; font-weight: bold"></h4>
                 
            <h4 style="padding: 0px 0px 0px 30px ;margin: 0px; text-align: left;font-weight: bold;"><input type="button" value="Mua Ngay" class="form-control" style="color: red; text-decoration: none"></h4>
                  
            </div>
        </div>
        
    </a>
                <h4>
                    <a href="?control=Home&action=Detail&id=<?php echo $r['sp_id']?>"><?PHP
                           $mt=$r['sp_tensanpham'];
                          $maxchar="30";
                          $outchar="25";
                          if(strlen($mt)>$maxchar){
                              $out=mb_substr($mt, 0, $outchar, "UTF-8");
                            while(substr($out, -1) != " ") { $out = substr($out, 0, strlen($out)-1); }
                            $mt=$out."...";
                          }
                          echo $mt;
                            ?></a>
                </h4>
                
                
                
    </div>
            </div>
<?php
    }
    }
?>
</fieldset>