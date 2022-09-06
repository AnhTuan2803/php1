<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=lab-3-4;charset=utf8","root","");
    }catch (\Throwable $th){
        echo "Lỗi kết nối";
    }
?>