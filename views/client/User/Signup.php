<link rel="stylesheet" href="./style/css/style2.css">

<div class="login-page" style="width: 50%;" >
    <div class="form" style="width: 100%;position: relative;
  z-index: 1;
  background-image: url(./style/upload/nen2.jpg);
  max-width: 600px;
  margin: 0 50px 100px;
  padding: 30px;
  text-align: center;
  border: 1px solid red;
  box-shadow: 0 0 20px 0 rgba(1, 1, 1, 1), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
<script>
        function cfpass(){
            var pw=document.getElementById("pw").value;
            var cfpw=document.getElementById("cfpw").value;
            var err= document.getElementById("notiserr");
            var btn=document.getElementById("btnsubmit");
            if(pw!=cfpw){
                err.innerHTML="Vui lòng nhập lại đúng mật khẩu";  
                btn.style.display="none"; 
            }
            else{
                err.innerHTML="";  
                btn.style.display="block"; 
            }
        }
        
        </script>
        <font style="font-size:28px; font-weight: bold; color: white;">Thông Tin Đăng Ký</font><br>
        <font style="font-size:16px; font-weight: bold; color: red"><?php if(isset($checknotis)) echo$checknotis?></font>
        <form class="login-form" method="post" enctype="multipart/form-data">
        
        <table width="100%" >
  <tr>
      <td style=" width: 200px;color: black;"><input type="text" placeholder="Your Name" name="name" required/></td>
      <td style=" width: 200px"><input type="text" placeholder="UserName" name="username" required/></td>
  </tr>
  <tr>
      <td style=" width: 200px"><input type="text" placeholder="Address" name="address"  required/></td>
      <td style=" width: 200px"><input type="password" placeholder="password" name="password" id="pw" required/></td>
  </tr>
  <tr>
      <td style=" width: 200px"><input type="text" placeholder="Email" name="email" required></td>
      <td style=" width: 217px"><font id="notiserr" style="float: right; color: red"></font><input type="text"  onchange="cfpass()" placeholder="Confirm Password" name="confirm" id="cfpw" required></td>
  </tr>
  <tr>
      <td style=" width: 200px"><input type="text" placeholder="Phone Number" name="phonenumber" required/></td>
      
  </tr>
</table>

            <input type="submit" name="sb" id="btnsubmit" value="Signup" style="background: #43A047; display: none">
      <p class="message">Already registered? <a href="?control=User&action=Login">Đăng Nhập</a></p>
    </form>
  </div>
</div>
<script src="./css/js/js.js" type="text/javascript"></script>
<script src="./css/js/jquery.js" type="text/javascript"></script>


