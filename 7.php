<?php
$filename = 'example.txt';

// Проверяем, существует ли файл
if (file_exists($filename)) {
    unlink($filename); // Удаляем файл
    echo "Файл удален.";
} else {
    echo "Ошибка: файл не существует.";
}
?>
