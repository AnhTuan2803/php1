<?php
include 'database.php';
if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];
    $sql = "delete from books where book_id=$book_id";
    $kq = $conn->query($sql)->fetch();
};
    header("Location:show.php");
?>