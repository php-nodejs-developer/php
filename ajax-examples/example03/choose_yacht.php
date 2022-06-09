<?php
$companies = [
    ['id' => 1, 'name' => 'Custom Line'],
    ['id' => 2, 'name' => 'Mangusta'],
    ['id' => 3, 'name' => 'Ferretti'],
    ['id' => 4, 'name' => 'Riva'],
    ['id' => 5, 'name' => 'Austin Parker'],
];

?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Выбор яхты</title>
</head>
<body>
    <form> <!-- для отправки данных аякс запросом можно не указывать
                атрибуты method и action -->
        <h2>Заявка на выбор яхты</h2>
        <fieldset>
            <legend>Контактная информация</legend>
            <div>
                <label for="name">Введите имя:</label>
                <input type="text" id="name" name="user">
            </div>

            <div>
                <label for="email">Введите email:</label>
                <input type="email" id="email" name="email">
            </div>

            <div>
                <label for="phone">Введите телефон:</label>
                <input type="text" id="phone" name="phone">
            </div>
        </fieldset>

        <fieldset>
            <legend>Информация для подбора яхты</legend>
            <div>
                <label for="companies">Укажите производителя:</label>
                <select id="companies" name="company">
                    <?php foreach ($companies as $company): ?>
                    <option value="<?= $company['id'] ?>">
                        <?= $company['name'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div>
                <label>
                    Максимальная цена (евро): <input type="number" name="price">
                </label>
            </div>
            <div>
                <label>
                    Максимальное количество палуб: <input type="number" name="count">
                </label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Дополнительная информация</legend>
            <div>
                <div><label for="comment">Комментарий к заявке</label></div>
                <textarea name="comment" id="comment"></textarea>
            </div>

            <div>
                <p>Как с Вами лучше связаться?</p>
                <div><label><input value="call" type="checkbox" name="contacts[]"> Телефон (звонок)</label></div>
                <div><label><input value="sms" type="checkbox" name="contacts[]"> Телефон (сообщение)</label></div>
                <div><label><input value="email" type="checkbox" name="contacts[]"> E-mail</label></div>
            </div>
        </fieldset>

        <div>
            <label>
                Согласие на обработку персональных данных:
                <input type="checkbox" name="agree">
            </label>
        </div>

        <input type="submit" value="Подобрать">
    </form>

<script src="yacht-handler.js"></script>
</body>
</html>

