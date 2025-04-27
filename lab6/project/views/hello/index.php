<!DOCTYPE html>
<html>
<head>
    <title>Демонстрация MVC-фреймворка</title>
    <style>
        .frame-container {
            margin: 20px 0;
            border: 1px solid #ddd;
            padding: 10px;
        }
        iframe {
            width: 100%;
            border: none;
            height: 300px;
        }
        h2 {
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Демонстрация работы MVC-фреймворка</h1>

    <h2>1. TestController</h2>
    <div class="frame-container">
        <h3>Действие act1</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/test/act1/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Действие act2</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/test/act2/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Действие act3</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/test/act3/"></iframe>
    </div>

    <h2>2. NumController (сумма чисел)</h2>
    <div class="frame-container">
        <h3>Сумма 5, 10, 15</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/nums/5/10/15/"></iframe>
    </div>

    <h2>3. UserController</h2>
    <div class="frame-container">
        <h3>Пользователь с ID 2</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/user/2/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Имя пользователя с ID 3</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/user/3/name/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Все пользователи</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/user/all/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Первые 3 пользователя</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/user/first/3/"></iframe>
    </div>

    <h2>4. ProductController</h2>
    <div class="frame-container">
        <h3>Продукт с ID 3</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/product/3/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Все продукты</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/products/all/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Все страницы</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/page/"></iframe>
    </div>
        <div class="frame-container">
        <h3>Все продукты</h3>
        <iframe src="http://f1091114.xsph.ru/lab6/products/"></iframe>
    </div>
</body>
</html>