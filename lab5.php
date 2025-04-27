<?php
namespace MyProject;

// Явное подключение файла (временно для отладки)
require_once __DIR__ . '/MyProject/Classes/NumbersSquared.php';

use MyProject\Classes\NumbersSquared;

// Автозагрузчик (дополнительная проверка)
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    echo "Пытаемся загрузить: $class\n";
    echo "Ищем файл: $file\n";
    
    if (file_exists($file)) {
        require_once $file;
        echo "Файл успешно загружен\n";
    } else {
        die("Файл класса не найден: $file");
    }
});

// Проверка существования класса перед использованием
if (!class_exists('MyProject\Classes\NumbersSquared')) {
    die("Класс NumbersSquared не найден!");
}

// Создание и использование итератора
try {
    $obj = new NumbersSquared(3, 7);
    foreach ($obj as $num => $square) {
        echo "Квадрат числа $num = $square<br>";
    }
} catch (Error $e) {
    die("Ошибка: " . $e->getMessage());
}
echo "<a href='//www.plantuml.com/plantuml/png/f90z3i8m38NtdC9ZAw07w81OMLWuGTguKaH-XEEK8k3kq0GreYlZ-nG_-yiXi2IErWZj66cGFSAHaIHxWeS0s03XJPAgwXP6hrL2epGwaSvxauZ3YN-UNF0-PwidpA2FHEYum9SGlP4Xm2dQ3YcShr4IghHr1-ck5hJZ5D6f4hvL6Spbgugg36-NoVf_cRo_g6GqYwmKckQvNxvH2ESPF-tCte8VLiU-UoIN6mHY68ZUjugKGcdxGUA2j2rGGWInDX0bsyARZh0vS1jhveraozx80oFJg1pQCAs9IjVgSjOLuwtbtnT0eMbFd0mjD8p2u4aEnAqxdS6ByOlGjEc6qQdQ0_z4bg8vY22J-rLBmCad2fNCIUPWqB79pvXYZ-dYol_b2m00'>Просмотреть диаграмму классов</a>";
echo "<br><a href='index.php'>Вернуться на главную</a>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Standard PHP Library</title>
	<meta charset="utf-8">
</head>

</html>