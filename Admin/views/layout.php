<!DOCTYPE html>
<html >

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../style/upload/12.jpg" rel="shortcut icon" type="image/x-icon" />
    

    <!-- Bootstrap Core CSS -->
    <link href="./style/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./style/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="./style/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./style/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
    function show1(){
        var list= document.getElementById('list');
            list.style.display='block';
    }
</script>
</head>

<body>

    <div id="wrapper">

        <?php
       
                include("nav.php");
        
         
         ?>
        <div id="page-wrapper">

           <?php 
                   require_once './routs/routs.php';
           ?>

        </div>
        <!-- /#page-wrapper -->

    </div>
    
    <!-- /#wrapper -->

    

</body>
<!-- jQuery -->
            <script src="./style/js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="./style/js/bootstrap.min.js"></script>
</html>


