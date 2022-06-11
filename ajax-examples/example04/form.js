"use strict";
const errors = document.getElementById("errors");

document.forms.auth.addEventListener("submit", function (event) {
    event.preventDefault();

    if (this.elements.login.value.trim().length < 3 ||
        this.elements.password.value.trim().length < 3) {
        errors.innerText = "Заполните поля формы";
        return;
    }
    fetch("form.php", {
        method: 'post',
        body: new FormData(this)
    /*{
        login: "daeddaqfaq",
        password: "1212"
    }*/
    })
        .then(response => response.text())
        .then(text => {
            console.log(text);
            if (text === "error") {
                errors.innerText = "Ошибка авторизации";
            } else if (text === "success") {
                window.location.href = "account.php";
            }
        });
});