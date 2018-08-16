


        <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    

        <div id="wrapper" style="padding: 50px">

            <!-- Navigation -->
            

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Sửa sản phẩm
<!--                                <small>Subheading</small>-->
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="../index.php">Home</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Sửa thông tin sản phẩm
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /\form tao wiki -->
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <form class="form-horizontal"  method="POST" enctype="multipart/form-data">
                                <?php foreach ($r as $row) {
                                    
                                    ?>
                                <fieldset>
                                    
                                    <div id="legend">
                                        <legend class="">Sửa thông tin sản phẩm</legend>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Sửa tên sản phẩm</label>
                                        <div class="controls">
                                            <input type="text" id="delete" name="name" class="form-control input-lg" value="<?php echo $row['sp_tensanpham'] ?>"> 
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Sửa giá tiền</label>
                                        <div class="controls">
                                            <input type="text" id="delete" name="price" class="form-control input-lg" value="<?php echo $row['sp_gia'] ?>">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Sửa mô tả</label>
                                        <div class="controls">
                                           <textarea type="text" rows="6" id="mota" name="description1" class="form-control input-lg"><?php echo $row['sp_mota'] ?></textarea>
                                            <script>
                                                CKEDITOR.replace( 'description1' );
                                            </script>
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Sửa mô tả ngắn</label>
                                        <div class="controls">
                                           <textarea type="text" rows="6" id="mota" name="descriptionshort" class="form-control input-lg"><?php echo $row['sp_motangan'] ?></textarea>
                                            <script>
                                                CKEDITOR.replace( 'descriptionshort' );
                                            </script>
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <!--thong so ky thuat-->
                                    <?php foreach ($thongso as $val) { ?>
                                    <div class="control-group">
                                        <label class="control-label">Sửa thông số kỹ thuật 1</label>
                                        <div class="controls">
                                           <textarea type="text" rows="6" id="mota" name="kt1" class="form-control input-lg"><?php echo $val['thongso1'] ?></textarea>
                                            <script>
                                                CKEDITOR.replace( 'kt1' );
                                            </script>
                                            <p class="help-block"></p>
                                        </div>
                                    </div><div class="control-group">
                                        <label class="control-label">Sửa thông số kỹ thuật 2</label>
                                        <div class="controls">
                                           <textarea type="text" rows="6" id="mota" name="kt2" class="form-control input-lg"><?php echo $val['thongso2'] ?></textarea>
                                            <script>
                                                CKEDITOR.replace( 'kt2' );
                                            </script>
                                            <p class="help-block"></p>
                                        </div>
                                    </div><div class="control-group">
                                        <label class="control-label">Sửa thông số kỹ thuật 3</label>
                                        <div class="controls">
                                           <textarea type="text" rows="6" id="mota" name="kt3" class="form-control input-lg"><?php echo $val['thongso3'] ?></textarea>
                                            <script>
                                                CKEDITOR.replace( 'kt3' );
                                            </script>
                                            <p class="help-block"></p>
                                        </div>
                                    </div><div class="control-group">
                                        <label class="control-label">Sửa thông số kỹ thuật 4</label>
                                        <div class="controls">
                                           <textarea type="text" rows="6" id="mota" name="kt4" class="form-control input-lg"><?php echo $val['thongso4'] ?></textarea>
                                            <script>
                                                CKEDITOR.replace( 'kt4' );
                                            </script>
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Sửa thông số kỹ thuật 5</label>
                                        <div class="controls">
                                           <textarea type="text" rows="6" id="mota" name="kt5" class="form-control input-lg"><?php echo $val['thongso5'] ?></textarea>
                                            <script>
                                                CKEDITOR.replace( 'kt5' );
                                            </script>
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                     <?php   } ?>
                                     <div class="control-group">
                                            <div class="controls">
                                                <label class="control-label">Catalog:</label>
                                                <select id="select_catalog" name="select_catalog" class="form-control" >
                                                    <?php                     
                                                    foreach ($category as $cate) {?>
                                                    <option value="<?=$cate['hsx_id']?>"><?=$cate['hsx_ten']?></option>
                                                    <?php }?>
                                                </select>
                                            </div>                           
                                    </div>
                                     <div class="control-group">
                                            <div class="controls">
                                                <label class="control-label">Loại sản phẩm:</label>
                                                <select id="select_catalog" name="select_lsp" class="form-control" >
                                                    <?php                     
                                                    foreach ($lsp as $cate) {?>
                                                    <option value="<?=$cate['lsp_id']?>"><?=$cate['lsp_ten']?></option>
                                                    <?php }?>
                                                </select>
                                            </div>                           
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Ảnh</label>
                                        <input type="file" id="fileupload" name="fileupload"  onchange="uploadfile(this)"  >
                                        <img style="width:70%" src="../style/upload/<?=$row['sp_anh']?>" id="image_upload" >
                                    </div>
                                    <script>
                       function uploadfile(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#image_upload').attr('src', e.target.result);
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
                    <div class="control-group">
                                        <label class="control-label" >Ảnh phụ 1</label>
                                        <input type="file" id="fileupload" name="fileupload1"  onchange="uploadfile(this)"  >
                                        <img style="width:70%" src="../style/upload/<?=$row['sp_anh']?>" id="image_upload1" >
                                    </div>
                                    <script>
                       function uploadfile(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#image_upload1').attr('src', e.target.result);
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
                    <div class="control-group">
                                        <label class="control-label" >Ảnh phụ 2</label>
                                        <input type="file" id="fileupload" name="fileupload2"  onchange="uploadfile(this)"  >
                                        <img style="width:70%" src="../style/upload/<?=$row['sp_anh']?>" id="image_upload2" >
                                    </div>
                                    <script>
                       function uploadfile(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#image_upload2').attr('src', e.target.result);
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
                    <div class="control-group">
                                        <label class="control-label" >Ảnh phụ 3</label>
                                        <input type="file" id="fileupload" name="fileupload3"  onchange="uploadfile(this)"  >
                                        <img style="width:70%" src="../style/upload/<?=$row['sp_anh']?>" id="image_upload3" >
                                    </div>
                                    <script>
                       function uploadfile(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#image_upload3').attr('src', e.target.result);
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
                                    <br>
                                    
                                    <div class="control-group">
                                        <!-- Button -->
                                        <div class="controls">
                                            <button type="submit" name="submit" class="btn btn-success">Hoàn tất</button>
                                        </div>
                                    </div>
                                </fieldset>
                               <?php  } ?>
                            </form>
                        </div>
                        <div class="col-md-2"></div>

                        <!-- /.row -->

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->

            </div>
        </div>
            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="./style/js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="./style/js/bootstrap.min.js"></script>

    
<script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
