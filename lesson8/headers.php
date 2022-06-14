<?php
// отправить заголовки
// функцию header() можно вызывать только если клиенту ещё не передавались данные:
// var_dump, echo, print, html, пустые строки и тд
header('название заголовка: значение');
// для передачи однотипных заголовков (заголовки с одинаковым названием не будут перезаписываться)
header('название заголовка: значение', false);

// например
/*header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="downloaded.pdf"');
readfile('original.pdf');*/

// набор отправленных или готовых к отправке заголовков
$sent = headers_list();
var_dump($sent);

// получить заголовки можно из суперглобального массива $_SERVER

// возвращает все заголовки HTTP-запроса
$headers = getallheaders();
var_dump($headers);