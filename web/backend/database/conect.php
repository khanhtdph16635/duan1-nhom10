<?php

$host = 'localhos';
// $db = 'duan1_group10';
$pass = '';
$user = 'root';
$connect = null;

try {
    $connect = new PDO("mysql:host=$host;dbname=$db;charset=utf8;$user;$pass");
} catch (PDOException $th) {
    echo $th -> getMessage();

}

// function action($sql){
//     global $connect;
//     $connect->exec($sql);
//    }
//    function selectDb($sql){
//     global $connect;
//     $stmt = $connect->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->fetchAll();
//     return $result;
//    }
//    function total($sql){
//     global $connect;
//     $stmt = $connect->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->fetchColumn();
//     return $result;
//    }
// ?>