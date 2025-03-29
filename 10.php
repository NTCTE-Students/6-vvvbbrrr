<?php
$data = [
    ['ID', 'Name', 'Age'],
    [1, 'Alice', 25],
    [2, 'Bob', 30]
];

$filename = 'data.csv';
$file = fopen($filename, 'w');

// Записываем данные в CSV-файл
foreach ($data as $row) {
    fputcsv($file, $row);
}
fclose($file);

echo "Данные записаны в CSV-файл.";
?>
