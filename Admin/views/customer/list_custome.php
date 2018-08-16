

<div id="wrapper" style="padding: 50px">

        <!-- Navigation -->
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh sách khách hàng
<!--                            <small>Subheading</small>-->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="../../admin/php/home.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Danh sách khách hàng
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
                                <th>Mã khách</th>
                                <th>Họ và tên</th>           
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Email</th>
                                
                            </tr>
                             <?php $i = 1 ?>
                            <?php foreach ($get as $row) {

                                $cusID = $row["id"];
                                $cusName = $row["ten"];
                                $contact = $row["sodienthoai"];
                                $address = $row["diachi"];
                                $email = $row["email"];
                                ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $cusID; ?></td>
                                <td><?php echo $cusName; ?></td>
                                <td><?php echo $contact; ?></td>
                                <td><?php echo $address; ?></td>
                                <td><?php echo $email; ?></td>
                               
                            </tr>
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
