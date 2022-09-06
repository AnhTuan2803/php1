<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="./style.css">
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
    </style>
</head>

<body>
    <div class="container">
        <h1>Contact Form</h1>

        <form action="" method="POST" enctype="multipart/form-data">

            <h3>Write us</h3>
            <div class="input-name"><input type="text" name="btn_name" placeholder="Tiêu đề">

            </div>
            <div class="input-age"><input type="text" name="btn_age" placeholder="Giá">

            </div>
            <div class="input-address"><input type="text" name="btn_address" placeholder="Giới thiệu">

            </div>

            <div class="input-phone"><input type="text" name="btn_phone" placeholder="Nội dung">

            </div>

            <div class="input-email"><input type="text" name="btn_email" placeholder="Số trang">

            </div>
            <div style="margin-top:15px;" class="author">
                <label style="font-size: 18px; color: #fff;margin-left: 5px;" for="">Tác giả</label>
                <select name="author" id="">
                    <option value="1">Phạm Anh Tuấn</option>
                    <option value="2">Nguyễn Nhật Ánh</option>
                </select>
            </div>
            <!-- <div class="input-email"><input type="text" name="btn_tg" placeholder="Tác Giả">

            </div> -->
            <div class="input-file"><label for="">Ảnh:</label><input type="file" name="btn_img">
            </div>
            <div class="form_button"><button type="submit" name="btn_submit">Send</button></div>
        </form>
    </div>

    <?php
    // validate image
    // $image = $_FILES['btn_img'];
    // if ($image['size'] > 0) {
    //     $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
    //     if ($ext != 'jpg' && $ext != 'png') {
    //         $image_err = "Ảnh chưa đúng định dạng hihi";
    //     } else {
    //         $image_err = "Bạn chọn ảnh đi hihi";
    //     };
    // };


    include 'database.php';
    if (isset($_POST['btn_submit'])) {
        $title = $_POST['btn_name'];
        $price = $_POST['btn_age'];
        $intro = $_POST['btn_address'];
        $content = $_POST['btn_phone'];
        $page = $_POST['btn_email'];
        $author = $_POST['author'];

        $name_img = $_FILES['btn_img']['name'];
        $tmp_sever = $_FILES['btn_img']['tmp_name'];
        move_uploaded_file($tmp_sever, 'img/' . $name_img);

        $sql_insert = "insert into books values(null,'$title','$price','$name_img','$intro','$content',$page,$author)";
        $kq = $conn->prepare($sql_insert);
        if ($kq->execute()) {
            echo "Thêm sản phẩm thành công!";
            header("location:show.php");
        } else {
            echo "Không thêm được sản phẩm";
        };
    };

    ?>
</body>

</html>