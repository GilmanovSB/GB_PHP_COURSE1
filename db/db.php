<?php

function prepareData(){
    $db = require OPTIONS_DIR . 'db_param.php';
    $connect = getConnect($db['host'], $db['user_name'], $db['user_password'], $db['db_name']);
    return $connect;
}

function getConnect (string $host, string $user_name, string $user_password, string $db_name){
    static $connect = null;
    if(is_null($connect)){
        $connect = mysqli_connect($host, $user_name, $user_password, $db_name);
        return $connect;
    } else {
        return $connect;
    }
}

function getAllData(string $query){
    $connect = prepareData();
    $result = mysqli_query($connect, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getData(string $query){
    $connect = prepareData();
    $result = mysqli_query($connect, $query);
    return mysqli_fetch_assoc($result);
}

function insertData(string $query): bool{
    $connect = prepareData();
    $result = mysqli_query($connect, $query);
    return $result;
}

