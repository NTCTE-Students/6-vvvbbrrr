<?php
$filename = 'data.json';

// Читаем данные из JSON-файла
$data = json_decode(file_get_contents($filename), true);

// Добавляем новый элемент
$data[] = ['id' => 3, 'name' => 'New Item', 'description' => 'New Item Description'];

// Сохраняем обновленные данные обратно в файл
file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));
echo "JSON файл обновлен.";
?>
