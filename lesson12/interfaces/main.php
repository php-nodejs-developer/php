<?php

require_once 'app-user.php';

// механизм клонирования
$user01 = new AppUser('qwerty', '12345');
$user01->setName('Max');
$user01->setAge(33);
$user02 = clone $user01;
echo $user02;