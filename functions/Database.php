<?php
    class Database {
        private $server;
        private $login;
        private $password;
        private $db;
        private $table;
        
        public function __construct($server,$login,$password,$db,$table){
            $this->server = $server;
            $this->login = $login;
            $this->password = $password;
            $this->db = $db;
            $this->table = $table;
            $this->sql_connect();
        }
        
       private function sql_connect(){
            mysql_connect($this->server, $this->login, $this->password);
            mysql_select_db($this->db);
        }
        
        public function sql_query($que){
         //   $this->sql_connect();
            $res = mysql_query($que) or die(mysql_errno().':'.mysql_error());
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
        
        public function AllNews_Get(){
            $allNews = $this->sql_query('SELECT * FROM ' . $this->table);
            return $allNews;
        }
        
        public function Add_News($title,$date,$pathToFile){    
            $que = "INSERT INTO `newsO` (`title`,`pathToText`,`date`) VALUES ('$title','$pathToFile','$date')";
            $result = $this->sql_query($que);
            return $result;
        }
        
        public function update_news($date,$pathToFile,$id){
            $que = "UPDATE `newsO` SET `pathToText`='".$pathToFile."', `date`='".$date."' WHERE `id`='".$id."'";
            $result = $this->sql_query($que);
            return $result;
        }
        
        public function update_or_add($title,$date,$pathToFile){
            $allNews = $this->AllNews_Get();
            foreach($allNews as $el){
                if($el['title'] == $title){
                   return $this->update_news($date,$pathToFile,$el['id']);         
                }
            }
            return $this->Add_News($title,$date,$pathToFile);
        }    
    }
?>