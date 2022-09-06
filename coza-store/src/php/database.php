<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=csdl_asm;charset=utf8","root","");
    }catch (\Throwable $th){
        echo "Lỗi kết nối!";
    }
    
?>