<?php
include 'database.php';
if (isset($_GET['room_id'])) {
    $room_id = $_GET['room_id'];
    $sql = "select * from rooms where room_id = $room_id";
    $kq = $conn->query($sql)->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div style="display: none;">
                <label for="">ID</label>
                <input type="text" name="id" value="<?php echo $kq['room_id'] ?>">
            </div>
            <div>
                <label for="">Name</label>
                <input type="text" name="name" value="<?php echo $kq['room_name'] ?>">
            </div>
            <div>
                <label for="">Image</label>
                <img style="width:50px" src="img/<?php echo $kq['image'] ?>" alt="">
                <input type="file" name="img">

            </div>
            <div>
                <label for="">Intro</label>
                <input type="text" name="intro" value="<?php echo $kq['intro'] ?>">
            </div>
            <div>
                <label for="">Description</label>
                <input type="text" name="des" value="<?php echo $kq['description'] ?>">
            </div>

            <div>
                <label for="">Number</label>
                <input type="number" name="number" value="<?php echo $kq['number'] ?>">
                <?php if (isset($_GET['numbererr'])) {
                ?>
                    <span style="color:red"><?php echo $_GET['numbererr']; ?></span>
                <?php
                } ?>
            </div>
            <div>
                <label for="">Price</label>
                <input type="number" name="price" value="<?php echo $kq['price'] ?>">
                <?php if (isset($_GET['priceerr'])) {
                ?>
                    <span style="color:red"><?php echo $_GET['priceerr']; ?></span>
                <?php
                } ?>
            </div>
            <div>
                <label for="">Type</label>
                <select name="type">
                    <option value="<?php echo $kq['type_id'] ?>">Loại Phòng</option>
                    <?php
                    $sql_type = 'select * from types';
                    $kq_type = $conn->query($sql_type);
                    foreach ($kq_type as $key => $value) {
                    ?>
                        <option value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
            <div><button type="submit" name="btn_submit">Sửa</button></div>
        </form>
        <?php
        if (isset($_POST['btn_submit'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $intro = $_POST['intro'];
            $des = $_POST['des'];
            $number = $_POST['number'];
            $price = $_POST['price'];
            $type = $_POST['type'];

            $numbererr = "";
            $priceerr = "";

            if ($number <= 0) {
                $numbererr = "Number phải lớn hơn 0";
            }
            if ($price <= 0) {
                $priceerr = "Price phải lớn hơn 0";
            }

            if (!empty($numbererr) || !empty($priceerr)) {
                header("location:update.php?numbererr=$numbererr&priceerr=$priceerr");
                die;
            }

            $img_name = $_FILES['img']['name'];

            if (empty($img_name)) {
                $sql_update = "update rooms set room_name = '$name',intro = '$intro',description = '$des',number = $number,price = $price, type_id = $type where room_id = $id";
            } else {
                // $img_name = $_FILES['img']['name'];
                $tmp_sever = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp_sever, 'img/' . $img_name);
                $sql_update = "update rooms set room_name = '$name',image = '$img_name',intro = '$intro',description = '$des',number = $number,price = $price, type_id = $type where room_id = $id";
            }

            $kq_update = $conn->prepare($sql_update);
            if ($kq_update->execute()) {
                echo "Sua thanh cong";
                header('location:show.php');
            } else {
                echo "Khong sua duoc san pham";
            }
        }
        ?>
    </div>
</body>

</html>