<?php
ob_start();
include 'database.php';
if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    $sql = "select * from products where pro_id=$pro_id";
    $kq = $conn->query($sql)->fetch();
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../css/css.css">
    <style>
        select {
            background: transparent;
            outline: 2px solid transparent;
            outline-offset: 2px;
            width: 98%;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 0;
            font-size: 16px;
            height: 52px;
            color: rgba(255, 255, 255, 0.8) !important;
            transition: .3s;
        }

        option {
            color: #272A34;
        }

        textarea {
            outline: 2px solid transparent;
            outline-offset: 2px;
            width: 98%;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 0;
            font-size: 16px;
            /* height: 5px; */
            background: transparent;
            color: rgba(255, 255, 255, 0.8) !important;
            transition: .3s;
        }

        textarea:focus {
            border-color: #D67A0C;
            transition: .4s;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Sửa sản phẩm</h1>

        <form action="" method="POST" enctype="multipart/form-data">

            <h3>Write us</h3>
            <div style="display: none"><input type="text" name="btn_id" value="<?php echo $kq['pro_id'] ?>" placeholder="Id">

            </div>
            <div><input type="text" name="btn_title" value="<?php echo $kq['title'] ?>" placeholder="Tiêu đề">

            </div>
            <div><img style="width: 100px; margin-top: 15px;" src="./img/<?php echo $kq['image'] ?>" alt=""></div>
            <div class="input-file"><label for="">Ảnh:</label><input type="file" name="btn_img">
            </div>
            <div><img style="width: 100px; margin-top: 15px;" src="./img/<?php echo $kq['sup_img1'] ?>" alt=""></div>
            <div class="input-file"><label for="">Ảnh 1:</label><input type="file" name="btn_img1">
            </div>
            <div><img style="width: 100px; margin-top: 15px;" src="./img/<?php echo $kq['sup_img2'] ?>" alt=""></div>
            <div class="input-file"><label for="">Ảnh 2:</label><input type="file" name="btn_img2">
            </div>
            <div><img style="width: 100px; margin-top: 15px;" src="./img/<?php echo $kq['sup_img3'] ?>" alt=""></div>
            <div class="input-file"><label for="">Ảnh 3:</label><input type="file" name="btn_img3">
            </div>
            <div><input type="text" name="btn_price" value="<?php echo $kq['price'] ?>" placeholder="Giá">

            </div>
            <div>
                <textarea name="btn_intro" cols="51" rows="5" placeholder="Giới thiệu"><?php echo $kq['intro'] ?></textarea>
            </div>
            <!-- <div style="margin-top:15px;">
                <label style="font-size: 18px; color: #fff;margin-left: 5px;" for="">Size</label>
                <select name="size" id="">
                    <option value="0">Size</option>
                    <option value="1">Size S</option>
                    <option value="2">Size M</option>
                    <option value="3">Size L</option>
                    <option value="4">Size XL</option>
                </select>
            </div>
            <div style="margin-top:15px;">
                <label style="font-size: 18px; color: #fff;margin-left: 5px;" for="">Color</label>
                <select name="color" id="">
                    <option value="0">Color</option>
                    <option value="1">Red</option>
                    <option value="2">Blue</option>
                    <option value="3">White</option>
                    <option value="4">Grey</option>
                </select>
            </div> -->

            <div>
                <textarea name="btn_detail" cols="51" rows="10" placeholder="Chi tiết"><?php echo $kq['detail'] ?></textarea>
            </div>


            <div style="margin-top:15px;">
                <label style="font-size: 18px; color: #fff;margin-left: 5px;" for="">Thể loại</label>
                <select name="category" id="">
                    <option value="0">Thể loại</option>
                    <option value="1">Women</option>
                    <option value="2">Men</option>
                    <option value="3">Accessories</option>
                </select>
            </div>

            <div class="form_button"><button type="submit" name="btn_submit">Sửa</button></div>
        </form>
        <?php
        if (isset($_POST['btn_submit'])) {
            $id = $_POST['btn_id'];
            $title = $_POST['btn_title'];
            $price = $_POST['btn_price'];
            $intro = $_POST['btn_intro'];
            // $size = $_POST['size'];
            // $color = $_POST['color'];
            $detail = $_POST['btn_detail'];
            // $category = $_POST['category'];
            if ($_POST['category']==0) {
                $category = $kq['cate_id'];
            } else {
                $category = $_POST['category'];
            }

            // if ($_POST['size'] == 0) {
            //     $size = $kq['size'];
            // } else {
            //     $size = $_POST['size'];
            // }

            // if ($_POST['color'] == 0) {
            //     $color = $kq['color'];
            // } else {
            //     $color = $_POST['color'];
            // }


            $sql_update = "update products set title='$title',price=$price,intro='$intro',detail='$detail',cate_id=$category where pro_id = $id";

            $kq_update = $conn->prepare($sql_update);
            if ($kq_update->execute()) {
                header("Location:show.php");
            } else {
                echo "Không sửa được sản phẩm!";
            }
        };
        ?>
    </div>
</body>

</html>