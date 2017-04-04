<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>News-OOP</title>
</head>
<body>
    
    <?php foreach($items as $item): ?>
        <?php  echo $item->title .':'. $item->GetText();?><br>
    <?php endforeach;?>
    <a href="view/add.php">Добавить новость</a>   
</body>
</html>