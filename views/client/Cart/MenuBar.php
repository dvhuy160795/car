
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="?control=Home&action=Select_product">QuangToanStore.esy.es</a>
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
                        <a href="?control=Cart&action=Viewcart&act=Delall">Hủy giỏ hàng</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>