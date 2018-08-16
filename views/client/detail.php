<?php
    $view=$r['sp_view']+=1;
        $det->Command("UPDATE sanpham SET `sp_view`=$view WHERE sp_id=".$r['sp_id']);
        
 ?>
<style>
    #spcungloai{
       
        box-sizing: border-box;
       
    }
    #spcungloai{
         width: 25%;
         float: left
    }
</style>
<table class="table tab-content" style="max-width: 100%; margin-top: 20px" >
    <tr>
        <td style="width: 40%; min-height:250px;padding-top: 20px">
            <table >
                <tr>
                    <td><div style="width: 100%"> <img id="phu1" onclick="changeimg('phu1')" style="width: 100%" src="<?php if($r['sp_anhphu1'] == null) echo './Admin/upload/placeholder_deal.png';
                    else 
                        echo "./style/upload/".$r['sp_anhphu1']; 
                    ?>"></div>
                    </td>
                    <td rowspan="3" style="width: 80%"><div style="width: 100%"> <img id="showimg" style="width: 100%; height: 200px" src="<?php if($r['sp_anh'] == null) echo './Admin/upload/placeholder_deal.png';
                    else 
                        echo "./style/upload/".$r['sp_anh']; 
                    ?>"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="width: 100%"> <img id="phu2" onclick="changeimg('phu2')" style="width: 100%" src="<?php if($r['sp_anhphu2'] == null) echo './Admin/upload/placeholder_deal.png';
                    else 
                        echo "./style/upload/".$r['sp_anhphu2']; 
                    ?>"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="width: 100%"> <img id="phu3" onclick="changeimg('phu3')" style="width: 100%" src="<?php if($r['sp_anhphu3'] == null) echo './Admin/upload/placeholder_deal.png';
                    else 
                        echo "./style/upload/".$r['sp_anhphu3']; 
                    ?>"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="width: 100%"> <img id="phu4" onclick="changeimg('phu4')" style="width: 100%" src="<?php if($r['sp_anh'] == null) echo './Admin/upload/placeholder_deal.png';
                    else 
                        echo "./style/upload/".$r['sp_anh']; 
                    ?>"></div>
                    </td>
                </tr>
            </table>
            <h3 class="name" style=" color: red"><?=$r['sp_tensanpham']?></h3>
            <h4 style=" font-weight: bold; color: blue">Giá: <?PHP echo number_format($r['sp_gia'],0,".",".") ?> VNĐ</h4>
            <h4>Số lượt xem: <?=$view?></h4>
            <div style="width: 100%; height:10%; text-align: center"><input style="width: 30%; height: 30px" class="form-control" type="button" name="addtocart" onclick="location='?control=Cart&action=Addtocart&id=<?=$r['sp_id']?>'" value="Click Buy"></div>
        </td>
        <td style="width: 60%;min-height:250px;padding-top: 30px">
            <div style="max-width: 100%; height:250px; color: red;"><h4 >Mô tả: <?=$r['sp_mota']?></h4> </div>
            
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center">
           </td>
    </tr>
</table>
 <div style="max-width: 100%;color: blue"><h4 >Thông số kỹ thuật:</h4>
                <?php foreach ($thongso as $val){  ?>
     <table  class="table" style="text-align:center">
                    <tbody>
                        <tr>
                            <th style="width: 10%;color: black;">CPU</th>
                            <td style="width: 90%"><?=$val['thongso1'] ?></td>
                        </tr>
                        <tr>
                            <th style="color: black;">Bộ nhớ</th>
                            <td><?=$val['thongso2'] ?></td>
                        </tr>
                        <tr>
                            <th style="color: black;">Màn hình</th>
                            <td><?=$val['thongso3'] ?></td>
                        </tr>
                        <tr>
                            <th style="color: black;">Đồ họa</th>
                            <td><?=$val['thongso4'] ?></td>
                        </tr>
                        <tr>
                            <th style="color: black;">Bộ xử lý</th>
                            <td><?=$val['thongso5'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php }?>
                 </div>
<fieldset style=" width: 100%">
    <legend style="font-weight:bold;color: red;">Sản phẩm cùng loại</legend>
    <div id="spcungloai" style="width: 100%;">
    
        
            <?php
            foreach ($cungloai as $val) {         
            ?>
        <div  style="text-align: center; box-sizing: border-box;float: left;width: 25%; background: white;height: 250px;" >
    <div >
    <a href="?control=Home&action=Detail&id=<?php echo $val['sp_id']?>">
        <!-- ảnh sản phẩm-->
        <img style=" width: 50%;"  src="./style/upload/<?=$val['sp_anh']?>">
        
    </a>
                <h4>
                    <a href="?control=Home&action=Detail&id=<?php echo $val['sp_id']?>"><?PHP echo $val['sp_tensanpham'] ?></a>
                </h4>
                <h4>Giá: <?PHP echo number_format($val['sp_gia'],0,".",".");?> VNĐ
                </h4>
    </div>
            </div>
            <?php } ?>
        
         
    
</div>
</fieldset>
<fieldset style=" width: 100%">
    <legend style="font-weight:bold;color:red;">Sản phẩm cùng hãng sản xuất
    </legend>
    <div id="spcungloai" style="width: 100%;">
    
        
            <?php
            foreach ($cunghang as $val) {         
            ?>
            <div style="text-align: center; box-sizing: border-box;float: left;width: 25%">
    <div >
    <a href="?control=Home&action=Detail&id=<?php echo $val['sp_id']?>">
        <!-- ảnh sản phẩm-->
        <img style=" width: 50%;"  src="./style/upload/<?=$val['sp_anh']?>">
        
    </a>
                <h4>
                    <a href="?control=Home&action=Detail&id=<?php echo $val['sp_id']?>"><?PHP echo $val['sp_tensanpham'] ?></a>
                </h4>
                <h4>Giá: <?PHP echo number_format($val['sp_gia'],0,".",".");?> VNĐ
                </h4>
    </div>
            </div>
            <?php } ?>
        
         
    
</div>
</fieldset>

<script>
    function changeimg(idimg){
        var a=document.getElementById(idimg).src;
        var b=document.getElementById("showimg");
        setTimeout(function(){ b.src=a;},500);    
    }
</script>

