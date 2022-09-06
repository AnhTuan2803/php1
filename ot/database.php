<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=ot;charset=utf8","root","");
    }catch(\Throwable $th){
        echo "Kết nối lỗi!";
    }
    