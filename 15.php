<?php
$filename = 'example.txt';
$search = 'old_word';
$replace = 'new_word';

// Читаем содержимое файла
$content = file_get_contents($filename);

// Заменяем текст
$newContent = str_replace($search, $replace, $content);

// Сохраняем результат в новый файл
file_put_contents('modified_example.txt', $newContent);

echo "Текст заменен и сохранен в новый файл.";
?>
