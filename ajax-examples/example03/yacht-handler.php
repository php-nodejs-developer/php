<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    echo "$name, Ваша заявка принята в обработку.";
    if (isset($email)) echo "Менеджер напишет на $email";
    else echo "Менеджер свяжется по телефону $phone";
}