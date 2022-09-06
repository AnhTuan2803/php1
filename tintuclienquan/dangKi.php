<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <h1>Contact Form</h1>

        <form action="" method="POST" enctype="multipart/form-data">

            <h3>Write us</h3>
            <div class="input-name"><input type="text" name="btn_user" placeholder="User">

            </div>
            <div class="input-age"><input type="text" name="btn_pass" placeholder="Pass">

            </div>
            <div class="input-address"><input type="text" name="btn_name" placeholder="Name">

            </div>

            <div class="input-phone"><input type="text" name="btn_email" placeholder="Email">

            </div>
            <div class="input-phone"><input type="text" name="btn_phone" placeholder="Phone">

            </div>

            <div class="input-email"><input type="date" name="btn_ngaysinh" placeholder="Ngày Sinh">

            </div>
           
            <div class="input-email"><input type="text" name="btn_phanquyen" placeholder="Phân quyền">

            </div>
            <div class="input-file"><label for="">Avata:</label><input type="file" name="btn_img">
            </div>
            <div class="form_button"><button type="submit" name="btn_submit">Send</button></div>
        </form>
    </div>

    <?php
    include 'database.php';
    if (isset($_POST['btn_submit'])) {
        $user = $_POST['btn_user'];
        $pass = sha1($_POST['btn_pass']);
        $name = $_POST['btn_name'];
        $email = $_POST['btn_email'];
        $phone = $_POST['btn_phone'];
        $ngaysinh = $_POST['btn_ngaysinh'];
        $phanquyen = $_POST['btn_phanquyen'];

        $name_img = $_FILES['btn_img']['name'];
        $tmp_sever = $_FILES['btn_img']['tmp_name'];
        move_uploaded_file($tmp_sever, 'images/' . $name_img);

        $sql_insert = "insert into tai_khoan values(null,'$user','$pass','$name','$name_img','$email','$phone','$ngaysinh',$phanquyen)";
        $kq = $conn->prepare($sql_insert);
        if ($kq->execute()) {
            echo "Thêm sản phẩm thành công!";
            header("location:login.php");
        } else {
            echo "Không thêm được sản phẩm";
        };
    };

    ?>
</body>

</html>