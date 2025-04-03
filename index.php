<?php

require_once __DIR__ . '/controllers/ClientController.php';

$clientControl = new ClientController();
// $orderRepo = new OrderRepository();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action){
    case 'view':
        $clientControl->show($id);
        break;
    case 'create':
        $clientControl->create();
        break;
    case 'index':
        $clientControl->clientList();
        break;
    case 'store':
        $clientControl->store();
        break;
    case 'edit':
        $clientControl->edit($id);
        break;
    case 'update':
        $clientControl->update();
        break;
    case 'delete':
        $clientControl->delete($id);
        break;
    default:
        $clientControl->forbidden();
        break;
}



