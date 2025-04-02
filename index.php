<?php

require_once __DIR__ . '/models/Client.php';
require_once __DIR__ . '/models/Order.php';
require_once __DIR__ . '/lib/database.php';

$db = new DatabaseConnection();

$clients = $db->getConnected()->query('SELECT * FROM clients;')->fetchAll();
$orders = $db->getConnected()->query('SELECT * FROM orders;')->fetchAll();

var_dump($clients);
var_dump($orders);