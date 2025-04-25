<?php
require_once 'core/Controller.php';
require_once 'core/Model.php';
require_once 'controllers/MahasiswaController.php';

$controller = new MahasiswaController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store($_POST);
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        $controller->update($id, $_POST);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    default:
        $controller->index();
        break;
}
