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
$user1 = new User("Dandito Bobrito", "Bobrito", "Bobrito gangsterito");
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
        </div>
    </div>
        <div>
        <a href="https://img.plantuml.biz/plantuml/png/fLRTRjfW3BtFKtpYPfic-W1JDVLLKCkcIXqNmAxMIJHTsmkGw2IaJPe6dRO722bHKcZW5Umtsh53GtuR2ge8xUTZ-zZ7dzEZJhVHxdx-T6PPfwrki_sXSTmqDPfmZvPyGOzusjmpDACbpVaI1nw5R9F3rnHGO6X5Ipm0Ts2tSJOdhsQ-MCQyDL4OkbVh8twSB3Hu_SRwcauzfgb000Zn71gmS7b8FW_YiEMGADpnMQFJCNG7ldFaT_6PKG2uHmiU84gCgPM2f703MmYUBddSGnArIl6f0WF5e3YngH_Vy7UsmKKnFs112n3BHoQqmCV131-uyJ39k8ADzix3kNp3LNh8mvXBPPwj6OyXBcIkO0lOsayPr0tz1im7TmMJbnFxdUbqswUjZn5wf0eYWuXu0zn2_i18BRK5ePvfref0OmnX07dYj2xtPIuHCDGwGlp-O3J4LAljnm4srOmKx6gC-LD5CSTiI6MLQirBEN6VhnAS2XX5KisbgJa-gusDdC9gKlUL-o-zakiuV-1xYI8rIbBdoCb5FLwijWxjlLIZ8vmMIkVAZlrqjkB98oULTIADuW5gapXEukPg_bzIWKnnkkSJ87kHPzhmZtxIE4tb5eA0fNRHZxPPPhf7gjzAhWWc4GlWgOFIscbHxNd6yQtxgtEoFRuuHrewQ5eitIjL2EGNkYsMcnjfbIwOm_DwVUTjk5_OahMcTTp187rBY6H4U4tTusymFu0A8blxlxGEpmyE2cwEzVmxIRrsxjp-iPzhtorVI7Uqx7Nnriwll7hzVMBdLyKfUrbbecGMJDQQluIAADaFfVYyfWKBKf2rBVOZMdlKR9tWVwR_">
            uml
        </a>
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
    
    // Получаем содержимое буфера и очищаем его
    
    
    // Выводим все сообщения внутри блока

    ?>
</body>
</html> 