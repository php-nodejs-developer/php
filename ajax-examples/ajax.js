// формирование строки запроса с параметрами:
let url = new URL('строка запроса'); // например, /handler.php, можно передавать первым аргументов в функцию fetch
// если нужно добавить параметры:
url.searchParams.set('параметр', 'значение'); // например, /handler.php?count=12
url.searchParams.set('параметр2', 'значение'); // например, /handler.php?count=12&price=1000

// fetch 1
fetch('строка запроса' /* + '?param=value' - если нужно передать данные в строке запроса */, {
    method: 'название http метода', /* если используется не GET запрос */
    /* если нужно передать данные в теле сообщения.
       Можно передать строку (json строку), объект FormData, blob (бинарные данные) */
    body: 'value',
    // при необходимости передать заголовки
    headers: {
        'название заголовка': 'значение'
    }
})
    .then(response => response.text()) // .json() / .blob() / .formData()
    .then(data => console.log(data));


// fetch 2
async function makeRequest(){
    let response = await fetch('строка запроса' /* + '?param=value' - если нужно передать данные в строке запроса */, {
                method: 'http метод',
                body: 'value',
                headers: {}
            }
        );

    //  получение ответа
    if (response.ok) { // true, если HTTP-статус в диапазоне 200-299
        let status = response.status; // статус ответа

        // получение заголовков
        response.headers.get('название заголовка'); // получать заголовки по одному

        // перебрать все заголовки
        for (let [name, value] of response.headers) {
            console.log(`${name} : ${value}`);
        }

        // получение ответа из тела сообщения
        let result = await response.json(); // .text() / .blob() / .formData()

    } else {
        let status = response.status; // статус ответа
    }
}




// XMLHttpRequest

// создание объекта
let xhr = new XMLHttpRequest();

// инициализация
xhr.open(
    'название http метода: GET, POST, PUT, PATCH, DELETE ...',
    'строка запроса' /* + '?param=value' - если нужно передать данные в строке запроса */);

// или
/*
let url = new URL('строка запроса');
url.searchParams.set('параметр', 'значение');

xhr.open(
    'название http метода: GET, POST, PUT, PATCH, DELETE ...',
    url);
*/

// передать заголовки
xhr.setRequestHeader('название заголовка', 'значение');

// указать ожидаемый тип ответа
xhr.responseType = 'json'; // text - строка, blob - бинарные данные

xhr.timeout = 10000; // ждет 10000 миллисекунд и прерывается,
// если сервер не ответит за это время

// отправка
xhr.send( /* если нужно передать данные в теле сообщения */ );
xhr.send();

// получение ответа
xhr.onload = function() {
    // xhr.status - статус ответа (например, 200)
    // xhr.statusText - текст статуса (например OK)
    if (xhr.status !== 200) {
        // ошибка запроса, например, ресурс не был найден
    } else {
        // получение заголовков
        xhr.getResponseHeader('название заголовка'); // один заголовок
        xhr.getAllResponseHeaders(); // все заголовки

        let response = xhr.response; // ответ сервера
    }
};

// при получении данных (например, для отображения полосы загрузки)
xhr.onprogress = function(event) {
    if (event.lengthComputable) {
        let total = event.total; // всего байт
        let loaded = event.loaded; // загружено байт
    } else {
        // загружено байт, если в ответе нет заголовка
        // Content-Length с информацией о размере
        let loaded = event.loaded;
    }
};

// если запрос не удалось выполнить
xhr.onerror = function() {};


// axios библиотека, основана на XMLHttpRequest
// https://github.com/axios/axios



