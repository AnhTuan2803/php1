<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>

<body>
    <div>
        <table border="1" cellspacing="0" cellpadding="" width="100%" height="100%">
            <tr>
                <td>STT</td>
                <td>name</td>
                <td>image</td>
                <td>intro</td>
                <td>description</td>
                <td>number</td>
                <td>price</td>
                <td>type</td>
                <td></td>
                <td></td>
            </tr>
            <?php
            include 'database.php';
            $sql = 'select * from rooms inner join types on rooms.type_id = types.type_id';
            $kq = $conn->query($sql);
            foreach ($kq as $key => $value) {
            ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $value['room_name'] ?></td>
                    <td><img style="width: 50px" src="img/<?php echo $value['image'] ?>" alt=""></td>
                    <td><?php echo $value['intro'] ?></td>
                    <td><?php echo $value['description'] ?></td>
                    <td><?php echo $value['number'] ?></td>
                    <td><?php echo $value['price'] ?></td>
                    <td><?php echo $value['type_name'] ?></td>
                    <td><a href="./update.php?room_id=<?php echo $value['room_id'] ?>">Sửa</a></td>
                    <td><a onclick="return confirm('Bạn muốn xóa ?')" href="./delete.php?room_id=<?php echo $value['room_id'] ?>">Xóa</a></td>
                </tr>
            <?php
            }
            ?>

        </table>
        <div><a href="./insert.php">Thêm Mới</a></div>
    </div>
</body>

</html>