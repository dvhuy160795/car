<h1 align="center">Nhập thông tin người mới</h1>
<form method="post" enctype="multipart/form-data">
<table  style="width: 80%;; text-align: center" align="center" class="tab-content">
    
    
        <tr>
            <td>
                Họ và tên:
                <br>
                <input class="form-control" type="text" name="ht" placeholder="Ví dụ: Nguyễn Văn A">
            </td>
            <td>
                Năm sinh:
                <br>
                <input class="form-control" type="text" name="ye" placeholder="Ví dụ: 1995">
            </td>
        </tr>
        <tr>
            <td>Email:
            <br>
                <input class="form-control" type="text" name="email" placeholder="Ví dụ: yourname@gmail.com">
            </td>
            <td>Số điện thoại:
                <br>
                <input class="form-control" type="text" name="sdt" placeholder="Ví dụ: 0123456789">
            </td>
        </tr>
        <tr>
            <td>Quê quán:
                <br>
                <input class="form-control" type="text" name="qq" >
            </td>
            <td>Bộ phận
                <select name="bp" class="form-control">
                    <?php foreach ($getbp as $val) { ?>
                    <option value="<?=$val['bp_id']?>"><?=$val['bp_tenbophan']?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Ảnh:
                <div class="control-group">
                                    <!-- nhập ảnh sản phẩm-->
                                        <label class="control-label" >Ảnh</label>
                                        <input type="file" id="fileupload" name="fileupload" onchange="uploadfile(this)" >
                                        <img style="width:30%; border-radius:20%"  id="image_upload" >
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
            </td>
            <td>Mô tả:
                <textarea name="mt" style="width:100%;height: 100%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>Tên đăng nhập:
            <br>
                <input class="form-control" type="text" name="tdn" >
            </td>
            <td>Mật Khẩu:
                <br>
                <input class="form-control" type="password" name="pass" >
            </td>
        </tr>
    <tr>
        <td colspan="2">
                <input type="submit" value="Tạo tài khoản" name="sb">
            </td>
        </tr>
</table>
</form>
<style>
    table tr td{
        font-family: sans-serif;
        font-weight: bold; 
    }
</style>

