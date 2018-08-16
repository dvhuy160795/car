<?php
class Login{
    public function Url($url){
        require_once './models/'.$url.'.php';
    }
    public function __construct() {
        require_once './models/LoginAdmin.php';
        $modellogin=new LoginAdmin();
            $bp=$modellogin->ShowBoPhan();
        $this->LoginAdmin();
    }
    function LoginAdmin() {
        $this->Url("masterModel");
        require_once './models/LoginAdmin.php';
        $modellogin=new LoginAdmin();
        $bp=$modellogin->ShowBoPhan();
        if(isset($_POST["submit"])){
         $tenbp= $_POST['bophan'];  
         $username=$_POST['user'];
         $pass=$_POST['pass'];
         if($tenbp=="admin"){
            $numberow=$modellogin->CheckLogin($username,$pass);
            if(mysqli_num_rows($numberow)==0 || mysqli_num_rows($numberow)==Null){
                $notis="Bạn đã nhập sai tài khoản hoặc mật khẩu. Vui lòng nhập tên tài khoản hoặc mật khẩu đúng!";
                }
            else{ 
                $_SESSION['login']=$username;
                $_SESSION['bp']=Null;
                $_SESSION['idcheck']=NULL;
                echo"<script>alert('Đăng nhập thành công!');location='?'</script>";}
           }
         else{
               $Mmodel=new MasterModel();
               $nv=$Mmodel->Check("nhanvien","nv_idbophan=$tenbp and nv_tendangnhap='$username' and nv_matkhau='$pass'");
               if(mysqli_num_rows($nv)==0 || mysqli_num_rows($nv)==Null){
                $notis="Bạn đã nhập sai tài khoản hoặc mật khẩu. Vui lòng nhập tên tài khoản hoặc mật khẩu đúng!";
                }
            else{ 
                $_SESSION['login']=$username;
                $_SESSION['bp']=$tenbp;
                foreach ($nv as $val) $idnv=$val['nv_id'];
                $_SESSION['idcheck']=$idnv;
                echo"<script>alert('Đăng nhập thành công!');location='?'</script>";}
           }
        }
           
           
        require_once './views/loginadmin.php';
        
    }
}
?>
