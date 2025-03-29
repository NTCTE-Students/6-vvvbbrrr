<?php
$filename = 'example.txt';
$searchWord = 'Hello'; // Слово для поиска

// Проверяем, существует ли файл
if (file_exists($filename)) {
    $content = file_get_contents($filename);
    $wordCount = substr_count($content, $searchWord); // Подсчитываем вхождения слова
    echo "Слово '{$searchWord}' встречается {$wordCount} раз(а) в файле.";
} else {
    echo "Ошибка: файл не существует.";
}
?>
