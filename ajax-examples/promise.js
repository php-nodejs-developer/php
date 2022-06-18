"use strict";
// Promise - объект используется
// для асинхронных или отложенных операций

/*let func = function (resolve, reject){
    // инструкции по выполнению
    // асинхронных или отложенных операций

};
let promise = new Promise(func);*/

let promise = new Promise(function (resolve, reject){
    // инструкции по выполнению
    // асинхронных или отложенных операций

    // если инструкции завершаются успехом, необходимо
    // вызвать функцию resolve

    // если инструкции завершаются неудачей, необходимо
    // вызвать функцию reject

    if (Math.random() < .5) resolve('результат');
    else reject(new Error('выполнение завершилось ошибкой'));
});
// внутренние свойства Promise:
// 1. state: pending (ожидание) -> fulfilled (успех)
//           pending (ожидание) -> rejected (выполнение с ошибкой)
// 2. result: undefined -> значение из функции resolve
//            undefined -> error

// использование
promise.then(result => console.log(result)); // resolve
promise.catch(error => console.log(error)); // reject
promise.finally(result => console.log(result));


function loadImage(path){
    return new Promise(function (resolve, reject){
        let image = new Image(150, 150);
        image.src = path;

        image.onload = () => resolve(image);
        image.onerror = () => reject(new Error('Ошибка загрузки ' + path));
    });
}

let loadPromise = loadImage('images/img.png');

// методы then и catch возвращают объект Promise
loadPromise.then(result => result.src) // resolve из loadImage 42
        /*new Promise(function (resolve, reject){
            resolve(result.src)
        })*/
    .then(src => console.log(src));

// async/await - синтаксический сахар для promise.then

// async функция всегда возвращает объект Promise
/*
async function someFunc(){
    return new Promise(function (resolve, reject){});
}

async function someFunc(){
    console.log('someFunc');
    return true;

    /!*return new Promise(function (resolve, reject){
        resolve(true);
    });*!/
}
*/

// await используется только внутри async функций
async function someFunc(){

    let promise = new Promise(resolve => {
        setTimeout(() => resolve('результат получен', 3000));
    });

   /* let promise = new Promise(function (resolve){
        setTimeout(function () {
            resolve('результат получен')
        }, 3000)
    });*/
    let result = await promise;
    console.log(result);

    return result;
    /*
    return new Promise(function (resolve){
        resolve(result);
    })
    */
}

someFunc().then(data => console.log(data));

fetch('/items')
    .then(response => response.json()) // resolve 1
    .then(json => console.log(json));

async function fechfn(){
    try {
        let response = await fetch('/items');
        let json = await response.json();
        console.log(json);
    } catch (e){
        console.log(e); // вместо метода catch
    }
}

async function allResult(){
    // results - массив с результатами выполнения нескольких промисов
    let results = await Promise.all(
        [
            fetch('/items'),
            fetch('/comments')
        ]
    )
}








