// FormData - объект, представляющий данные HTML формы
// можно отправить на сервер в теле сообщения

// можно создать пустой и добавить данные потом
let formData = new FormData();

// можно создать с данными из полей формы
formData = new FormData(форма);

// методы FormData
formData.append(имя, значение); // добавить данные
formData.append(имя, файл, имя файла); // добавить файл
formData.delete(имя); // удалить пару по ключу
formData.get(имя); // получить значение по ключу
formData.has(имя); // проверить наличие пары по ключу
formData.set(name, value); // перезаписать значение по ключу
formData.set(name, blob, fileName); // перезаписать значение по ключу