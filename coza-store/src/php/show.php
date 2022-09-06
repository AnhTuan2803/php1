<?php
session_start();
if (isset($_SESSION['btn_user'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show</title>
        <link rel="stylesheet" href="../css/show.css">
    </head>

    <body>
        <div class="container">
            <div>
                <span>Xin chào <?php echo $_SESSION['btn_user'] ?></span>
                <a href="./logout.php">Đăng xuất</a>
            </div>
            <h2>Hiển thị sản phẩm</h2>
            <table border="1">
                <tr class="tr1">
                    <td>STT</td>
                    <td>Tiêu đề</td>

                    <td>Ảnh</td>
                    <td>Ảnh 1</td>
                    <td>Ảnh 2</td>
                    <td>Ảnh 3</td>
                    <td>Giá</td>
                    <td>Giới thiệu</td>
                    <!-- <td>Size</td>
                    <td>Color</td> -->
                    <td>Chi tiết</td>
                    <td>Thể loại</td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                include 'database.php';
                $sql = "select * from products inner join category on products.cate_id = category.cate_id";

               $kq = $conn->query($sql);

                // var_dump($user);
                 foreach ($kq as $key => $row){
                     ?>

                    <tr>
                        <td class="font-bold text-center"><?php echo $row['pro_id'] ?></td>
                        <td class=""><?= $row['title'] ?></td>
                        <td class="text-center"><?php echo "<img src = '" . "../images/" . $row['image'] . "' width = '50px' >" ?></td>
                        <td class="text-center"><?php echo "<img src = '" . "../images/" . $row['sup_img1'] . "' width = '50px' >" ?></td>
                        <td class="text-center"><?php echo "<img src = '" . "../images/" . $row['sup_img2'] . "' width = '50px' >" ?></td>
                        <td class="text-center"><?php echo "<img src = '" . "../images/" . $row['sup_img3'] . "' width = '50px' >" ?></td>
                        <td class=""><?php echo $row['price'] ?></td>

                        <td class=""><?php echo $row['intro'] ?></td>
                       
                        <td class=""><?php echo $row['detail'] ?></td>
                        <td class=""><?php echo $row['cate_name'] ?></td>
                        <td class="text-center"><a href="./update.php?pro_id=<?php echo $row['pro_id'] ?>">Sửa</a></td>
                        <td class="text-center"><a onclick="return confirm('Bạn muốn xóa sản phẩm này không?')" href="./delete.php?pro_id=<?php echo $row['pro_id'] ?>">Xóa</a></td>

                    </tr>
                <?php
                 };
                ?>
            </table>
            <div class="sup-a"><a href="./insert.php">Thêm sản phẩm</a></div>
        </div>
    </body>

    </html>
<?php } else {
    header("location:login.php");
    // echo "Bạn phải đăng nhập mới vào được trang quản trị " . '<a href="./login.php">Đăng nhập</a>';
}
?>