
<div id="wrapper" style="padding: 50px">

        <!-- Navigation -->
         
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            DANH SÁCH ĐƠN ĐẶT HÀNG CHƯA XỬ LÝ
<!--                            <small>Subheading</small>-->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?control=Notis">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> 
                            </li>
                        </ol>
                    </div>
                </div>
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6 col-lg-12 col-sm-12 col-xs-12">
                        <h2>Đơn hàng của người dùng chưa đăng ký</h2>
                        <table class="table table-bordered">
                            <tr>
                                <th>STT</th>
                                
                                <th>Họ và tên</th>  
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>         
                                <th>Email</th>
                                
                                <th>Ngày đặt hàng</th>
                                <th>Trạng thái</th>
                            </tr>
                             <?php $i = 1 ?>
                            <?php foreach ($getorder as $row){
                                $id=$row["id"];
                                        $iddh=$row['dh_id'];
                                ?> <tr>
                                
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row["ten"]; ?></td>
                                <td><?php echo $row["diachi"]; ?></td>
                                <td><?php echo $row["sodienthoai"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                               
                                <td><?php echo $row["dh_ngaydat"]; ?></td>
                                <td><?php echo $row["dh_trangthai"]; ?></td>
                                <td><a href="?control=mngOrder&action=Detail&id=<?=$iddh?>">Thông tin đơn hàng</a></td>
                                
                            </tr>
                            <?php $i++; }
                            ?>
                            
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
