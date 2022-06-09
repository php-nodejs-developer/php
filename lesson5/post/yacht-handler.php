<?php
// обработка данных формы
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: choose_yacht.php");
}

var_dump($_POST);