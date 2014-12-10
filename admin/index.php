<?php
    header("Content-Type: text/html; charset=utf-8");
    require_once("inc/guard.php");
    ob_start();
    if (isset($_GET['page_id'])){
        $page_id = $_GET['page_id'];
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Админка</title>
    <link href="../default.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="wrapper">
      
      <div id="header">
        <div id="logo">
          <h1><a href="#">Culinary</a></h1>
          <h2><span>Noname Culinary Academy</span></h2>
        </div>
      </div>
      
      <div id="page">
        <div id="page-bgtop">
          
          <div id="content">
            <div class="post">
              <h4 class="title">Данные из выбранной страницы для редактирования</h4>
              <div class="entry">
                <?php
                    require_once("inc/update.php");
                ?>
              </div>
            </div>
          </div>
          
          <div id="sidebar">
            <?php
                echo "<h2>Выберите страницу для редактирования</h2>";
                $result = getPagesIdAndTitles();
                foreach($result as $item)
                    printf("<p><a href='index.php?page_id=%s'>%s</a></p>", $item['page_id'], $item['title']);
            ?>
          </div>
          
          <div style="clear: both; height: 1px"></div>
        </div>
      </div>
      
      <div id="footer">
        <?php require_once("../inc/footer.php");?>
      </div>
      
    </div>
</body>
</html>