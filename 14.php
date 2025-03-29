<?php
$sourceDir = 'source_directory/';
$backupDir = 'backup_' . date('Y-m-d') . '/';

// Создаем директорию для резервной копии
mkdir($backupDir, 0777, true);

// Копируем все файлы из исходной директории в резервную
foreach (glob($sourceDir . '*') as $file) {
    copy($file, $backupDir . basename($file));
}

echo "Резервное копирование завершено.";
?>
