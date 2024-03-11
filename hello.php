<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Определение этапа тренировки</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = isset($_POST["age"]) ? intval($_POST["age"]) : 0;

    if ($age > 0) {
        if ($age <= 18) {
            $stage = "Начинающий";
        } elseif ($age <= 35) {
            $stage = "Средний уровень";
        } else {
            $stage = "Профессионал";
        }

        echo "Ваш возраст: $age лет. Этап тренировки: $stage.";
    } else {
        echo "Пожалуйста, введите корректный возраст.";
    }
}
?>

<form action="" method="post">
    <label for="age">Введите ваш возраст:</label>
    <input type="text" id="age" name="age">
    <input type="submit" value="Определить этап тренировки">
</form>

</body>
</html>

