<?php
require_once '../Admin/models/masterModel.php';
$model= new MasterModel();
$bp=$model->Get("bophan"); ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="?">
            <img style="width: 90px;margin-top: -10px;" src="<?php echo str_replace("/Admin","", LOCATION_URL_PUBLIC."/style/template/img/logo.png") ;  ?>">
        </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">                   
        <li class="dropdown">

            <span class="page-header"> <font style="color: white;">Admin:</font><font style="color:red; font-weight: bold; font-size: 14px"><?php  echo $_SESSION['login'].$_SESSION['bp'];?></font> 
                <a href="?control=Notis&action=Logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>

            </span> 
            <h5 style="color: white">Hôm nay: <?php echo date("d/m/y") ?></h5>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <?php
                if(isset($_SESSION['bp'])){
                    switch ($_SESSION['bp']) {
                        case 1:
                            ?>
                            <li class="active">
                            <a href="?control=mngNew"><i class="fa fa-fw fa-table"></i> Cập nhật tin tức</a>
                        </li>

                            <?php
                            break;
                        case 2:
                            ?>
                            <li class="active">
                            <a href="?control=mngSanpham"><i class="fa fa-fw fa-table"></i> Quản lý Sản phẩm</a>
                        </li>                     
                        <li class="active">
                             <a href="?control=mngCategory"><i class="fa fa-fw fa-table"></i> Quản lý danh mục</a>
                        </li>
                        <li class="active">
                            <a href="?control=mngLsp"><i class="fa fa-fw fa-table"></i> Quản lý loại mặt hàng</a>
                        </li>
                            <?php
                            break;
                        case 3:
                            ?>
                            <li class="active">
                             <a href="?control=mngCustomer"><i class="fa fa-fw fa-table"></i> Quản lý khách hàng</a>
                        </li>
                        <li class="active">
                             <a href="?control=mngOrder"><i class="fa fa-fw fa-table"></i> Quản lý đơn đặt hàng</a>
                        </li>
                            <?php
                            break;
                        case 4:
                            ?>
                            <li class="active">
                             <a href="?control=mngCustomer"><i class="fa fa-fw fa-table"></i> Quản lý khách hàng</a>
                        </li>
                            <?php
                            break;
                        case 5:
                            ?>
                            <li class="active">
                            <a href="?control=mngOrder"><i class="fa fa-fw fa-table"></i> Quản lý đơn đặt hàng</a>
                        </li>
                            <?php
                            break;
                        default:
                            ?>

                            <?php
                            break; }
                                    }
                    else{
                        ?>
                        <li>
                            <a href="?control=Notis" ><i class="fa fa-fw fa-dashboard"></i> Admin page</a>
                        </li>
                        <li class="active">
                            <a href="?control=mngSanpham"><i class="fa fa-fw fa-table"></i> Quản lý Sản phẩm</a>
                        </li>                     
                        <li class="active">
                            <a href="?control=mngCategory"><i class="fa fa-fw fa-table"></i> Quản lý danh mục</a>
                        </li>
                        <li class="active">
                            <a href="?control=mngCustomer"><i class="fa fa-fw fa-table"></i> Quản lý khách hàng</a>
                        </li>
                        <li class="active">
                            <a href="?control=mngFile"><i class="fa fa-fw fa-table"></i> Quản lý file</a>
                        </li>
                        <li class="active">
                            <a href="?control=mngNew"><i class="fa fa-fw fa-table"></i> Cập nhật tin tức</a>
                        </li>

                        <li> <a href="?control=mngMember&action=Add"><i class="glyphicon glyphicon-plus"></i> Add Member</a></li>
                        <?php }
                         ?>

        </ul>
    </div>
</nav>
