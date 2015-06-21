<?php 
    $q = mysql_query("SELECT id FROM articles",$db);
	$num = 0;
	if(mysql_num_rows($q)) $number_of_articles = mysql_num_rows($q);
	$num = sklonenie($number_of_articles,"статья","статьи","статей");
?>
<div class="nav">
            <div class="nav_item"><a href="../admin/edit_news.php">Админ</a></div>
			<div class="nav_item"><a href="../admin/add_news.php">Добавить новость</a></div>
			<div class="nav_item"><a href="../admin/delete_news.php">Удалить новость</a></div> 
			<div class="nav_item"><a href="../admin/exit.php">Выйти</a></div>
			<div class="nav_item"><a href="../index.php">Основной сайт</a></div>
			<div class="article_num"><a href="../">Здесь есть <?php echo $num;?></a></div>
</div>