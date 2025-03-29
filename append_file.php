// append_file.php
<?php

$filename = 'example.txt'; // Путь к файлу
$newData = 'Эта строка будет добавлена в конец файла.\n'; // Данные для добавления

// Добавляем данные в файл
$result = file_put_contents($filename, $newData, FILE_APPEND);

if ($result !== false) {
    print('Данные успешно добавлены в файл.');
} else {
    print('Ошибка при добавлении данных в файл.');
}
?>
