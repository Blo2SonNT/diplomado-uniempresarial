<?php
require_once '../config.php';
session_start();
session_destroy();
$url_redireccion = URL_WEB;
header('Location: ' . $url_redireccion);
