<?php
    class MasterModel{
        public function Get($table){
            global $conn;
            $sql="select *from $table";
            $result=$conn->query($sql) or die("not selected");
            return $result;
        }
        public function Command($sql){
            global $conn;
           //echo $sql;
           $result=$conn->query($sql) or die(mysqli_error());
            return $result;
        }
        public function Check($table,$condition) {
            global $conn;
           // echo"select * from $table where $condition";
            $result=$conn->query("select * from $table where $condition") or die("not Check");
            return $result;
        }
        public function Insert($table,$col,$value){
            global $conn;
            //echo "insert into $table($col) values ($value) ";
            $result=$conn->query("insert into $table($col)values($value)") or die(mysqli_error());
            return $result;
        } 
    }
?>