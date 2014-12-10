<?php
    define("DB_NAME", "nonameacademy.db");
    
    $connectDB = new SQLite3("../databases/".DB_NAME);
    
    function getPageContent($page){
        global $connectDB;
        $sql = "SELECT title, keywords, description, text FROM pages WHERE page_id = '$page'";
        if (!$result = $connectDB->query($sql))
            return false;
        $pageContent = $result->fetchArray(SQLITE3_ASSOC);
        return $pageContent;
    }
    
    function getPagesIdAndTitles(){
        global $connectDB;
        $sql = "SELECT page_id, title FROM pages";
        
        if (!$result = $connectDB->query($sql))
            return false;
        $pagesId = array();
        while ($pageId = $result->fetchArray(SQLITE3_ASSOC)){
            $pagesId[] = $pageId;   
        }
        return $pagesId;
    }
    
    function updatePageData($title, $description, $keywords, $text, $page_id){
        global $connectDB;
        $sql = "UPDATE pages 
                SET title = '$title', description = '$description', keywords = '$keywords', text = '$text'
                WHERE page_id = '$page_id'";
        echo $sql;
        if(!$connectDB->query($sql)){
            echo "Запрос не произведен";
            return false;
        }
        echo "Запрос выполнен";    
        return true;
    }
?>