<?php

require_once __DIR__ . '/models/Client.php';
require_once __DIR__ . '/models/Order.php';
require_once __DIR__ . '/lib/database.php';

$db = new DatabaseConnection();

$statement = $db->getConnected()->prepare('SELECT * FROM clients;');
$statement->execute();
$clients = $statement->fetchAll();

$statement = $db->getConnected()->prepare('SELECT * FROM orders;');
$statement->execute();
$orders = $statement->fetchAll();

var_dump($clients);
var_dump($orders);