<?php
$oldName = 'example.txt';
$newName = 'new_example.txt';

// Проверяем, существует ли файл с новым именем
if (file_exists($newName)) {
    echo "Ошибка: файл с новым именем уже существует.";
} else {
    rename($oldName, $newName);
    echo "Файл успешно переименован.";
}
?>
