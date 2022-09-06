<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/css.css">
</head>

<body>
    <div class="container">
        <h1>Đăng nhập</h1>

        <form action="" method="POST">

            <div><input type="text" name="btn_user" placeholder="User">

            </div>
            <div><input type="password" name="btn_pass" placeholder="Password">

            </div>

            <div class="form_button"><button type="submit" name="btn_submit">Đăng nhập</button><a href="./signup.php">Đăng kí</a></div>
        </form>
    </div>
    <?php
    include 'database.php';
    if (isset($_POST['btn_submit'])) {
        $user = $_POST['btn_user'];
        $pass = sha1($_POST['btn_pass']);
        $sql = "select * from acc where user = '$user' and pass = '$pass'";
        $kq = $conn->query($sql);
        if ($kq->rowcount() == 1) {
            $_SESSION['btn_user'] = $user;
            header("location: show.php");
        } else {
            echo "Đăng nhập không thành công!";
        }
    }

    ?>
</body>

</html>