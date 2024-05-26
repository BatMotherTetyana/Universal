<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 1. Перевірити, чи була натиснута кнопка "submit" на формі
        if (!isset($_POST["submit"])) {
            header("Location: index.php");
            exit();
        }

        // 2. Отримати ім'я файлу, який користувач вибрав для завантаження
        $fileName = $_FILES["fileToUpload"]["name"];
        $fileSize = $_FILES["fileToUpload"]["size"];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $fileExtensions = ['txt', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'jpg', 'jpeg', 'png', 'gif'];
        $upload = true;

        // ДЗ: Сортування файлів
        $targetD = "";
        if (in_array($fileExtension, ['txt', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'])) {
            $targetD = "uploads/docs/";
        } elseif (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])) {
            $targetD = "uploads/images/";
        }


        // 3. Перевірити, чи файл вже існує в папці "uploads"
        if (file_exists($targetD . $fileName)) {
            echo "Файл з ім'ям $fileName вже існує.";
            $upload = false;
        }

        // 4. Перевірити, чи це підтримуваний тип файлу
        elseif (!in_array($fileExtension, $fileExtensions)) {
            echo "Цей тип файлів не підтримується.";
            $upload = false;
        }

    // 5. Перевірити розмір файлу
    elseif ($fileSize > 10000000) {
        echo "Файл занадто великий. Максимальний розмір файлу - 10MB.";
        $upload = false;
    }

    // ДЗ: Отримати введену назву файлу
    $userFileName = isset($_POST["fileName"]) ? trim($_POST["fileName"]) : '';

    // ДЗ: Генерація імені файлу
    if ($upload && empty($userFileName)) {
        $currentDateTime = date('Y-m-d_H-i-s');
        $fileName = "file_" . $currentDateTime . "." . $fileExtension;
    } else {
        // Використовувати введене користувачем ім'я, якщо воно доступне
        // Якщо воно не доступне або пусте, використовуйте лише поточну дату та час
        $sanitizedFileName = preg_replace('/[^A-Za-z0-9_-]/', '', $userFileName); // Видалення спеціальних символів
        $userFileName = ($sanitizedFileName !== '') ? $sanitizedFileName : "file"; // Якщо немає валідного імені, використовувати "file"
        $currentDateTime = date('Y-m-d_H-i-s');
        $fileName = $userFileName . "_" . $currentDateTime . "." . $fileExtension;
    }

    // Переміщення файлу до цільової директорії
    if ($upload && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetD . $fileName)) {
        echo "Файл $fileName успішно завантажено.";
    }
    echo '<p><a href="index.php">Go home</a></p>';
}