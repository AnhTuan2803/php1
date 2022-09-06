<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bt3</title>
</head>

<body>

    <form action="" method='POST'>
        <label for="">n</label>
        <input type="text" name='number'>
        <button type="submit">Liệt Kê</button>
        <div style='display:flex; gap: 10px'>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                for ($i = 1; $i <= $_POST['number']; $i++) {
                    echo '<table border="1"><tr>';

                    for ($j = 1; $j <= 10; $j++) {
                        echo '<tr><td>' . $i . 'x' . $j . '= ' . $i * $j . '</td></tr>';
                    }
                    echo '</tr></table>';
                }
            }
            ?>
        </div>
    </form>
</body>

</html>