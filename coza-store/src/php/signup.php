<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="../css/css.css">
</head>

<body>
    <div class="container">
        <h1>Đăng kí</h1>

        <form action="" method="POST" enctype="multipart/form-data">

            <h3>Write us</h3>
            <div><input type="text" name="btn_user" placeholder="User">
            </div>
            <div><input type="text" name="btn_pass" placeholder="Password">
            </div>
            <div><input type="text" name="btn_name" placeholder="Name">

            </div>
            <div><input type="text" name="btn_email" placeholder="Email">

            </div>
            <div><input type="text" name="btn_phone" placeholder="Phone">

            </div>

            <div class="input-file"><label for="">Avata:</label><input type="file" name="btn_img">
            </div>
            <div class="form_button"><button type="submit" name="btn_submit">Đăng kí</button></div>
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

        $name_img = $_FILES['btn_img']['name'];
        $tmp_sever = $_FILES['btn_img']['tmp_name'];
        move_uploaded_file($tmp_sever, '../images/' . $name_img);

        $sql_insert = "insert into acc values(null,'$user','$pass','$name','$email','$phone','$name_img')";
        $kq = $conn->prepare($sql_insert);
        if ($kq->execute()) {
            echo "Đăng kí thành công!";
            header("location:login.php");
        } else {
            echo "Đăng kí không thành công!";
        };
    };

    ?>
</body>

</html>