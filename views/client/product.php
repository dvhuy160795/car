<?php
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
    #<?php echo "img".$r['sp_id']?>{
        width: 98%;
        height:180px;
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
<div  class="col-sm-3 portfolio-item" style="text-align: center; box-sizing: border-box;  height: 300px; margin-right: 0px; position: relative; overflow: hidden; background: #fff;border: thin solid sienna; margin-bottom: 15px;" onmouseout="mouseout('<?php echo "img".$r['sp_id']?>','<?php echo "btn".$r['sp_id']?>','<?php echo "btnbuy".$r['sp_id']?>','<?php echo "sp".$r['sp_id']?>')" onmouseover="oblur('<?php echo "img".$r['sp_id']?>','<?php echo "btn".$r['sp_id']?>','<?php echo "btnbuy".$r['sp_id']?>','<?php echo "sp".$r['sp_id']?>')">
    <div   id="<?php echo "sp".$r['sp_id']?>">
        <a href="?control=Home&action=Detail&id=<?php echo $r['sp_id']?>" style="text-decoration: none">
        <!-- ảnh sản phẩm-->
        <div id="<?php echo "img".$r['sp_id']?>">
            <div id="<?php echo "btn".$r['sp_id']?>" style=" text-align: center; display: none;margin: 0px;">
                <h4 style="padding: 30px 0px 0px 30px ;margin: 0px; text-align: left; color: red; font-weight: bold;">
                   
                    <?php $mt=$r['sp_mota'];
                          $maxchar="100";
                          $outchar="85";
                          if(strlen($mt)>$maxchar){
                              $out=mb_substr($mt, 0, $outchar, "UTF-8");
                            while(substr($out, -1) != " ") { $out = substr($out, 0, strlen($out)-1); }
                            $mt=$out."...";
                          }
                          echo $mt;
                            ?>
                </h4>
                 
            <h4 style="padding: 0px 0px 0px 30px ;margin: 0px; text-align: left;font-weight: bold;"></h4>
            
            </div>
            
        </div>
        
    </a>
                <h4>
                    <a href="?control=Home&action=Detail&id=<?php echo $r['sp_id']?>"><?PHP
                           $mt=$r['sp_tensanpham'];
                          $maxchar="50";
                          $outchar="25";
                          if(strlen($mt)>$maxchar){
                              $out=mb_substr($mt, 0, $outchar, "UTF-8");
                            while(substr($out, -1) != " ") { $out = substr($out, 0, strlen($out)-1); }
                            $mt=$out."...";
                          }
                          echo $mt;
                            ?></a>
                </h4>
                <h4>Giá: <?PHP echo number_format($r['sp_gia'],0,".",".");?> VNĐ
                </h4>
        
    </div>
            </div>
<?php
    }
    }
?>
