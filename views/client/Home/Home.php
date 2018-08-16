<?php
	include"menubar.php";
?>

    <!-- Page Content -->
    <div class="container col-md-12">
        <div class="row">
            
            <div class="col-md-12" style="min-height:250px ">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
                            <div class="carousel-inner">
                                <div class="item active" style="background-image: url(./style/images/11.jpg); height:400px"> </div><!--/.item-->
                                <div class="item" style="background-image: url(./style/images/22.jpg); height:400px"></div><!--/.item-->
                                <div class="item" style="background-image: url(./style/images/33.jpg); height:400px"></div><!--/.item-->
                            </div>
                            </div>
                        </div>

                    </div>
 	
                </div>
            
        </div>
            
            <div style="font-size: 24px; margin-top:-1000px; height: 100px; color: red; border: none">
            
            <div class="col-md-12" id="menu" >
                <ul>
                    <li style=" margin-left: -45px; color: red; width:40px "><img style="width:100%" src="./style/upload/logo.png"></li>
                    <li><a href="?">Trang chủ</a></li>
                    <li><a href="?control=Home&action=Tintuc">Tin tức</a></li>
                    <li><a href="?control=Home&action=Help">Trợ giúp</a></li>
                    <li><a href="?control=Home&action=Contact">Liên hệ</a></li>
                    <li><a href="?control=Home&action=About">Hệ thống cửa hàng</a></li>
                </ul>
                
            </div>
            
            </div>
        <div class="container">
             <div class="col-md-2" style="height: auto; margin-top: 20px">
                <?php include"menuleft.php";?>
           
                
                
            </div>
            <div class="col-lg-10" >
                    <?php include"./routs/routs.php";  ?>
                </div>
            
            <div class="col-md-8">
                <fieldset>
                    <legend ><font style="color: red; font-weight: bold; font-size: 24px">Tin tức mới</font >(<?php echo date("d/m/y") ?>)</legend>
                    <?php include"partialnew.php";  ?>
                </fieldset>
            </div>
            <div class="col-md-4">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%25C4%2590%25E1%25BB%2593ng-H%25E1%25BB%2593-Phan-Th%25E1%25BB%258B-1907794406155494%2F&tabs=timeline&width=300&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="350" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
    </div>
    
    <!-- /.container -->
    
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <?php require_once 'footer.php'; ?>
                </div>
            </div>
        </footer>

    </div>
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="./style/plugins/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./style/plugins/js/bootstrap.min.js"></script>

