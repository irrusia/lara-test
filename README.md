## Разворачивание проекта

`git clone https://github.com/irrusia/lara-test.git your-project-folder`

`cd your-project-folder`

`composer install --no-scripts`

`cp .env.example .env`

В файле .env прописываем DB_CONNECTION=sqlite и заполняем своими данными блок для отправки почты.

`php artisan key:generate`

`php artisan serve`

В новом окне терминала вводим

`php artisan migrate`

Открыть приложение по адресу  http://127.0.0.1:8000

