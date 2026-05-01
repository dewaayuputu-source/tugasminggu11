<?php
include_once "controllers/AnggotaControllers.php";

$controller = new AnggotaController();

if(isset($_GET['hapus'])) {
    $controller->model->delete($_GET['hapus']);
    header("Location: index.php");
}

include_once "views/list.php";
?>