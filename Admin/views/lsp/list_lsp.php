
<script>
        function editCatalog(e,id)
        {
            var a = e.target.parentElement.parentElement.parentElement;
            //window.alert(a.innerHTML);
             a.getElementsByClassName("name_row")[0].innerHTML="<input type='text' class=' input_text' name='input_name'></input>"
             a.getElementsByClassName("data_row")[0].getElementsByClassName("controls")[0].innerHTML="<a type='submit' class='btn btn-info btn-submit' name='submit_value' value='Nhập' onClick='funcEdit(event,id);'>Lưu</a> <a href='?control=mngCategory' class='btn btn-danger '>Không đổi</a>"
        }
        
        function funcEdit(e,id){  
            var currentRow = e.target.parentElement.parentElement.parentElement;
            var changeName = currentRow.getElementsByClassName("input_text")[0].value;
            var catalogId  = currentRow.id;
            window.location.href = '?control=mngLsp&action=Show&id='+catalogId+'&name='+changeName;
}
        function onCreate(){
            var input_label = "<label class='control-label'>Nhập tên Catalog:</label>";
            var input_create = "<input type='text' id='catalogName' name='catalogName' class='form-control input-lg'><p class='help-block'></p>";
            var button_create ="<div class='controls'><input type='button' class='btn btn-success' value='Tạo Catalog' onClick='funcCreate()'></div>";
            document.getElementById("create_dialog").innerHTML= '<div class="control-group">'+input_label+input_create + button_create+'</div>';
        }
        
        function funcCreate()
        {
            var name = document.getElementById("catalogName").value;
            window.location.href = '?control=mngLsp&action=Show&AddNameLsp='+name;
        }
</script>
    <div id="wrapper" style="padding: 50px" >
        
      
      
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh sách Catalog
<!--                            <small>Subheading</small>-->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="../index.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Danh sách Catalog
                            </li>
                        </ol>
                    </div>
                </div>
                
                <!-- /.row -->
                <div class="row" id="create_dialog">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-info" onclick="onCreate()">Tạo catalog</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <table class="table table-bordered">
                            <tr>
                                <th>STT</th>
                                <th>Catalog</th>
                                <th>
                                
                                </th>
                            </tr>
                            <form name="input_change_form" method="POST" action="?control=mngLsp&action=Show">
                            <?php $i=1;
                            foreach ($category as $row){  ?>
                            <tr id="<?PHP echo $row['lsp_id'];?>" name="catalog_<?PHP echo $row['lsp_id'];?>" class=" catalogclass">
                               
                                <td class="id_row"><?php echo $i++ ?></td>
                                <td class="name_row"><?php echo $row['lsp_ten']; ?></td>
                                <td class="data_row">
                                    <div class="controls">
                                        <a href="?control=mngLsp&action=Delete&id=<?PHP echo $row['lsp_id'];?>" class="btn btn-danger delete">Xoá</a>
                                        <a onclick="editCatalog(event,<?PHP echo $row['lsp_id'];?>)" class="btn btn-danger ">Sửa</a>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                            </form>
                        </table>
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




