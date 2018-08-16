<!DOCTYPE html>
<html lang="en">

<head>
    <style>
     .btndropdown{}           
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./style/upload/12.jpg" rel="shortcut icon" type="image/x-icon" />
    <title><?php echo $control."/".$action?></title>


    <!-- Bootstrap Core CSS -->
    <link href="./style/plugins/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./style/css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #menu ul {
            background: whitesmoke;
           color: red;
            list-style-type: none;
            text-align: center;
            border-radius: 5px;
}
        #menu li{
            display: inline-block;
            margin:0px 25px 0px 50px;
        }
        #menu li a{
            color: red;
            font-weight: bold;
        }
        #menu li a:hover{
            text-decoration: none;
            color: #de615e;
            font-size: 25px;
        }
    </style>
</head>

<body style="background: #cccccc ">
    <div>
   <?php
   require_once $control."/".$control.".php";
   ?>
    </div>
</body>
</html>



