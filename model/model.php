<?php
    require __DIR__.'/../functions/functions.php';
    function News_AllGet(){
        $que = 'SELECT * FROM newsO ORDER BY date';
        $news = sql_query($que);
        
        return Convert_pathToText($news);
    }
    function news_add(){
        $title = $_POST['title'];
        $date = $_POST['date'];
        $pathToFile = upload_file();
        $que = "INSERT INTO `newsO` (`title`,`pathToText`,`date`) VALUES ('$title','$pathToFile','$date')";
        $result = sql_query($que) or die(mysql_error());
        return $result;
    }
?>