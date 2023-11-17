# QUIZ-app

### About

Додаток являє собою просту систему тестування на PHP з використанням Laravel framework.

Воно дає змогу:

- адмініструвати базу запитань і відповідей до тестів
- користувачам проходити тестування
- відстежувати статистику результатів кожного користувача.

Основні можливості:

- формування тестів із набору запитань і варіантів відповідей;
- збереження результатів тестування із зазначенням правильних/неправильних відповідей;
- виведення топ-10 лідерів за кількістю правильних відповідей.

## Вимоги для запуску проекту

PHP >= 8.1
Laravel >= 10
Composer >= 2.3.7
npm >= 8.5.1
MySQL

## Як запустити проект?

Клонуйте сховище:

	 git clone 
 
Перейдіть до папки quiz-app:

 	 cd quiz-app

Створіть файл .env з файлу .env.example:

	cp .env.example .env
	
	або

	зробіть копію .env.example і назвіть її просто .env

Внесіть необхідні зміни конфігурації у файл .env:

	DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=quiz_db
    DB_USERNAME=root
    DB_PASSWORD=

Встановити Composer:

	composer install
	
Згенерувати ключ додатку:

	php artisan key:generate
	
Встановити Node.js залежності:

	npm install

Створити таблиці БД:

	php artisan migrate --seed

Запустити веб-сервер:

	php artisan serve

