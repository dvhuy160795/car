<?php 
    require_once './models/Select_product.php';
    $get=new Product();//lớp lấy kết quả truy vấn
    $reSults=$get->Getall();
?>
<script>
    function info(n){
       var showinfo=document.getElementById("showinfo");
       if(n!=1){showinfo.style.display="none";}
       else{
           showinfo.style.display="block";  
       }
    }
    function outinfo(){
        var showinfo=document.getElementById("showinfo");
        showinfo.style.display="none";
    }
</script>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top col-md-12 bg-light" role="navigation" style="position: fixed; z-index: 10">
        <div class="container col-md-12">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light col-md-12">
                <a class="navbar-brand" href="?">
                    <img style="width: 173px;margin-top: -10px;" src="<?php echo LOCATION_URL_PUBLIC."/style/template/img/logo.png";  ?>">
                </a>
                <a class="navbar-brand" href="#" style="text-transform: uppercase; font-weight: bold; font-size: 40px">Cherolet Dương Bảo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link text-muted" style="font-size: 30px" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <div class="dropdown">
                          <a class="btn text-muted dropdown-toggle" href="#" style="font-size: 30px" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Sản phẩm
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width: 500px; overflow-y: auto; max-height: 300px">
                            <?php 
                            foreach ($reSults as $key => $row) { ?>
                                <a class="dropdown-item" href="?control=Car&action=product&id=<?php echo $row['sp_id']; ?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img style="width: 150px;" src="<?php echo LOCATION_URL_UPLOAD.$row['sp_img_path'];  ?>">
                                        </div>
                                        <div class="col-md-3" style="padding: 15px;">
                                            <label style="text-transform: uppercase; font-weight: bold; color: red;"><?php echo $row['sp_ten']; ?></label><br>
                                        </div>
                                        <div class="col-md-4" style="padding: 15px;">
                                            <label style="text-transform: uppercase; font-weight: bold; color: #9f9f9f;"><?php echo $row['sp_gia']; ?>Triệu</label>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted" style="font-size: 30px" href="#">Dịch vụ</a>
                    </li>
                  </ul>
                  <span class="navbar-text">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                  </span>
                </div>
            </nav>
        </div>
        
        <!-- /.container -->
    </nav>
