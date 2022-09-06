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
    <div class="max-w-80 mx-auto m-5 border-1 p-4">
        <h2 class="text-center font-bold text-[20px] mb-4">Tính diện tích tam giác</h2>
        <form class="space-y-4 text-center" action="" method="GET">
            <div class="space-x-4 text-[14px] font-bold"><label for="">Cạnh A</label><input class="border-[1px]" type="text" name="canha"></div>
            <div class="space-x-4 text-[14px] font-bold"><label for="">Cạnh B</label><input class="border-[1px]" type="text" name="canhb"></div>
            <div class="space-x-4 text-[14px] font-bold"><label for="">Cạnh C</label><input class="border-[1px]" type="text" name="canhc"></div>
            <div><button class="rounded bg-[#000000] text-[14px] font-bold text-[#fff] px-4 py-1" name="btn_tinh" value="tinh" type="submit">Tính</button></div>
        </form>
        <?php
        function test($a, $b, $c)
        {

            if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
                return true;
            } else {
                return false;
            }
        };
        function area($a, $b, $c)
        {
            $p = ($a + $b + $c) / 2;
            $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
            return $s;
        }
        if (isset($_GET['btn-tinh'])) {
            $canhA = $_GET['canha'];
            $canhB = $_GET['canhb'];
            $canhC = $_GET['canhc'];
            if (test($canha, $canhb, $canhc)) {
                echo "Diện tích tam giác là: " . area($canha, $canhb, $canhc);
            } else {
                echo "3 cạnh trên không lập thành một tam giác";
            };
        };

        ?>
    </div>
</body>

</html>