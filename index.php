
<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b); // true потому что php язык с динамической типизацией, и в данном примере не строгое сравнение(без учета типа данных).      
    var_dump((int)'012345'); // Будет 12345 потому что php будет приводить к простому числу т.е. к 12345.  
    var_dump((float)123.0 === (int)123.0); // false потому что строегое сравнение с учетом типов данных(здесь мы явно указываем какого типа каждое значение).
    var_dump((int)0 === (int)'hello, world'); // true потому что явно указываем какого типа значения, приведение строки к числу, если строка не начинается с числа, будет равна 0 === (int)0
?>
<?php 
    $title = 'текущий год';
    $h1 = $title;
    $content = date("m.d.y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <h1><?php echo $h1 ?></h1>
    <?php echo $content ?>
</body>
</html>

<?php

$a = 1;
$b = 2;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

var_dump($a,$b);