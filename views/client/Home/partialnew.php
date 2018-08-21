<?php
   require_once './controllers/Home.php';
   $control1= new Home();
   $row=$control1->PartiNew();
   foreach ($row as $r) {?>
<fieldset style="margin-top: -60px">
    <legend style="font-size: 20px; color: #1b6d85"><a style="text-decoration: none;    font-weight: bold;
    color: wheat;
    font-size: 18px;" href="?control=Home&action=Tintuc"><?=$r['tt_tieude']?></a></legend>
</fieldset>
<?php
}
?>