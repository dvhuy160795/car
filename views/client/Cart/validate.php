<?php	
/*$connect=mysqli_connect('localhost','root','','websitefoodspot') or die('Không kết nối được');
	$connect->set_charset('utf8');
session_start();
unset($_SESSION['cart']);
if(isset($_SESSION['cart']))
    print_r ($_SESSION);
 $gia=$_GET['gia'];

  $masp=$_GET['masp'];
 $_SESSION['cart'][$masp]['sl']=$_GET['soluong'];
$tongtien=0;
foreach(array_keys($_SESSION['cart']) as $key){
	$soluongmua = $_SESSION['cart'][$key];
		$sql ="select * from food where Food_ID ='$key'";
		$kq=$connect->query($sql);
		$sanpham=mysqli_fetch_array($kq);
		$tongtien+=$soluongmua*$sanpham['Price'];
	}
 echo number_format($thanhtien,0,',','.').";".number_format($tongtien,0,',','.');

echo"<br>";
echo $_SESSION['cart'][$masp]['sl']*$gia;*/
//sửa đổi
//-sử dụng mảng session['cart'] của giỏ hàng để lưu số lượng sp vào session
//-$_SESSION['cart'][$masp] là bản ghi của sản phẩm phẩm tương ứng vói masp
//-$_SESSION['cart'][$masp]['sl'] là số lượng sản phẩm tương ứng

session_start();
    $gia=$_GET['gia'];
    $masp=$_GET['masp'];
    $_SESSION['cart'][$masp]['sl']=$_GET['soluong'];
    echo $_SESSION['cart'][$masp]['sl']*$gia;
    ?>
