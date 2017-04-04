<?php
    require __DIR__.'/Article.php';

    class News extends Article {
        public function GetText(){
            return iconv('windows-1251','utf-8', file_get_contents(__DIR__.'/..'.$this->pathToFile));
        }
    }
?>