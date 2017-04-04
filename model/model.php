<?php
    require __DIR__.'/../functions/functions.php';
    $db = new Database('localhost','root','','News','newsO');

    function News_AllGet_OOP($db){
        $que = 'SELECT * FROM newsO ORDER BY date';
        $all_data = $db->sql_query($que);
        $news = [];
        foreach($all_data as $art){
            array_push($news,new news($art['title'],$art['pathToText'],$art['date'],$art['id']));
        }
        return $news;
    }
?>