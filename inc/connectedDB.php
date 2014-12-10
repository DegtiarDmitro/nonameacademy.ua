<?php
    define("DB_NAME", "nonameacademy.db");
    
    $connectDB = new SQLite3("databases/".DB_NAME);
    
    function getPageContent($page){
        global $connectDB;
        $sql = "SELECT title, keywords, description, text FROM pages WHERE page_id = '$page'";
        if (!$result = $connectDB->query($sql))
            return false;
        $pageContent = $result->fetchArray(SQLITE3_ASSOC);
        return $pageContent;
    }
?>