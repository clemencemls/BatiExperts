<?php

require_once __DIR__ . 'models/Client.php';
require_once __DIR__ . 'models/Order.php';
require_once __DIR__ . 'lib/database.php';

$db = new DatabaseConnection();

$clients = $db->getConnected()->prepare("SELECT * FROM clients;")->execute();
$orders = $db->getConnected()->prepare("SELECT * FROM orders;")->execute();

var_dump($clients);
var_dump($orders);