<?php

# This is the php connection to the mysql database.  [TEST FIRST]

try {

    $db = new PDO("mysql:host=$localhost;dbname=$mytodo", 'root', 'Ed1s0n');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo $e->getMessage();
    exit;
}
var_dump($db);
