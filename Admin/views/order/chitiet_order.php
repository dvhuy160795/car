
<div id="wrapper" style="padding: 50px">

        <!-- Navigation -->
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh sách đơn đặt hàng
<!--                            <small>Subheading</small>-->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?control=Notis">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Danh sách đơn đặt hàng
                            </li>
                        </ol>
                    </div>
                </div>
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6 col-lg-12 col-sm-12 col-xs-12">
                        <table class="table table-bordered">
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th> 
                                <th>Ảnh sản phẩm</th> 
                                <th>Số lượng</th>         
                                <th>Đơn giá</th>
                                <th>Tổng</th>
                            </tr>
                             <?php $i = 1;$t=0; ?>
                            <?php foreach ($get1 as $row){
                                $id=$row["dh_id"]
                                ?> <tr>
                                
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row["sp_tensanpham"]; ?></td>
                                <td><img src="../style/upload/<?php echo $row["sp_anh"]; ?>" style="width: 50%" ></td>
                                <td><?php echo $row["soluong"]; ?></td>
                                <td><?php echo $row["sp_gia"]; ?></td>
                                <td><?php echo $row["soluong"]*$row["sp_gia"]; ?></td>
                                <td><?php ?>
                                <a href='?control=mngOrder&action=Delete&id=<?=$id?>' class='btn btn-danger delete'>Tiến hành giao hàng</a>
                                </td>
                               
                            </tr>
                            <tr>Tổng đơn hàng: <?php 

                            $t=$row["soluong"]*$row["sp_gia"];
                            echo $t=+$t; ?></tr>
                            <?php $i++; } ?>
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
    <script src="../style/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../style/js/bootstrap.min.js"></script>



<script>
    $(document).ready(function(){
        $(".delete").on("click", function(event){
            event.stopPropagation();
            
            var r = confirm("Bạn chắc chắn muốn xóa?");
            if (!r) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
