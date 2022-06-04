"use strict";

/*button, <section id="animals"></section>*/

document.querySelector("button")
    .addEventListener("click",
        ()=>{
            // ajax запрос (запрос без перезагрузки страницы)
            fetch("all-animals.php")
                // когда придет ответ от сервера, будет вызвана
                // функция, переданная в метод then,
                // в нее будет передан ответ сервера (статус, заголовки,
                // тело сообщения)
                .then(response => response.json())
                .then(data => {
                    console.log("Данные с сервера:", data);
                    for (let animal of data){
                        let div = document.createElement("div");
                        div.innerHTML = `
                            <h2>${animal.name}</h2>
                            <img src="${animal.img}">
                        `;
                        document.getElementById("animals").append(div);
                    }
                })

        });