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

// Создание обычных пользователей
$user1 = new User("Bandito Bobrito", "Bobrito", "Bobrito gangsterito");
$user2 = new User("Bombardiro Crocodilo", "Crocodilo", "Allegattorre");
$user3 = new User("Tung Tung Tung Sahur", "Sahur", "Bita");

// Создание привилегированного пользователя
$superUser = new SuperUser("Tralalelo Tralala", "ryba", "adminpass", "Administrator");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Классы и интерфейсы</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Подключение шрифта Roboto -->

</head>
<body>
    <div class="container">
        <h1>Система управления пользователями</h1>
        <h2>Обычные пользователи</h2>
        <?php
        $regularUsers = [$user1, $user2, $user3];
        foreach ($regularUsers as $user) {
            echo '<div class="user-card">';
            echo '<div class="user-info"><strong>Имя:</strong> ' . htmlspecialchars($user->name) . '</div>';
            echo '<div class="user-info"><strong>Логин:</strong> ' . htmlspecialchars($user->login) . '</div>';
            echo '</div>';
        }
        ?>

        <h2>Привилегированный пользователь</h2>
        <div class="user-card super-user-card">
            <?php
            $superUserInfo = $superUser->getInfo();
            foreach ($superUserInfo as $key => $value) {
                $labels = [
                    'name' => 'Имя',
                    'login' => 'Логин',
                    'role' => 'Роль'
                ];
                $label = $labels[$key] ?? ucfirst($key);
                echo '<div class="user-info"><strong>' . $label . ':</strong> ' . htmlspecialchars($value) . '</div>';
            }
            ?>
        </div>

        <div class="stats">
            <h2>Статистика</h2>
            <p>Всего обычных пользователей: <?php echo User::getUserCount(); ?></p>
            <p>Всего привилегированных пользователей: <?php echo SuperUser::getSuperUserCount(); ?></p>
                    <div>
        <a href="//www.plantuml.com/plantuml/png/jP91IyGm48Nl-HLpt4LRF1U55Kzx40JnlCHqjaRIf4mcBaljVpTX4zegUxIdvirxUNn3TfubSUYDiB97FqY5y7n-8VU9Ykid8xr73wC0aE-UIIe6bKHupCStZvJcyRiPYsS2_-5EUtjqcsqSJK90ZYtjgR61cD2skoZ6TTgkf6g8gPEZTcqSFKlMQWBbWkK6j6LuWBlBy71GpaPtKBnPTjn2lhySVz-zBVaMSpmhCqq3NqwtcIdL8XtJpbx3W9JWzaKgb1roYKeYULxjOyuLEpc3_yjQb6NJTSxh1EidSFzTLP3-uc0M2bvI_wueUkfwuPd43cqRUlC3">
            uml
        </a>
    </div>
        </div>
    </div>


    <?php
    // Удаление пользователей
    echo '<div class="container" style="margin-top: 20px;">';
    echo '<h2>Удаление пользователей</h2>';
    echo '<div class="user-card">';
    
    // Начинаем буферизацию вывода
    
    
    // Сначала очищаем массив обычных пользователей
    unset($regularUsers);
    
    // Теперь удаляем отдельные переменные пользователей
    unset($user3);
    unset($user2);
    unset($user1);
    
    // В конце удаляем привилегированного пользователя
    unset($superUser);
    ?>
</body>
</html> 