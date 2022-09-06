<?php
include 'database.php';
if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    $sql = "delete from products where pro_id = $pro_id";
    $kq = $conn->query($sql)->fetch();
};
    header("Location:show.php");
?>