<?php
require '../options/main.php';
require ENGINE_DIR . 'engine.php';
require DB_DIR . 'db.php';

var_dump(insertData("INSERT INTO products (name_product, discription_product, price) VALUES ('XIAOMI REDME 9 PRO', 'Китайский сматфон', '25000')"));
var_dump(getAllData('SELECT * FROM products'));

