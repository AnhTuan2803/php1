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
        <title>Show Contact</title>
        <link rel="stylesheet" href="./show.css">
    </head>

    <body>
        <div class="container">
            <div>
                <span>Chào bạn <?php echo $_SESSION['btn_user'] ?></span>
                <a href="./logout.php">Đăng xuất</a>
            </div>
            <h2>Hiển thị sách</h2>
            <table border="1">
                <tr class="tr1">
                    <td>STT</td>
                    <td>Tiêu đề</td>
                    <td>giá</td>
                    <td>Ảnh</td>
                    <td>Giới thiệu</td>
                    <td>Nội dung</td>
                    <td>Số trang</td>
                    <td>Tác giả</td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                include 'database.php';
                $sql = "select * from books inner join authors on books.author_id = authors.author_id";
                $kq = $conn->query($sql);
                foreach ($kq as $key => $row) {
                ?>
                    <tr>
                        <td class="font-bold text-center"><?php echo $row['book_id'] ?></td>
                        <td class=""><?php echo $row['book_title'] ?></td>
                        <td class=""><?php echo $row['price'] ?></td>
                        <td class="text-center"><?php echo "<img src = '" . "img/" . $row['image'] . "' width = '50px' >" ?></td>
                        <td class=""><?php echo $row['intro'] ?></td>
                        <td class=""><?php echo $row['content'] ?></td>
                        <td class=""><?php echo $row['page'] ?></td>
                        <td class=""><?php echo $row['fullname'] ?></td>
                        <td class="text-center"><a href="./update.php?book_id=<?php echo $row['book_id'] ?>">Sửa</a></td>
                        <td class="text-center"><a onclick="return confirm('Xóa không ?')" href="./delete.php?book_id=<?php echo $row['book_id'] ?>">Xóa</a></td>

                    </tr>
                <?php
                };
                ?>
            </table>
            <div class="sup-a"><a href="./news.php">Thêm mới sách</a></div>
        </div>
    </body>

    </html>
<?php } else {
    echo "Bạn phải đăng nhập mới vào được trang quản trị ".'<a href="./login.php">Đăng nhập</a>';
}
?>