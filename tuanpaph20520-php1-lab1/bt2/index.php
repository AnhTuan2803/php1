<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bt2</title>
</head>

<body>
    <?php
    $arr = [
        "green" => "Dòng màu xanh",
        "red" => "Dòng màu đỏ",
        "blue" => "Dòng màu xanh da trời",
        "brown" => "Dòng màu nâu",
        "yellow" => "Dòng màu vàng",
        "purple" => "Dòng màu tím",
        "gray" => "Dòng màu xám",
    ];
    ?>
    <table border=1>
        <tr style="text-align: center;">
            <td>color</td>
        </tr>
        <?php
        foreach ($arr as $key => $value) {
        ?>
            <tr>
                <td style="background-color: <?php echo $key ?>;"><?php echo $value ?></td>
            </tr>

        <?php
        }
        ?>
    </table>
</body>

</html>