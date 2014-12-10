<?php
    require_once ("inc/lib.inc.php");
    require_once ("inc/connectedDB.php");
    
    if (!empty($_GET['page']))
        $page = clearStr($_GET['page']);
    $header = "Главная";
    $title = "Главная";
    switch ($page){
        case 'courses': $title = "Наши курсы"; break;
        case 'photos': $title = "Наши ученики за работой"; break;
        case 'about': $title = "История нашей академии"; break;
        case 'contacts': $title = "Наши контакты"; break;
        default: $page = "index"; 
    }

    
    if ($connectDB){
        $pageContent = getPageContent($page);
    }
?>