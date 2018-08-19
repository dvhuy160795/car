<?php
    class MasterModel{
        public function Get($table){
            global $conn;
            $sql="select *from $table";
            $result=$conn->query($sql) or die("not selected");
            return $result;
        }
        public function GetNew($table,$where = ""){
            global $conn;
            $sql="select *from $table $where";
            $result=$conn->query($sql) or die("not selected");
            return $result;
        }
        public function Command($sql){
            global $conn;
            //echo $sql;
            $result=$conn->query($sql) or die(mysqli_error());
            return $result;
        }
        public function Update($table,$value,$condition){
            global $conn;
            //echo "UPDATE $table SET $value WHERE $condition";
            $result=$conn->query("UPDATE $table SET $value WHERE $condition") or die(mysqli_error());
            return $result;
        }
        public function Insert($table,$col,$value){
            global $conn;
            //echo "insert into $table($col) values ($value) ";
            $result=$conn->query("insert into $table($col)values($value)") or die(mysqli_error());
            return $result;
        } 
        public function Delete($table,$condition) {
            global $conn;
           // echo "DELETE FROM `$table` WHERE $condition";
            $result=$conn->query("DELETE FROM `$table` WHERE $condition") or die(mysqli_error());
            return $result;
        }
        public function Check($table,$condition) {
            global $conn;
           // echo"select * from $table where $condition";
            $result=$conn->query("select * from $table where $condition") or die("not Check");
            return $result;
        }
        public function InsertNew($table,$data = []){
            global $conn;
            $aryCols = [];
            $aryValues = [];
            foreach ($data as $key => $value) {
                array_push($aryCols, $key);
                array_push($aryValues, $value);
            }
            $strCols = "`".implode("`,`", $aryCols)."`";
            $strValues = "'".implode("','", $aryValues)."'";
            $result = $conn->query("insert into $table($strCols)values($strValues)") or die(mysqli_error());
            return $result;
        }
        function resize_image($file, $w, $h, $crop=FALSE) {
            list($width, $height) = getimagesize($file);
            $r = $width / $height;
            if ($crop) {
                if ($width > $height) {
                    $width = ceil($width-($width*abs($r-$w/$h)));
                } else {
                    $height = ceil($height-($height*abs($r-$w/$h)));
                }
                $newwidth = $w;
                $newheight = $h;
            } else {
                if ($w/$h > $r) {
                    $newwidth = $h*$r;
                    $newheight = $h;
                } else {
                    $newheight = $w/$r;
                    $newwidth = $w;
                }
            }
            $src = imagecreatefromjpeg($file);
            $dst = imagecreatetruecolor($newwidth, $newheight);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

            return $dst;
        }
        
        public function moveFileToPath($file) {
            $microTime = microtime(true)*10000;
            $aryExtention = $this->getExtention();
            $extention = $aryExtention[$file['type']];
            $dir = "./upload/";
            $fileName = strtotime(date('Y-m-d H:i:s')).$microTime.md5($file['name']).".".$extention;
            $type = $file['type'];
            $target= $dir.$fileName;
            move_uploaded_file($file['tmp_name'],$target);

            $data['attachment_name'] = $file['name']; 
            $data['attachment_hash_name'] = $fileName; 
            $data['attachment_dir'] = $dir; 
            $data['attachment_extention'] = $extention; 
            $data['attachment_type'] = $type; 
            $data['attachment_filter_code'] = ""; 
            $data['created_at'] = date('Y/m/d'); 
            $data['updated_at'] = date('Y/m/d'); 
            return $data;
        }
        
        public function processFile() {
            $aryFiles = [];
            foreach ($_FILES['attachment'] as $key => $aryType) {
                if ($key === "error" || $key == "size") {
                    continue;
                }
                foreach ($aryType as $index => $value) {
                    if ($value === "" || $value === null) {
                        continue;
                    }
                    $aryFiles[$index][$key] = $value;
                }
            }
            foreach ($aryFiles as $file) {
                $data = $this->moveFileToPath($file);
                $this->InsertNew("attachment", $data);
            }
        }
        
        public function getExtention() {
            return [
                'image/png' => "png",
                'image/jpg' => "jpg",
                'image/jpeg' => "jpeg",
            ];
        }
    }
?>