<?php

    echo "<font style='font-weight:bold; font-size:20px'>Xin chào ".$user['user_ten']."!</font>";

?>
<table style="width: 100%" class="table table-striped">
    <tr>
        <th>Tên đăng nhập</th>
        <td><?=$user['user_name'] ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?=$user['user_email'] ?></td>
    </tr>
    <tr>
        <th>Loại tài khoản</th>
        <td><?php if($user['user_loaitk']==0){echo "Nomal";}
                  else{ echo"Vip";}
        ?></td>
    </tr>
      
</table>

<form method="POST">
    <input type="submit" name="logout" value="Logout">
</form>
<?php
if(isset($_POST['logout'])){
    unset($_SESSION['user']);
    echo"<script>location='?control=Home'</script>";
    //header("location='?control=Home'");
}
?>
