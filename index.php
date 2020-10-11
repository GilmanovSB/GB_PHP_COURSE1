
<?php

// task1

$a = 34;
$b = 13;

if($a >= 0 && $b >= 0){
    echo $a - $b;
}
else if($a < 0 && $b < 0){
    echo $a * $b;
} else {
    echo $a + $b;
}

//task2

function sum(float $a, float $b) : float
{
    return $a + $b;
}

function multiply(float $a, float $b) : float
{
    return $a * $b;
}

function diff(float $a, float $b) : float
{
    return $a - $b;
}

function division(float $a, float $b) : float
{
    return $a / $b;
}

var_dump(sum(1,3));
var_dump(multiply(1,3));
var_dump(diff(1,3));
var_dump(division(1,3));

//task3

function mathOperation(float $a, float $b, string $operation) : float
{
    switch ($operation) {
        case 'sum' : return sum($a,$b); // Так как используется return думаю break использовать нет необходимости?
        case 'multiply' : return multiply($a,$b);
        case 'diff' : return diff($a,$b);
        case 'division' : return division($a,$b);
    }
}

var_dump(mathOperation(12321, 3.14, 'sum'));

//task5

function power(int $val, int $pow):int
{
    if($pow == 0){
        return 1;
    }
    else if($pow < 0){
        echo 'отрицательная степень была изменена на положительную';
        return $val * power($val, ($pow * -1) - 1);
    }
    return $val * power($val, $pow - 1);

}

var_dump(power(5,2));

//task6

function getTime() : string
{
    $hours = date("h");
    $minutes = date("i");

    // Склонение часов
    if($hours >= 5 && $hours <= 20){
        $hours = "{$hours} часов";
    }
    else if($hours == 1 || $hours == 21){
        $hours = "{$hours} час";
    } else {
        $hours = "{$hours} часа";
    }
    //Склонение минут
    if($minutes >= 5 && $minutes <= 20){
        $minutes = "{$minutes} минут";
    }else {
        $newMinutes = $minutes % 10;
        if($newMinutes >= 2 && $newMinutes <= 4){
            $minutes = "{$minutes} минуты";
        } 
        else if($newMinutes > 4){
            $minutes = "{$minutes} минут";
        }else {
            $minutes = "{$minutes} минута";
    }
}
    return "{$hours} {$minutes}";
}

var_dump(getTime());

?>

<?php 
//task4

    $content = date("yy");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>content</title>
</head>
<body>
    <footer><?php echo $content;?></footer>
</body>
</html>


