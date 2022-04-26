Разворачивание проекта

`git clone https://github.com/irrusia/lara-test.git your-project-folder`

`cd your-project-folder`

`composer install --no-scripts`

`cp .env.example .env`

В файле .env прописываем DB_CONNECTION=sqlite и заполняем своими данными блок для отправки почты

MAIL_MAILER=smtp
MAIL_HOST=smtp.yandex.ru
MAIL_PORT=465
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="example@yandex.ru"
MAIL_FROM_NAME="${APP_NAME}"

`php artisan key:generate`

`php artisan serve`

В новом окне терминала вводим

`php artisan migrate`
