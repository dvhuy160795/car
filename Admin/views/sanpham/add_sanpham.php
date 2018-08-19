
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<nav aria-label="breadcrumb" 
    style="margin-top: -52px;
    position: fixed;
    z-index: 2000;
    font-size: 18px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#intro">Giới thiệu</a></li>
    <li class="breadcrumb-item"><a href="#design">Thiết kế</a></li>
    <li class="breadcrumb-item"><a href="#technologi">Công nghệ</a></li>
    <li class="breadcrumb-item"><a href="#action">Vận hành</a></li>
    <li class="breadcrumb-item"><a href="#protected">An toàn</a></li>
    <li class="breadcrumb-item"><a href="#engine">Tính năng & thông số</a></li>
    <li class="breadcrumb-item"><a href="#sp_list_img">Thu viện hình ảnh</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
<div style="height: 600px; overflow-y: auto; margin-top: 40px; border: thin solid #9f9f9f">
        <fieldset>
            <div id="legend">
                <legend class="">Tạo sản phẩm</legend>
            </div>
            <!-- nhập tên sản phẩm-->
                <label class="control-label">Nhập tên  </label>
                <div class="controls">
                    <input type="text" id="unitName" name="sp[sp_ten]" class="form-control input-lg">
                    <p class="help-block"></p></div>
                <label class="control-label">Nhập ảnh:  </label>
                <div>
                    <image src="" id="attachment_preview" class="hidden" width="300" />
                </div>
                <div>
                    <input type="file" name="attachment" class="form-control" onchange="product.autoLoadEl(this,'attachment_preview');"/>
                </div>
            <!-- nhập giá sản phẩm-->
                <label class="control-label">Nhập giá  </label>
                <div class="controls">
                    <input type="number" id="unitName" name="sp[sp_gia]" class="form-control input-lg">
                    <p class="help-block"></p>
                </div>
            <!-- nhập mô tả sản phẩm-->
            <div >
                <label id="intro" class="control-label" >Nhập Giới thiệu</label>
                <div class="controls">
                    <textarea type="text" rows="6" id="text_intro" name="sp[sp_intro]" class="form-control input-lg"></textarea>
                    <script>
                        CKEDITOR.replace( 'text_intro' );
                    </script>
                </div>
            </div>
            
            <div >
                <label id="design" class="control-label">Nhập Thiết kế </label>
                <div class="controls">
                    <textarea type="text" rows="6" id="text_design" name="sp[sp_design]" class="form-control input-lg"></textarea>
                    <script>
                        CKEDITOR.replace( 'text_design' );
                    </script>
                </div>
            </div>
            
            <div >
                <label id="technologi" class="control-label">Nhập Công Nghệ </label>
                <div class="controls">
                    <textarea type="text" rows="6" id="text_technologi" name="sp[sp_technologi]" class="form-control input-lg"></textarea>
                    <script>
                        CKEDITOR.replace( 'text_technologi' );
                    </script>
                </div>
            </div> 
            
            <div >
                <label  id="action" class="control-label">Nhập Vận Hành </label>
                <div class="controls">
                    <textarea type="text" rows="6" id="text_action" name="sp[sp_action]" class="form-control input-lg"></textarea>
                    <script>
                        CKEDITOR.replace( 'text_action' );
                    </script>
                </div>
            </div>
            
            <div >
                <label id="protected" class="control-label">Nhập An toàn </label>
                <div class="controls">
                    <textarea type="text" rows="6" id="text_protected" name="sp[sp_protected]" class="form-control input-lg"></textarea>
                    <script>
                        CKEDITOR.replace( 'text_protected' );
                    </script>
                </div>
            </div>
            <div >
                <label id="engine" class="control-label">Tính năng và thông số kỹ thuật </label>
                <table class="table-bordered" style="width: 100%; padding: 2px">
                    <thead>
                        <tr>
                            <th colspan="2">Động cơ và Truyền động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="controls">
                                    <textarea type="text" rows="6" id="engine_1" name="sp[sp_engine1]" class="form-control input-lg"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'engine_1' );
                                    </script>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="2">Kích thước & Khối lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="controls">
                                    <textarea type="text" rows="6" id="engine_2" name="sp[sp_engine2]" class="form-control input-lg"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'engine_2' );
                                    </script>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="2">An toàn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="controls">
                                    <textarea type="text" rows="6" id="engine_3" name="sp[sp_engine3]" class="form-control input-lg"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'engine_3' );
                                    </script>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="2">Ngoại thất</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="controls">
                                    <textarea type="text" rows="6" id="engine_4" name="sp[sp_engine4]" class="form-control input-lg"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'engine_4' );
                                    </script>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="2">Nội thất</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="controls">
                                    <textarea type="text" rows="6" id="engine_5" name="sp[sp_engine5]" class="form-control input-lg"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'engine_5' );
                                    </script>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="2">Tiện nghi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="controls">
                                    <textarea type="text" rows="6" id="engine_6" name="sp[sp_engine6]" class="form-control input-lg"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'engine_6' );
                                    </script>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="2">Màu Ngoại thất</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="controls">
                                    <textarea type="text" rows="6" id="engine_7" name="sp[sp_engine7]" class="form-control input-lg"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'engine_7' );
                                    </script>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="2">Giá bán lẻ khuyến nghị</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="controls">
                                    <textarea type="text" rows="6" id="engine_8" name="sp[sp_engine8]" class="form-control input-lg"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'engine_8' );
                                    </script>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="2">Ngoại thất</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="controls">
                                    <textarea type="text" rows="6" id="engine_9" name="sp[sp_engine1]" class="form-control input-lg"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'engine_9' );
                                    </script>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div >
                <label id="sp_list_img" class="control-label">Thư viện ảnh</label>
                <div class="controls">
                    <div class="row" id="lib_img">
                        
                    </div>
                    <input type="hidden" name="sp[sp_list_img]" id="sp_list_img_hidden" value="">
                </div>
            </div>
            </div>
        </fieldset>
</div>
    <div style="height: 15px;"></div>
    <div class="controls">
        <input type="submit" class="btn btn-success" name="submit"   value="Tạo sản phâm" >
    </div>
</form>
<div>
    <?php 
        $this->Url("masterModel");
        $this->Url("pagination");
        $model=new MasterModel();
        $rfood=$model->GetNew("attachment");
        $pagi=new Pagination();//lớp lấy hàm phân trang
        $get=$pagi->PagiCus($rfood,"attachment","");

        require_once './views/sanpham/list_img.php';
       
        $pagi->Numpage($rfood,"mngFile","Show"); ?>
</div>
<!-- jQuery -->
<script src="./style/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./style/js/bootstrap.min.js"></script>