<fieldset class=" form-username">
                    <legend align='center'><b>ĐIỀN THÔNG TIN ĐĂNG NHẬP</b></legend>
                        <form method="post" class=" form-box">
    
    <table style="width:50%; text-align: center" align='center'  cellspacing="3" cellpadding="2" class="table table-striped  table-hover">
  
        <tr>
            <td>User</td>
            <td><input pattern="^(\w){6,}$" class="form-control" type="text" name="name" id="name" > </td>
        </tr>
    
    
        <tr>
            <td>Password</td>
            <td><input pattern="^(\w){6,}$" class="form-control" type="password" name="pass" id="pw"></td>
        </tr> 
        <tr>
            <td ><input  class="btn-info" value="Đăng Nhập" type="submit" name="login" >  </td>  
            <td ><a href="?control=User&action=Signup">Đăng Ký</a>&nbsp;&nbsp;&nbsp;<a href="#" align='center'>Quên mật khẩu?</a>  </td> 
        </tr>
</table>                       
    <input type="hidden" name="hide" value="<?=$_SESSION['token']?>">
</form>
                   
                </fieldset>
