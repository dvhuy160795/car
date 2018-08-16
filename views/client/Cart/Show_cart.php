<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><strong>Giỏ hàng</strong></h2>
                        </div>
                        <!-- /.panel-heading -->
                        <form name="frm.cart" role="form" method="post" action="?control=Cart&action=Viewcart&act=Update" >
                            <div class="dataTable_wrapper">
                                 
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Tổng tiền</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                                   $i=0;
                                    foreach ($row as $r) { 
                                        
                                     ?>
                                        <tr>
                                            <td>
                                              <?=++$i;?>
                                            </td>
                                       
                                            <td>
                                              <?=$r['sp_tensanpham']?>  
                                            </td>
                                            <td>
                                                <script>// JavaScript Document
//Phần lấy số lượng thay đổi trong giỏ hàng
var xmlhttp;
          var masp;
function fget(soluong,msp,gia){
        masp=msp;
	xmlhttp=GetXmlHttpObject();
	if (null==xmlhttp)// kiem tra xem co ton tai ajax k
		alert("Tr\u00ecnh duy\u1ec7t kh\u00f4ng h\u1ed7 tr\u1ee3 HTTP Request");
	else(// neu ton tai ajax thi lay du lieu tu ham statechange
		xmlhttp.onreadystatechange=stateChanged, //neu co thi khi co su thay doi thi thuc hien ham xu ly 
		xmlhttp.open("GET","http://localhost:5555/foodspot1/views/client/Cart/validate.php?soluong="+soluong+"&gia="+gia+"&masp="+masp,!0),// mở cửa sổ hiện ra theo phương thức GET và lấy dữ liệu theo link
		xmlhttp.send(null));
               
}

function stateChanged(){ //ham thuc hieen phuong thuc tinh toan
	if(4==xmlhttp.readyState){
		var d=xmlhttp.responseText; //responseText nhận giá trị đã đc echo ra     
               
		document.getElementById(masp).innerHTML=d; //và đưa vào id=out1
                 
                
	}
}

function GetXmlHttpObject(){//ham mac dinh cua ajax để kiểm tra xem trình duyệt có hõ trợ hay k
	if ( window.XMLHttpRequest)
		kq=new XMLHttpRequest;
	else if(window.ActiveXObject)
		kq=new ActiveXObject("Microsoft.XMLHTTP");
         else   kq=null;
         return kq;
}
function payment(){
    document.getElementById("pay").style.display="block";
}                                                
</script>
                                               <input type="number" min="1" max="99" name="<?=$r['sp_id']?>" id="quantity"
            oninput="fget(this.value,<?=$r['sp_id']?>,<?=$r['sp_gia']?>)" 
            value="<?=$r['sl']?>" > 
                                                
                                            </td>
                                             <td>
                                               <?=$r['sp_gia']?>
                                            </td>
                                             <td>
                                               <div id="<?=$r['sp_id']?>"><?=$r['sl']*$r['sp_gia']?></div>
                                            </td>
                                            <td>
                                                <input  type="button" value="Delete" name="del" onclick="location='?control=Cart&action=Del&id=<?=$r['sp_id']?>'">
                                            </td>
                                        </tr>
                                   <?php }?>
                                    </tbody>
                                    <tr>
                                        
                                        <td colspan="5" style="text-align: center"><span><input type="button" name="pay" value="Pay" onclick="<?php
                                            if(isset($_SESSION['user'])) echo"location='?control=Cart&action=Pay'";
                                            else echo"payment()";
                                            ?>"></span>
                                            <span><input type="button" name="del" value="DELETE ALL" onclick="location='?control=Cart&action=Viewcart&act=Delall'" ></span>
                                            </td>
                                            
                                </tr>
                                </table>
                                
                            </div>
                            <div id="pay" style="display:none">
                             <?php   $get->Pay();
        require_once './views/client/Cart/Payments.php'; ?>
</div>
                            </div>
                        </form></div></div>