<?php
session_start(); // 43HG535H653HJ

if (isset($_SESSION['data'])) {
    echo 'Данные из массива: ' . $_SESSION['data'];
}

?>

    <!-- + остальной html -->
<?php include_once 'menu.php'; ?>