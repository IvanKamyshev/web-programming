<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['artist_name'] = $_POST['artist_name'] ?? '';
    $_SESSION['music_genre'] = $_POST['music_genre'] ?? '';
    $_SESSION['number_albums'] = $_POST['number_albums'] ?? '';

    header("Location: display.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма ввода</title>
</head>
<body>

<h2>Введите ваши данные</h2>
<form method="post">
    <label>Имя_артиста: <input type="text" name="artist_name" required></label><br><br>
    <label>Жанр_музыки: <input type="text" name="music_genre" required></label><br><br>
    <label>Количество_альбомов: <input type="number" name="number_albums" required></label><br><br>
    <button type="submit">Сохранить</button>
</form>

</body>
</html>