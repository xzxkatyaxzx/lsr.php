http://desolate-castle-78423.herokuapp.com/

Маленькое пояснение:

Ларавел.
Выводит список новостей.

Контент генерируется фейкером при клике на кнопку "Create new by Faker" в админке - http://desolate-castle-78423.herokuapp.com/admin (admin/admin)
По одной штуке.

Слева в админке есть менюха, там таблички новостей и комментов. 

В новость можно добавить картинку из админки. 
Моджно зайти сюда http://desolate-castle-78423.herokuapp.com/admin/news
Потом редактировать нужную запись и там можно закинуть пикчу.
Дисклеймер: локально работает, в хироку нет возможности быстро закостылить загрузку файлов. Но, нашла 2 решения:
1. https://devcenter.heroku.com/articles/simple-file-upload#view-your-dashboard - типа через облако
2. https://devcenter.heroku.com/articles/s3-upload-php - типа через костыль

К новости есть возможность добавлять комментарии с каптчей. 
Капча убогая, да. Но работает. Обычно в своих проектах юзаю csrf-токены.

Есть возможность править/удалять комментарии - http://desolate-castle-78423.herokuapp.com/admin/comments
Почему бы и да.

Новости выводятся по 3 штуки на страницу с пагинацией. 
Комменты тож выводятся по 3, но без пагинации.
