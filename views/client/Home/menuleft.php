<?php
include_once './controllers/Home.php';
$left= new Home();
$left->Select_Category();

?>
                <div style="width: 100%; height: 40px;" >
                    <h4>Tìm kiếm:</h4>
                        <form method="post" action="?control=Home&action=Keyword&keyword">
                            <input class="form-control" type="search" name="keyword">
                            <input class="btn-default" style="width: 80px;margin-left: 50px;margin-top: 5px" type="submit" value="search" name="btn">
                        </form>
                </div>
                
                <div class="dropdown" style="margin-top: 70px" >
                    <button  class="btn btn-default" type="button" data-toggle="dropdown">Sắp xếp
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a onclick="location='?control=Home&action=Asc'">Giá tăng dần <span class="glyphicon glyphicon-arrow-up"></span> </a></li>
                      <li><a onclick="location='?control=Home&action=Desc'">Giá giảm dần <span class="glyphicon glyphicon-arrow-down"></span> </a></li>
                    </ul>
                    
                </div>

