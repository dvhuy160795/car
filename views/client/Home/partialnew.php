<?php
   require_once './controllers/Home.php';
   $control1= new Home();
   $row=$control1->PartiNew();
   foreach ($row as $r) {?>
<fieldset>
    <legend style="font-size: 18px; color: #1b6d85"><a style="text-decoration: none" href="?control=Home&action=Tintuc"><?=$r['tt_tieude']?></a></legend>
    <p><?php 
                        $mt=$r['tt_noidung'];
                          $maxchar="200";
                          $outchar="150";
                          if(strlen($mt)>$maxchar){
                              $out=mb_substr($mt, 0, $outchar, "UTF-8");
                            while(substr($out, -1) != " ") { $out = substr($out, 0, strlen($out)-1); }
                            $mt=$out."...";
                          }
                          echo $mt;

    ?></p>
</fieldset>
<?php
}
?>