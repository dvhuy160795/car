<?php
class User{
    public function Url($url){
         require_once './models/'.$url.'.php';
     }
    public function Login() {
        $this->Url("master");
        $check= new MasterModel();
       if(isset($_SESSION['user'])){
           $user_id=$_SESSION['user'];
            $check=$check->Check("khachhang","user_id='$user_id'");
            $user=mysqli_fetch_array($check);
         require_once './views/client/User/information_user.php';}
       else {
           if(isset($_POST['login'])){
               $username= $_POST['name'];
               $pw= $_POST['pass'];
               $check=$check->Check("khachhang","user_name='$username' and user_pass= '$pw'");
               if(mysqli_num_rows($check)!=0){
                   $row= mysqli_fetch_array($check);
               $_SESSION['user']=$row['user_id'];
               echo"<script>location='?control=Home'</script>";//dùng js sẽ load lại trang ngay lập tức tối ưu hơn 'header' của PHP
               //header("location='?control=Home'");// mất 1 lần click thì mới thwucj hiện lệnh
               
               }
               else{
                   echo"Username or Password not found. Please Signup!";
               }
           }
         require_once './views/client/User/login.php';}
     }
     public function Signup() {
         $this->Url("master");
         if(isset($_POST['sb'])){
            $name= $_POST['name'];
            $user=$_POST['username'];
            $add= $_POST['address'];
            $pass=  $_POST['password'];
            $email=  $_POST['email'];
            $phone=  $_POST['phonenumber'];
            $usermd= new MasterModel();
            $rowcheck=$usermd->Check("khachhang","user_name='$user'");
            if(mysqli_num_rows($rowcheck)>0){
                $checknotis="Tên tài khoản đã bị trùng!";
            }else{
                $usermd->Insert("khachhang","user_ten,user_diachi,user_sodienthoai,user_email,user_name,user_pass","'$name','$add','$phone','$email','$user','$pass'");
                echo "<script>location='?control=User&action=Login'</script>";
            }
         }
         require_once './views/client/User/Signup.php';
     }
     public function Logout() {
             unset($_SESSION['user']);
             echo"<script>location='?control=Home'</script>";
     }
}
