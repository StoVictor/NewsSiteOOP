<?php
    require __DIR__.'/Database.php';
    require __DIR__.'/News.php';

    function upload_file(){
        move_uploaded_file($_FILES['text']['tmp_name'],__DIR__.'/../news/'.$_FILES['text']['name']);
        return '/news/'. $_FILES['text']['name'];
    }



?>