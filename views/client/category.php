<p class="lead">Danh mục hãng sản xuất</p>
 <div class="list-group">
                    <?php foreach ($cate as $t) {?>
                    <a href="?control=Home&action=Search&id=<?=$t['hsx_id']?>" class="list-group-item"><?=$t['hsx_ten']?></a>
                    <?php }?>
 </div>
<p class="lead">Loại sản phẩm</p>
 <div class="list-group">
                    <?php foreach ($drive as $t) {?>
                    <a href="?control=Home&action=Search_lsp&id=<?=$t['lsp_id']?>" class="list-group-item"><?=$t['lsp_ten']?></a>
                    <?php }?>
 </div>