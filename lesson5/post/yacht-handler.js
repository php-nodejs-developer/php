"use strict";

document.querySelector("form")
    .addEventListener("submit", function (event){
        event.preventDefault();
        // проверка, что указаны email или телефон
        // если телефон или email не указаны,
        // вывести сообщение об этом над формой
        if (this.elements.email.value.trim().length === 0 ||
            this.elements.phone.value.trim().length === 0 ) {
            let infoP = document.createElement("p");
            infoP.innerText = "Поля email или телефон дб заполнены";
            this.before(infoP);
            return;
        }
        // все остальные необходимые проверки

        // отправка данных на сервер, как при нажатии на кнопку 'Подробнее'
        this.submit(); // отправка с перезагрузкой
    });