<?php
$filename = 'example.txt';
$data = 'Hello, World!'; // Данные для записи

// Записываем данные в файл, перезаписывая его
file_put_contents($filename, $data);
echo "Данные записаны в файл.";
?>
