<?php
include 'database.php';
if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];
    $sql = "select * from books where book_id=$book_id";
    $kq = $conn->query($sql)->fetch();
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        select{
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
        option{
            color: #272A34;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Contact Form</h1>

        <form action="" method="POST" enctype="multipart/form-data">

            <h3>Write us</h3>
            <div style="display: none" class="input-name"><input type="text" name="btn_id" value="<?php echo $kq['book_id'] ?>" placeholder="id">

            </div>
            <div class="input-name"><input type="text" name="btn_name" value="<?php echo $kq['book_title'] ?>" placeholder="Tiêu đề">

            </div>
            <div class="input-age"><input type="text" name="btn_age" value="<?php echo $kq['price'] ?>" placeholder="Giá">

            </div>
            <div class="input-address"><input type="text" name="btn_address" value="<?php echo $kq['intro'] ?>" placeholder="Giới thiệu">

            </div>

            <div class="input-phone"><input type="text" name="btn_phone" value="<?php echo $kq['content'] ?>" placeholder="Nội dung">

            </div>

            <div class="input-email"><input type="text" name="btn_email" value="<?php echo $kq['page'] ?>" placeholder="Số trang">

            </div>
            <div class="author">
                <select name="author" id="">
                    <option value="0" >Tác giả</option>
                    <option value="1">Phạm Anh Tuấn</option>
                    <option value="2">Nguyễn Nhật Ánh</option>
                </select>
            </div>
            <!-- <div class="input-email"><input type="text" name="btn_tg" placeholder="Tác Giả">

            </div> -->
            <div><img style="width: 100px; margin-top: 15px;" src="./img/<?php echo $kq['image'] ?>" alt=""></div>
            <div class="input-file"><label for="">Ảnh:</label><input type="file" name="btn_img"></div>
            <div class="form_button"><button type="submit" name="btn_submit">Send</button></div>
        </form>
        <?php
        if (isset($_POST['btn_submit'])) {
            $id = $_POST['btn_id'];
            $title = $_POST['btn_name'];
            $price = $_POST['btn_age'];
            $intro = $_POST['btn_address'];
            $content = $_POST['btn_phone'];
            $page = $_POST['btn_email']; 
            // $author = $_POST['author'];
            if($_POST['author']==0){
                $author = $kq['author_id'];
            }else{
                $author = $_POST['author'];
            }

            $sql_update = "update books set book_title='$title',price='$price',intro='$intro',content='$content',page='$page',author_id='$author' where book_id='$id'";

            $kq_update = $conn->prepare($sql_update);
            if ($kq_update->execute()) {
                header("Location:show.php");
            } else {
                echo "Không sửa được sản phẩm";
            }
        };
        ?>
    </div>
</body>

</html>