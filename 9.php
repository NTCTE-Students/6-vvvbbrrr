<?php
$filename = 'data.csv';

if (file_exists($filename)) {
    $file = fopen($filename, 'r');
    echo "<table border='1'>";
    while (($row = fgetcsv($file)) !== false) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>{$cell}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    fclose($file);
} else {
    echo "Ошибка: файл не существует.";
}
?>
