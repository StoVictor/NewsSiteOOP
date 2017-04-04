<?php
    require __DIR__.'/model/model.php';
    $items = News_AllGet_OOP($db);
    include __DIR__.'/view/view.php';





?>