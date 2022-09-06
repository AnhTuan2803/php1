<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1</title>
</head>

<body>
    <?php
    $sv = [["stt" => "1", "masv" => "PH001", "tensv" => "tuan", "diem" => "11"], ["stt" => "2", "masv" => "PH002", "tensv" => "phuong", "diem" => "9"], ["stt" => "3", "masv" => "PH003", "tensv" => "ngoc", "diem" => "8"], ["stt" => "4", "masv" => "PH004", "tensv" => "ngoc", "diem" => "8.5"]];
    ?>
    <table border=1>
        <tr>
            <td>STT</td>
            <td>Ma SV</td>
            <td>Ten SV</td>
            <td>Diem</td>
        </tr>
        <?php
        foreach ($sv as $key => $value) {
        ?>
            <tr>
                <td><?php echo $value["stt"] ?></td>
                <td><?php echo $value["masv"] ?></td>
                <td><?php echo $value["tensv"] ?></td>
                <td><?php echo $value["diem"] ?></td>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>