<!-- upload_form.php -->
<form action="upload.php" method="post" enctype="multipart/form-data">
    Выберите файл для загрузки:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Загрузить файл" name="submit">
</form>

<?php
// upload.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = 'uploads/';
    $targetFile = $targetDir . basename($_FILES['fileToUpload']['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Проверяем тип файла
    if (!getimagesize($_FILES['fileToUpload']['tmp_name'])) {
        echo "Файл не является изображением.";
        exit;
    }

    // Проверяем размер файла
    if ($_FILES['fileToUpload']['size'] > 2097152) {
        echo "Файл слишком большой. Максимальный размер — 2 МБ.";
        exit;
    }

    // Загружаем файл
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
        echo "Файл успешно загружен.";
    } else {
        echo "Ошибка при загрузке файла.";
    }
}
?>
