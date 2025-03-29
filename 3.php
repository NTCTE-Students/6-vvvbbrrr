<?php
$filename = 'example.txt';
$newData = 'Новая строка в конце файла.';

// Добавляем данные в конец файла
file_put_contents($filename, $newData, FILE_APPEND);
echo "Данные добавлены в конец файла.";
?>
