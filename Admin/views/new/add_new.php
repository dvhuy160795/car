
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <div id="legend">
                                        <legend class="">Tạo bài viết</legend>
                                    </div>
                                    <!-- nhập tên sản phẩm-->
                                        <label class="control-label">Nhập tiêu đề  </label>
                                        <div class="controls">
                                            <input type="text" id="unitName" name="td" class="form-control input-lg">
                                            <p class="help-block"></p>
                                    
                                    <!-- nhập mô tả sản phẩm-->
                                        <label class="control-label">Nhập nội dung </label>
                                        <div class="controls">
                                            <textarea type="text" rows="6" id="mota" name="nd" class="form-control input-lg"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'desc' );
                                                                                        </script></div>
                                       
                                    
                                        <div class="controls">
                                            <input type="submit" class="btn btn-success" name="submit"   value="Đăng bài" >
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
<!-- jQuery -->
            <script src="./style/js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="./style/js/bootstrap.min.js"></script>