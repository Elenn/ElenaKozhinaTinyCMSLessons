<?php 
    $q = mysql_query("SELECT id FROM articles",$db);
	$num = 0;
	if(mysql_num_rows($q)) $number_of_articles = mysql_num_rows($q);
	$num = sklonenie($number_of_articles,"статья","статьи","статей");
?>
<div class="nav">
            <div class="nav_item"><a href="edit_news.php">Админ</a></div>
			<div class="nav_item"><a href="add_news.php">Добавить игрушку</a></div> 
			<div class="nav_item"><a href="exit.php">Выйти</a></div>
			<div class="nav_item"><a href="../index.php">Основной сайт</a></div>
			<div class="article_num"><a href="../">Здесь есть <?php echo $num;?></a></div>
</div>