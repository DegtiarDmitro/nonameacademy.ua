<?php 
    header("Content-Type: text/html; charset=utf-8");
    require_once("inc/header.php");
    require_once("inc/meta.php");
?>

<div id="wrapper">
  
  <div id="header">
    <div id="logo">
      <h1><a href="#">Culinary</a></h1>
      <h2><span>Noname Culinary Academy</span></h2>
    </div>
  </div>
  
  
  <div id="menu">
    <?php drawMenu($mainMenu)?>      
  </div>
  
  
  <div id="page">
    <div id="page-bgtop">
      
      <div id="content">
        <div class="post">
          <h2 class="title"><?php echo $pageContent['title']?></h2>
          <div class="entry">
            <?php echo $pageContent['text']?>
          </div>
        </div>
      </div>
      
      <div id="sidebar">
        <?php require_once("inc/sidebar.php");?>
      </div>
      
      <div style="clear: both; height: 1px"></div>
    </div>
  </div>
  
  
  <div id="footer">
    <?php require_once("inc/footer.php");?>
  </div>
  
  
</div>
</body>
</html>
