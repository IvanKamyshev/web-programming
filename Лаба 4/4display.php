 <?php
session_start();

$artist_name = $_SESSION['artist_name'] ?? 'Не задано';
$music_genre = $_SESSION['music_genre'] ?? 'Не задано';
$number_albums = $_SESSION['number_albums'] ?? 'Не задано';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваши данные</title>
</head>
<body>

<h2>Ваши данные</h2>
<p><strong>Имя артиста:</strong> <?php echo htmlspecialchars($artist_name); ?></p>
<p><strong>Жанр музыки:</strong> <?php echo htmlspecialchars($music_genre); ?></p>
<p><strong>Количество альбомов:</strong> <?php echo htmlspecialchars($number_albums); ?></p>

<a href="form.php">Назад к форме</a>

</body>
</html>