<?php

try {

    $dbh = new PDO('mysql:host=192.168.0.34;dbname=vvvvv', 'root', 'sssss');

} catch (PDOException $e) {

    die($e->getMessage());

}

require 'index.view.php';
