<?php
$sourceFile = 'example.txt';
$destinationFile = 'copy_example.txt';

// Проверяем, существует ли файл назначения
if (file_exists($destinationFile)) {
    echo "Предупреждение: файл назначения уже существует.";
} else {
    copy($sourceFile, $destinationFile);
    echo "Файл успешно скопирован.";
}
?>
