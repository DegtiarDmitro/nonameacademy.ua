<?php
    $mainMenu = array(
                    array("href"=>"index.php", "link"=>"Главная"),
                    array("href"=>"index.php?page=courses", "link"=>"Кулинарные курсы"),
                    array("href"=>"index.php?page=photos", "link"=>"Фотогалерея"),
                    array("href"=>"index.php?page=about", "link"=>"О нас"),
                    array("href"=>"index.php?page=contacts", "link"=>"Контакты"),
                );
                
    function drawMenu($menu){
        if (is_array($menu)){
            echo "<ul>";
            foreach($menu as $item)
                echo "<li><a href={$item['href']}>{$item['link']}</a></li>";
            echo "</ul>";
        }
    }
    
    function clearStr($data){
        return trim(strip_tags($data));
    }
?>