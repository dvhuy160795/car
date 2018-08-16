<!DOCTYPE html>
<html lang="en">

<head>
    <style>
           
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../../../style/plugins/js/jquery.js" type="text/javascript"></script>
    <title>Giỏ hàng</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../style/plugins/css/bootstrap.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="../../../style/css/shop-homepage.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<a href="Cart.php"></a>

    <?php 
       
	include"MenuBar.php";
    ?>

    <!-- Page Content -->
    <div style=" min-height: 500px">
                
                               <?php include"./routs/routs.php";  ?>
    </div>   

 
</body>

        <!-- Footer -->
        <footer>
            <div>
                <div class="col-lg-12">
                    <?php require_once 'footer.php'; ?>
                    
                </div>
            </div>
        </footer>

    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../../../style/plugins/js/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../style/plugins/js/bootstrap.min.js" type="text/javascript"></script>


</html>


