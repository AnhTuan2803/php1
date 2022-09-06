<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=tin_tuc;charset=utf8","root","");
    }catch (\Throwable $th){
        echo "Lỗi kết nối";
    }
?>