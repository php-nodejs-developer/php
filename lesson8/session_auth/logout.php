<?php
session_start();
// logout.php
// 1. очистить суперглобальный массив $_SESSION
$_SESSION = [];
// unset($_SESSION['login']);
// 2. перенаправление на main.php
header('Location: main.php');