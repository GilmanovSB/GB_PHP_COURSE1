<?php

function getDirectory(string $link) : array
{
    $fileName = scandir($link);
    $link = str_replace('../', '', $link) . '/' ;
    foreach($fileName as $file){
        ($file == '.' || $file == '..') ? false : $directory[] = $link . $file;
    }
    return $directory;
}
