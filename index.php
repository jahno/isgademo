<?php
session_start();
require_once 'autoloader.php';

$controller = new Controller();
$req = $_SERVER['REQUEST_URI'];

$base_url = "/isga/";
$controller->checkRequest($base_url,$req);


?>

