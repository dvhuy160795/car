<script>
    function info(n){
       var showinfo=document.getElementById("showinfo");
       if(n!=1){showinfo.style.display="none";}
       else{
           showinfo.style.display="block";  
       }
    }
    function outinfo(){
        var showinfo=document.getElementById("showinfo");
        showinfo.style.display="none";
    }
</script>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="?">QuangToanStore.esy.es</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="pull-right" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav"> 
                    <li>
                        <a href="?control=Cart&action=Viewcart" >Giỏ hàng</a>
                    </li>
                    <li>
                        <a>Số lượng:
                              <?PHP
                              //unset($_SESSION['cart']);
                             if (isset($_SESSION['cart']))
                                { 
                                 $total=0;
                                 foreach ($_SESSION['cart'] as $key ) {
                                     $total+=$key['sl'];
                                 } 
                                 echo $total;} 
                                else {
                                    echo "0";
                                }
                                ?>
                        </a>
                    </li>
                    <li >
                        <a href="?control=Home&action=Delall" >Hủy giỏ hàng</a>
                    </li>
                </ul> 
                <?php if(isset($_SESSION["user"])){?>
                <table  >
                    <tr>
                        <td ><div  class="glyphicon glyphicon-user" id="inforuser" onclick="info(1)"  onmouseout="interval(2000,outinfo())"  style="background: black; color: white; margin-top: 15px;" data-toggle="dropdown"></div></td>
                        <td style="width: 70px" ><span style="text-align: center;display: none" id="showinfo"  ><a href="?control=User&action=Login" >Thông tin</a><br>
                                <a href="?control=User&action=Logout">Đăng xuất</a></span>
                        </td>
                    </tr>
                </table>
                <?php }
                else{
                ?>
                <div class="dropdown" style="display: inline-block; margin-top: 10px">
                    <input style=" background: black; color: white" value="Tài khoản" type="button" data-toggle="dropdown">
                    <ul class="dropdown-menu">
                        <li><a href="?control=User&action=Login">Đăng nhập</a></li>
                        <li><a href="?control=User&action=Signup">Đăng ký</a></li>
                    </ul>
                </div>
                <?php }?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
