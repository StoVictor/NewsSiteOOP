<?php
    abstract class Article {
        public $title;
        public $pathToFile;
        public $article_date;
        public $id;
        
        public function __construct($title,$pathToFile,$date,$id){
            $this->title = $title;
            $this->pathToFile = $pathToFile;
            $this->article_date = $date;
            $this->$id = $id;
        }
        
    }


?>