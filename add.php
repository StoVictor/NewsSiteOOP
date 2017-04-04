<?php
    require __DIR__.'/model/model.php';
    
    function upload_news($db){
        if((!empty($_POST)) && (!empty($_FILES))){
          $db->update_or_add($_POST['title'],$_POST['date'],upload_file());
        }
    }
    upload_news($db);
    header('Location: index.php');
?>