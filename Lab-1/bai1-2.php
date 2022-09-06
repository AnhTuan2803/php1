<!-- Toán tử -->
<?php
$x = (2 == 3);
$x = (2 != 3);
$x = (2 <> 3);
$x = (2 === 3);
$x = (2 !== 3);
$x = (2 > 3);
$x = (2 < 3);
$x = (2 >= 3);
$x = (2 <= 3);
?>

<!-- Chuỗi (string) -->
<?php
$s = "Hello\nWorld";
echo $s;
$s = 'It\'s\n'; //"It's"
echo $s;
echo "\nHello<br>World";
echo "\u{00C2A9}"; //
echo "\u{C2A9}"; //
?>

<?php
$a = 'Hello';
$$a = 'World'; //<=> $hello = 'world';

echo "$a ${$a} <br>"; //<=> echo "$a $hello";
?>

<!-- Bài 3 -->
<?php
$a = 10;
$b = 20;
$c = $a + $b;
echo "Tổng: $c";
?>