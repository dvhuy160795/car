
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <div id="legend">
                                        <legend class="">Tạo sản phẩm</legend>
                                    </div>
                                    <!-- nhập tên sản phẩm-->
                                        <label class="control-label">Nhập tên  </label>
                                        <div class="controls">
                                            <input type="text" id="unitName" name="abc" class="form-control input-lg">
                                            <p class="help-block"></p>
                                    <!-- nhập giá sản phẩm-->
                                        <label class="control-label">Nhập giá  </label>
                                        <div class="controls">
                                            <input type="number" id="unitName" name="price" class="form-control input-lg">
                                            <p class="help-block"></p>
                                        </div>
                                    <!-- nhập mô tả sản phẩm-->
                                        <label class="control-label">Nhập mô tả </label>
                                        <div class="controls">
                                            <textarea type="text" rows="6" id="mota" name="desc" class="form-control input-lg"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'desc' );
                                                                                        </script></div>
                                        <label class="control-label">Nhập mô tả ngắn về sản phẩm </label>
                                        <div class="controls">
                                            <textarea type="text" rows="6" id="mota" name="descshort" class="form-control input-lg"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'descshort' );
                                                                                        </script></div>
                                    <!-- nhập thông số kỹ thuật sản phẩm-->
                                            <label class="control-label">Nhập thông số kỹ thuật 1</label>
                                            <div class="controls">
                                            <textarea type="text" rows="6" id="mota" name="thongso1" class="form-control input-lg"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'thongso1' );
                                                                                        </script>
                                            <p class="help-block"></p></div>
                                            <label class="control-label">Nhập thông số kỹ thuật 2</label>
                                            <div class="controls">
                                            <textarea type="text" rows="6" id="mota" name="thongso2" class="form-control input-lg"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'thongso2' );
                                                                                        </script>
                                            <p class="help-block"></p></div>
                                            <label class="control-label">Nhập thông số kỹ thuật 3</label>
                                            <div class="controls">
                                            <textarea type="text" rows="6" id="mota" name="thongso3" class="form-control input-lg"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'thongso3' );
                                                                                        </script>
                                            <p class="help-block"></p></div>
                                            <label class="control-label">Nhập thông số kỹ thuật 4</label>
                                            <div class="controls">
                                            <textarea type="text" rows="6" id="mota" name="thongso4" class="form-control input-lg"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'thongso4' );
                                                                                        </script>
                                            <p class="help-block"></p></div>
                                            <label class="control-label">Nhập thông số kỹ thuật 5</label>
                                            <div class="controls">
                                            <textarea type="text" rows="6" id="mota" name="thongso5" class="form-control input-lg"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'thongso5' );
                                                                                        </script>
                                            <p class="help-block"></p></div>
                                    <!-- nhập giảm giá sản phẩm-->
                                            <label class="control-label">Nhập giảm giá(%) </label>
                                        <div class="controls">
                                            <input type="number" id="unitName" name="giamgia" class="form-control input-lg">
                                            <p class="help-block"></p>
                                    <!-- nhập số lượng sản phẩm-->
                                            <label class="control-label">Nhập số lượng(Chiếc) </label>
                                        <div class="controls">
                                            <input type="number" id="unitName" name="sl" class="form-control input-lg">
                                            <p class="help-block"></p>
                                        </div>
                                        </div>
                                       <?php foreach ($food as $row)?>
                                        <div class="control-group">
                                    <!-- nhập ảnh sản phẩm-->
                                        <label class="control-label" >Ảnh</label>
                                        <input type="file" id="fileupload" name="fileupload" onchange="uploadfile(this)"  >
                                        <img style="width:30%"  id="image_upload" >
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
                    <!--Ảnh phụ-->
                    <table>
                        <tr>
                            <td>
                        <div class="control-group">
                                        <label class="control-label" >Ảnh phụ 1</label>
                                        <input type="file" id="fileupload" name="fileupload1" onchange="uploadfile1(this)"  >
                                        <img style="width:30%"  id="image_upload1" >
                                    </div>
                                    <script>
                       function uploadfile1(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#image_upload1').attr('src', e.target.result);
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
                            </td>
                            <td>
                    <div class="control-group">
                                        <label class="control-label" >Ảnh phụ 2</label>
                                        <input type="file" id="fileupload" name="fileupload2" onchange="uploadfile2(this)"  >
                                        <img style="width:30%"  id="image_upload2" >
                                    </div>
                                    <script>
                       function uploadfile2(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#image_upload2').attr('src', e.target.result);
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
                            </td>
                            <td>
                    <div class="control-group">
                                        <label class="control-label" >Ảnh phụ 3</label>
                                        <input type="file" id="fileupload" name="fileupload3" onchange="uploadfile3(this)"  >
                                        <img style="width:30%"  id="image_upload3" >
                                    </div>
                                    <script>
                       function uploadfile3(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#image_upload3').attr('src', e.target.result);
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
                    </td>
                        </tr>
                    </table>
                                        <div class="control-group">
                                            <div class="controls">
                                                <label class="control-label">Hãng sản xuất:</label>
                                                <select id="select_catalog" name="category" class="form-control">
                                                    <?php foreach ($category as $cate) {?>
                                                    <option value="<?=$cate['hsx_id']?>"><?=$cate['hsx_ten']?></option>
                                                    <?php }?>
                                                </select>
                                            </div>                           
                                        </div>
                    <div class="control-group">
                                            <div class="controls">
                                                <label class="control-label">Loại sản phẩm:</label>
                                                <select id="select_catalog" name="lsp" class="form-control">
                                                    <?php foreach ($lsp as $cate) {?>
                                                    <option value="<?=$cate['lsp_id']?>"><?=$cate['lsp_ten']?></option>
                                                    <?php }?>
                                                </select>
                                            </div>                           
                                        </div>
                     <div class="control-group">
                                            <div class="controls">
                                                <label class="control-label">Bảo hành:</label>
                                                <input type="number" id="unitName" name="bh" class="form-control input-lg">
                                            </div>                           
                                        </div>
                                        <br>
                                        <div class="controls">
                                            <input type="submit" class="btn btn-success" name="submit"   value="Tạo sản phâm" >
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
<!-- jQuery -->
            <script src="./style/js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="./style/js/bootstrap.min.js"></script>