<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        img{
            height: 200;
            width: 300;
        }
    </style>
</head>

<body>

    <div id="wrapper" style="padding-left:2%;">

        <!-- Navigation -->
        <?php
                ///include("navigationAdmin.php");
            ?>
      
        <div id="page-wrapper" >

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh sách sản phẩm
<!--                            <small>Subheading</small>-->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="../../admin/php/home.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Danh sách sản phẩm
                            </li>
                        </ol>
                    </div>
                </div>
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6">
                        <a href="?control=mngSanpham&action=Add" class="btn btn-info">Thêm thức ăn</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <tr>
                                <th>STT</th>
                                <th>Tên món ăn </th>         
                                <th>Giá tiền</th>   
                                <th>Mô tả</th>
                                <th>Hình ảnh</th> 
                                <th>Xoá</th> 
                            </tr>
                            <?php $i = 1 ?>
                            <?php foreach ($get as $row) 
                                            
                                         { ?>
                            <tr>
                                <a href="food_list.php"></a>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['sp_tensanpham']; ?></td>
                                <td><?php echo $row['sp_gia']; ?></td>
                                <td style="word-break: keep-all;"><?php echo $row['sp_mota']; ?></td>
                                <td><img style=" width: 70%;"  src="../style/upload/<?=$row['sp_anh']?>"></td>
                                <td>
                                    <div class="controls">
                                        <a href="?control=mngSanpham&action=Edit&id=<?=$row['sp_id']?>" class="btn btn-info">Sửa</a>
                                    </div>
                                    <br>
                                    <div class="controls">
                                        <a href="?control=mngSanpham&action=Del&id=<?=$row['sp_id']?>" class="btn btn-danger delete">Xoá</a>
                                    </div>                                
                                </td>
                            </tr>
                            <?php  } ?>
                        </table>
                        <!-- Pagination -->
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <ul class="pagination">
                                   
          
                                </ul>
                            </div>
                        </div>
                    </div>               
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>

