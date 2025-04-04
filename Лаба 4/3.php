<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подсчет палиндромов</title>
    <style>
        textarea { width: 100%; height: 200px; }
        button { margin-top: 14px; }
    </style>
</head>
<body>

<form method="post">
    <textarea name="text"><?php echo isset($_POST['text']) ? htmlspecialchars($_POST['text']) : ''; ?></textarea><br>
    <button type="submit">Подсчитать палиндромы</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["text"])) {
    $text = trim($_POST["text"]);

    // Извлекаем слова из текста
    preg_match_all('/\b\w+\b/u', $text, $matches);
    $words = $matches[0];

    // Функция для проверки, является ли слово палиндромом
    function isPalindrome($word) {
        $word = mb_strtolower($word); // Приводим к нижнему регистру
        return $word === strrev($word); // Сравниваем слово с его реверсией
    }

    // Подсчитываем количество палиндромов
    $palindromeCount = 0;
    foreach ($words as $word) {
        if (isPalindrome($word)) {
            $palindromeCount++;
        }
    }

    echo "<p>Количество палиндромов: <strong>$palindromeCount</strong></p>";
}
?>

</body>
</html>