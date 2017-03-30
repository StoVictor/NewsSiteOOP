<?php
    require __DIR__.'/model/model.php';
    function upload_news(){
        if((!empty($_POST)) && (!empty($_FILES))){
            news_add();
            
        }
    }
    upload_news();
    header('Location: index.php');
?>