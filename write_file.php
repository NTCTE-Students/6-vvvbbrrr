// write_file.php
<?php

$filename = 'example.txt'; // Путь к файлу
$data = 'Это новая строка, которая будет записана в файл.\n'; // Данные для записи

// Записываем данные в файл
$result = file_put_contents($filename, $data);

if ($result !== false) {
    print('Данные успешно записаны в файл.');
} else {
    print('Ошибка при записи в файл.');
}
?>
