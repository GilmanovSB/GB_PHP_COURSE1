<?php 
$x = $_GET['arg1'];
$y = $_GET['arg2'];
$operation = $_GET['operation'];

function divisionByZero(string $y): bool
{
    return $result = ($y == 0) ? false : true;
}
function mathOperation(?float $x, ?float $y, ?string $operation): ?float
{
    switch($operation){
        case '+' : return $result = $x + $y;
        case '-' : return $result = $x - $y;
        case '*' : return $result = $x * $y;
        case '/' : return $result = divisionByZero($y) ? $x / $y : null;
        default : return null;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        <input type="text" name = 'arg1' placeholder="x">
        <input type="text" name = 'arg2' placeholder="y">
        <input type="text" name = 'operation' placeholder="операция">
        <input type="text" name = 'result' disabled value="<?= mathOperation($x, $y, $operation) ?>">
        <input type="submit">
    </form>
</body>
</html>