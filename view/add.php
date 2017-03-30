<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>News-OOP</title>
</head>
<body>
    <form action="../add.php" method="post" enctype="multipart/form-data">
        <label for="title">Название новости</label>
        <input type="text" name="title"><br>
        <label for="text">Новость</label>
        <input type="file" name="text"><br>
        <label for="date">Дата</label>
        <input type="date" name="date">
        <input type="submit" value="Отправить">
    </form>
    <a href="../index.php">На главную</a>
</body>
</html>