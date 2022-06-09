"use strict";

document.querySelector("form")
    .addEventListener("submit", function (event){
        event.preventDefault();
        // выполнить все необходимые проверки
        // если форма заполнена без ошибок,
        // отправляем аякс запрос методом POST (PUT или PATCH)
        fetch("yacht-handler.php", {
            method: 'post', // название http метода
            body: new FormData(this) // данные, которые нужно передать в теле сообщения
        })
            .then(response => response.text())
            .then(text => {
                let infoP = document.createElement("p");
                infoP.innerText = text;
                this.before(infoP);
            })
    });