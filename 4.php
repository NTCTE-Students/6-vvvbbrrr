<?php
$filename = 'example.txt';

// Проверяем, существует ли файл
if (file_exists($filename)) {
    $lines = file($filename); // Читаем файл построчно в массив
    $lineCount = count($lines); // Подсчитываем количество строк
    echo "Количество строк в файле: {$lineCount}";
} else {
    echo "Ошибка: файл не существует.";
}
?>
