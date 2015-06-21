<?php
    include("../config.php");  
    include("admin_theme/head.php");
    include("admin_functions.php");	
    include("admin_theme/nav.php"); 
?>
		<div id="container_full" style="width: 80%;position: absolute;right: 0;">
		
		<?php
			$q = mysql_query("SELECT * FROM articles",$db);
			while($res = mysql_fetch_array($q))
			{   
			    $id_author = $res['id_author'];
				 
				$q3 = mysql_query("SELECT login FROM users WHERE id='$id_author'",$db);
				$res_author = mysql_fetch_array($q3);?>
			 
			<div class="delete_news">
				<div class="delete_title"><?php echo $res['title']; ?></div>
				<div class="delete_summary"><?php echo $res['summary']; ?></div>
				<div class="date"><?php echo date('d-m-Y H:i:s',$res['date']); ?></div>
				<div class="date"> Автор <?php echo $res_author['login']; ?></div>
				<span style="padding-right: 50px;">
				    <a href="edit_news_action.php?id=<?php echo $res['id']; ?>" class="delete_news_link">Редактировать новость</a>
				</span>
				<span><a href="delete_news_action.php?id=<?php echo $res['id']; ?>" class="delete_news_link">Удалить статью</a></span>
			</div>				 
	<?php	} ?>
		</div>
	</body>
</html>