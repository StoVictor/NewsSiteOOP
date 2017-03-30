<?php
    function sql_connect(){
        mysql_connect('localhost','root','');
        mysql_select_db('News');
    }
    function sql_query($que){
        sql_connect();
        $res = mysql_query($que);
        if(gettype($res) != 'boolean'){
                $ret = [];
            while($row = mysql_fetch_assoc($res)){
                array_push($ret,$row);
            }   
            return $ret;    
        } else{
            return $res;  
        } 

    }
    function News_GetText($pathToText){
        return iconv('windows-1251','utf-8', file_get_contents($pathToText));
    }

    function Convert_pathToText($news){
        $ret = [];
        foreach($news as $el){
            $el['pathToText'] = News_GetText(__DIR__.'/../'.$el['pathToText']);
            array_push($ret,$el);
        }
        return $ret;
    }

    function upload_file(){
        move_uploaded_file($_FILES['text']['tmp_name'],__DIR__.'/../news/'.$_FILES['text']['name']);
        return '/news/'. $_FILES['text']['name'];
    }



?>