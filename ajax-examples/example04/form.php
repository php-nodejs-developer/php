<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: form.html');
}

if ($_POST['login'] === 'qwe' && $_POST['password'] === '123') {
    echo 'success';
} else {
    echo 'error';
}
