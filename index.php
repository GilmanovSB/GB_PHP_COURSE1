
<?php

//task1

$i = 0;
while($i <= 100){
    if($i % 3 == 0){
        echo $i ;
    }
    $i++;
}

//task2
echo "</br>";

$i = 0;
do {
    if($i == 0){
        echo "{$i} - ноль </br>";
    } 
    elseif($i % 2 == 0){
        echo "{$i} - четное число </br>";
    } else {
        echo "{$i} - нечетное число </br>";
    }
    $i++;
} while ($i <= 10);

//task3
echo "</br>";

$sities = [
    'Московская обдасть' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Крондштат'],
    'Липецкая область' => ['Липецк', 'Елец', 'Лебедянь', 'Данков', 'Грязи', 'Усмань']
];

foreach($sities as $key => $values){
    $values = implode(', ' ,$values);
    echo "{$key} : {$values}</br>";
}

var_dump($sities);

//task4
echo "</br>";

$letter = [
    'а' => 'a','б' => 'b','в' => 'v','г' => 'g','д' => 'd',
    'е' => 'e','ё' => 'yo','ж' => 'zh','з' => 'z','и' => 'i','й' => 'iy',
    'к' => 'k','л' => 'l','м' => 'm','н' => 'n','о' => 'o','п' => 'p',
    'р' => 'r','с' => 's','т' => 't','у' => 'y','ф' => 'f','х' => 'h',
    'ц' => 'ts','ч' => 'ch','ш' => 'sh','щ' => 'sch','ъ' => '`','ь' => '`',
    'ы' => 'i`','э' => 'e`','ю' => 'u','я' => 'ay'
];

function transliterals(string $str, array $letter) : string
{
    $str = mb_strtolower($str);
    return str_replace(array_keys($letter), $letter, $str);
}

var_dump(transliterals('Мама мыла Машу', $letter));

//task5
echo "</br>";

function replace(string $str) : string
{
    return str_replace(' ', '_', $str);
}

var_dump(replace('fds fsdf sdf sdf s'));

//task7
echo "</br>";

for($itterator = 0; $itterator < 10; print $itterator++){}; 

//task8
echo "</br>";

$sities = [
    'Московская обдасть' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Крондштат'],
    'Липецкая область' => ['Липецк', 'Елец', 'Лебедянь', 'Данков', 'Грязи', 'Усмань']
];

function getCities(string $subStr, array $cities) : string
{
    $result = null;
    foreach($cities as $key => $values){
        foreach($values as $value){
            $value = preg_match("/^$subStr/", $value) ? $value : false;
        }
        $result .= "{$key} : {$value}</br>";
    }
    return $result;
}

echo getCities("К", $sities);

//task9
echo "</br>";

function translitAndChange(string $str) : string 
{
    $letter = [
        'а' => 'a','б' => 'b','в' => 'v','г' => 'g','д' => 'd',
        'е' => 'e','ё' => 'yo','ж' => 'zh','з' => 'z','и' => 'i','й' => 'iy',
        'к' => 'k','л' => 'l','м' => 'm','н' => 'n','о' => 'o','п' => 'p',
        'р' => 'r','с' => 's','т' => 't','у' => 'y','ф' => 'f','х' => 'h',
        'ц' => 'ts','ч' => 'ch','ш' => 'sh','щ' => 'sch','ъ' => '`','ь' => '`',
        'ы' => 'i`','э' => 'e`','ю' => 'u','я' => 'ay', ' ' => '_'
    ];

    $str = mb_strtolower($str);
    return str_replace(array_keys($letter), $letter, $str);

}

var_dump(translitAndChange('Проследуйте в пункт назначения'));

//task6
echo "</br>";

?>
<?php
$list = [
    "<li>Главная</li>",
    "<li>Контакты</li>",
    "<li>О нас</li>"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($list as $li){
        echo $li;
    }?>
    </ul>
</body>
</html>