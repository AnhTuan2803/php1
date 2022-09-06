<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>

<body>
    <div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <label for="">Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="">Image</label>
                <input type="file" name="img">
                <?php
                if (isset($_GET['imageerr'])) {
                ?>
                    <span style="color: red;"><?php echo $_GET['imageerr'] ?></span>
                <?php
                }
                ?>
                <br>
                <?php
                if (isset($_GET['imageFileTypeerr'])) {
                ?>
                    <span style="color: red;"><?php echo $_GET['imageFileTypeerr'] ?></span>
                <?php
                }
                ?>
            </div>
            <div>
                <label for="">Intro</label>
                <input type="text" name="intro">
            </div>
            <div>
                <label for="">Description</label>
                <input type="text" name="des">
            </div>

            <div>
                <label for="">Number</label>
                <input type="number" name="number">
                <?php if (isset($_GET['numbererr'])) {
                ?>
                    <span style="color:red"><?php echo $_GET['numbererr']; ?></span>
                <?php
                } ?>
            </div>
            <div>
                <label for="">Price</label>
                <input type="number" name="price">
                <?php if (isset($_GET['priceerr'])) {
                ?>
                    <span style="color:red"><?= $_GET['priceerr']; ?></span>
                <?php
                } ?>
            </div>
            <div>
                <label for="">Type</label>
                <select name="type">
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
            <div><button type="submit" name="btn_submit">Thêm</button></div>
        </form>
        <?php
        if (isset($_POST['btn_submit'])) {
            $name = $_POST['name'];
            $intro = $_POST['intro'];
            $des = $_POST['des'];
            $number = $_POST['number'];
            $price = $_POST['price'];
            $type = $_POST['type'];

            $numbererr = "";
            $priceerr = "";
            $imageerr = "";
            $imageFileTypeerr = "";

            if ($number <= 0) {
                $numbererr = "Number phải lớn hơn 0";
            }
            if ($price <= 0) {
                $priceerr = "Price phải lớn hơn 0";
            }



            $img_name = $_FILES['img']['name'];
            $tmp_sever = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp_sever, 'img/' . $img_name);

            $imageFileType = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

            if (strlen($img_name) == 0) {
                $imageerr = "Hãy thêm ảnh";
            } else {
                if ($_FILES['img']['size'] > 2000000) {
                    $imageerr = "Kích cỡ ảnh phải nhỏ hơn 2MB";
                }
                if ($imageFileType != 'jpg' && $imageFileType != 'png') {
                    $imageFileTypeerr = "Ảnh phải được định dạng jpg hoặc png";
                }
            }


            if (!empty($numbererr) || !empty($priceerr) || !empty($imageerr) || !empty($imageFileTypeerr)) {
                header("location:insert.php?numbererr=$numbererr&priceerr=$priceerr&imageerr=$imageerr&imageFileTypeerr=$imageFileTypeerr");
                die;
            }

            $sql_insert = "insert into rooms values(null,'$name','$img_name','$intro','$des',$number,$price,$type)";
            $kq_insert = $conn->prepare($sql_insert);
            if ($kq_insert->execute()) {
                echo "Them thanh cong";
                header('location:show.php');
            } else {
                echo "Khong them duoc san pham";
            }
        }
        ?>
    </div>
</body>

</html>