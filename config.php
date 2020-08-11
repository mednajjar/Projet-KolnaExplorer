<?php

$dsn = 'mysql:host=127.0.0.1  dbname=Kolnaexplorer';
$user = 'root';
$pass = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
);

try{
    $db = new PDO($dsn, $user, $pass, $options);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $q = "INSERT INTO images (image) VALUE ('user3.png')";

    // $db->exec($q);
    // echo 'iserted!';
}
catch(PDOExeption $e)
{
    echo 'Failed!' . $e->getMessage();
}


