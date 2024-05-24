<?php

function dbCOn()
{
    $db = require_once "conn.php";
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $db;
}

function seedKendaraan($db)
{
    $sql = <<<SQL
    INSERT INTO `tb_kendaraan` VALUES (1,'Honda','2022',1000.0,NOW(),NOW());
    SQL;

    if (mysqli_query($db, $sql)) {
        echo "Seeding kendaraan success" . PHP_EOL;
    } else {
        echo "Error seeding kendaraan : " . mysqli_error($db)  . PHP_EOL;
    }
}


$db = dbCOn();
seedKendaraan($db);
