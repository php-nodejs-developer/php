"use strict";

/*
// файлы сразу отправляются на сервер аякс запросом
document.forms['send-file'].addEventListener('submit',
    function (e){
        e.preventDefault();

        fetch('/handler.php',  {
            method: 'post',
            body: new FormData(this)
        })
            .then(response => response.text())
            .then(text => console.log(text));
    });
*/

document.forms['send-file'].addEventListener('submit', function (e){
    e.preventDefault();

    // можно сначала проверить файлы на соответствие типу, размеру и тд
    let file = this.elements.picture.files[0]; // File
    console.log(file.name); // имя файла на компьютере пользователя
    console.log(file.size); // размер файла
    console.log(file.type); // тип файла
    console.log(file.lastModified); // последнее изменение файла

    // this.submit(); - потом отправить с перезагрузкой страницы (если все хорошо)

    // отправка без перезагрузки (аякс)
    let fd = new FormData();
    fd.set('picture', file);

    fetch('/handler.php', { // или без перезагрузки (аякс запросом)
        method: 'post',
        body: fd
    })
        .then(response => response.text())
        .then(text => {
            console.log(text);
            document.forms['send-file'].before(text);
        });

});

