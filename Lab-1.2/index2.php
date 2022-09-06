<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="grid grid-cols-2 gap-4 max-w-2xl mx-auto my-10">
        <div class="border-4 p-4 relative">
            <form class=" space-y-4" action="" method="POST">
                <h2 class="font-bold text-[20px] text-center">Hóa đơn</h2>
                <div class="text-[14px] font-bold"><label for="">Tên khách</label><input class="border absolute right-5" type="text" name="ten"></div>
                <div class=" text-[14px] font-bold"><label for="">Email</label><input class="border absolute right-5" type="text" name="email"></div>
                <div class="text-[14px] font-bold"><label for="">SĐT</label><input class="border absolute right-5" type="text" name="sdt"></div>
                <div class="text-[14px] font-bold"><label for="">Tên SP </label><input class="border absolute right-5" type="text" name="tenSP"></div>
                <div class=" text-[14px] font-bold"><label for="">Giá</label><input class="border absolute right-5" type="text" name="gia"></div>
                <div class="text-[14px] font-bold"><label for="">Số lượng</label><input class="border absolute right-5" type="text" name="sl"></div>
                <div class="text-center"><button class="rounded bg-[#000000] text-[14px] font-bold text-[#fff] px-4 py-2" type="submit" value="thanhTien" name="_thanhTien">Thành tiền</button></div>
            </form>
        </div>
        <div class="text-[14px] font-bold my-10">
            <?php
            if (isset($_POST['_thanhTien'])) {
                $tenKhach = $_POST['ten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $tenSP = $_POST['tenSP'];
                $gia = $_POST['gia'];
                $soLuong = $_POST['sl'];
                $thanhTien = $soLuong * $gia;
                echo "Tên khách: $tenKhach<br>";
                echo "Email: $email<br>";
                echo "SĐT: $sdt<br>";
                echo "Tên SP: $tenSP<br>";
                echo "Giá: $gia<br>";
                echo "Số lượng: $soLuong<br>";
                echo "Thành tiền: $thanhTien";
            };
            ?>
        </div>
    </div>
</body>

</html>