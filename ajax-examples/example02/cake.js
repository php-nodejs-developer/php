"use strict";
// отправляет запрос на сервер

const btns = document.querySelectorAll("button");
for (let btn of btns) {
    btn.addEventListener("click", function (){
        let cakeId = this.dataset.id;
        // GET запрос с параметрами (id тортика)
        fetch("cake.php?id=" + cakeId)
            .then(response => response.json())
            .then(cakeInfo => {
                console.log(cakeInfo);
                let div = document.createElement('div');
                div.innerHTML = `
                    <p>${cakeInfo.description}</p>
                `;
                this.after(div);
            })
    });
}