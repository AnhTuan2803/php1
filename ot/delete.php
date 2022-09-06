<?php
    include 'database.php';
        if(isset($_GET['room_id'])){
            $room_id = $_GET['room_id'];
            $sql = "delete from rooms where room_id = $room_id";
            $kq = $conn->query($sql)->fetch();
        }
        header('location:show.php');
