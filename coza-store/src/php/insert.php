<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
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
        <h1>Thêm sản phẩm</h1>

        <form action="" method="POST" enctype="multipart/form-data">

            <h3>Write us</h3>
            <div><input type="text" name="btn_title" placeholder="Tiêu đề">


            </div>
            <div class="input-file"><label for="">Ảnh:</label><input type="file" name="btn_img">
           
            
            </div>
            <div class="input-file"><label for="">Ảnh 1:</label><input type="file" name="btn_img1">
            </div>
            <div class="input-file"><label for="">Ảnh 2:</label><input type="file" name="btn_img2">
            </div>
            <div class="input-file"><label for="">Ảnh 3:</label><input type="file" name="btn_img3">
            </div>
            <div><input type="text" name="btn_price" placeholder="Giá">

            </div>
            <div>
                <textarea name="btn_intro" cols="51" rows="5" placeholder="Giới thiệu"></textarea>
            </div>
            <!-- <div style="margin-top:15px;">
                <label style="font-size: 18px; color: #fff;margin-left: 5px;" for="">Size</label>
                <select name="size" id="">
                    <option value="1">Size S</option>
                    <option value="2">Size M</option>
                    <option value="3">Size L</option>
                    <option value="4">Size XL</option>
                </select>
            </div>
            <div style="margin-top:15px;">
                <label style="font-size: 18px; color: #fff;margin-left: 5px;" for="">Color</label>
                <select name="color" id="">
                    <option value="1">Red</option>
                    <option value="2">Blue</option>
                    <option value="3">White</option>
                    <option value="4">Grey</option>
                </select>
            </div> -->

            <div>
                <textarea name="btn_detail" cols="51" rows="10" placeholder="Chi tiết"></textarea>
            </div>


            <div style="margin-top:15px;">
                <label style="font-size: 18px; color: #fff;margin-left: 5px;" for="">Thể loại</label>
                <select name="category" id="">
                    <option value="1">Women</option>
                    <option value="2">Men</option>
                    <option value="3">Accessories</option>

                </select>
            </div>

            <div class="form_button"><button type="submit" name="btn_submit">Thêm</button></div>
        </form>
    </div>

    <?php
    include 'database.php';
    if (isset($_POST['btn_submit'])) {
        $title = $_POST['btn_title'];
        $price = $_POST['btn_price'];
        $intro = $_POST['btn_intro'];
        // $size = $_POST['size'];
        // $color = $_POST['color'];
        $detail = $_POST['btn_detail'];
        $category = $_POST['category'];

        $name_img = $_FILES['btn_img']['name'];
        $tmp_sever = $_FILES['btn_img']['tmp_name'];
        move_uploaded_file($tmp_sever, '../images/' . $name_img);

        $name_img1 = $_FILES['btn_img1']['name'];
        $tmp_sever = $_FILES['btn_img1']['tmp_name'];
        move_uploaded_file($tmp_sever, '../images/' . $name_img1);

        $name_img2 = $_FILES['btn_img2']['name'];
        $tmp_sever = $_FILES['btn_img2']['tmp_name'];
        move_uploaded_file($tmp_sever, '../images/' . $name_img2);

        $name_img3 = $_FILES['btn_img3']['name'];
        $tmp_sever = $_FILES['btn_img3']['tmp_name'];
        move_uploaded_file($tmp_sever, '../images/' . $name_img3);

        // kiểm tra dữ liệu
        // $titleerr = "";
        // $priceerr = "";
        // $introerr = "";
        // $detailerr = "";
        // $categoryerr = "";
        // $name_imgerr = "";
        // $name_im1gerr = "";
        // $name_im2gerr = "";
        // $name_im3gerr = "";
        // $errors = [];

        // if ($title == '' || $title <0) {
        //     $errors['btn_title'] = "Please enter product's title";
        // }
        // if (strlen($title) == 0) {
        //     $titleerr = "Please enter product's title";
        // }
        // if ($name_img['size'] <= 0) {
        //     $errors = ['btn_img'] = "Please choose an image";
            
        // }


        // if (!empty($titleerr)) {
        //     header("location: insert.php?titleerr=$titleerr");
        // }

        $sql_insert = "insert into products values(null,'$title','$name_img','$name_img1','$name_img2','$name_img3',$price,'$intro','$detail',$category)";
        $kq = $conn->prepare($sql_insert);
        if ($kq->execute()) {
            echo "Thêm sản phẩm thành công!";
            header("location: show.php");
        } else {
            echo "Không thêm được sản phẩm!";
        };
    };

    ?>
</body>

</html>