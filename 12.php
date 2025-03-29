<?php
$logfile = 'log.txt';
$message = 'Произошло какое-то событие.';

// Записываем сообщение в лог-файл с текущей датой и временем
file_put_contents($logfile, date('Y-m-d H:i:s') . " - " . $message . "\n", FILE_APPEND);
echo "Сообщение записано в лог.";
?>
