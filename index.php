<?php

declare(strict_types=1);

// Функция автозагрузки
spl_autoload_register(function ($class) {
    $prefix = 'MyProject\\';
    $base_dir = __DIR__ . '/MyProject/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проектирование архитектуры корпоративных информационных систем</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Подключение шрифта Roboto -->
</head>
<body>
    <header>
        <h1>Проектирование архитектуры корпоративных информационных систем</h1>
    </header>
    <div class="main-container">
            <div class="lab-content">
                <a href="lab1.php" class="lab-link">Классы и интерфейсы</a>
            </div>
            <div class="lab-content">
                <a href="lab2.php" class="lab-link">Паттерны проектирования</a>
            </div>
            <div class="lab-content">
                <a href="lab3.php" class="lab-link">Паттерн Модель-Представление-Контроллер</a>
            </div>
                        <div class="lab-content">
                <a href="lab4.php" class="lab-link">Использование ООП с базой данных SQLite</a>
            </div>
                        <div class="lab-content">
                <a href="lab5.php" class="lab-link">Standard PHP Library</a>
            </div>
                        <div class="lab-content">
                <a href="lab6/hello/" class="lab-link">Использование MVC фреймворка</a>
            </div>
            
    </div>

</body>
</html>