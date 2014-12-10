<?php
    if ($page_id){
        $page = getPageContent($page_id);
        $title = $page['title'];
        $description = $page['description'];
        $keywords = $page['keywords'];
        $text = $page['text'];
    }
         
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $keywords = $_POST['keywords'];
        $text = $_POST['text'];
        $page_id = $_POST['page_id'];
        
        if (!$title || !$description || !$keywords || !$text)
            echo "<h2>Заполните все поля формы</h2>";
        else{
            updatePageData($title, $description, $keywords, $text, $page_id);
            header("Location: http://nonameacademy.ua/admin/");
            exit;
        }
    }
    
       
    echo <<<HERE
    <form method="post" action="{$_SERVER['REQUEST_URI']}" name="update">
    
        <p>Название страницы<br />
        <input type="text" name="title" size="30" value="$title"/></p>
                        
        <p>Мета-описание страницы<br />
        <input type="text" name="description" size="80" value="$description"/></p>
                        
        <p>Ключевые слова страницы<br />
        <input type="text" name="keywords" size="80" value="$keywords"/></p>
                        
        <p>Основной контент страницы<br />
        <textarea name="text" cols="60" rows="20">$text</textarea></p>
                        
        <input type="hidden" name="page_id" value="$page_id"/>
                        
        <p><input type="submit" name="submit" value="Сохранить изменения"/></p>
        </form>
HERE;
?>