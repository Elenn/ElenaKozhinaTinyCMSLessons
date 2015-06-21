<?php
	session_start();
	include("config.php");
	$id = $_SESSION['id']; 
	$q = mysql_query("SELECT is_admin FROM users WHERE id='$id' ",$db);
	$r = mysql_fetch_array($q);
	include 'themes/head.php';
	if($r['is_admin']==0) {
?>   
		<div class="auth_form">
			Тебе сюда нельзя :(
		</div> 
<?php
}
else { 	?> 
		<div class="nav">
			<div class="nav_item"><a href="admin/add_news.php">Добавить новость</a></div>
			<div class="nav_item"><a href="admin/delete_news">Удалить новость</a></div>
			<div class="nav_item"><a href="admin/edit_news">Редактировать новость</a></div>
			<div class="nav_item"><a href="action/exit">Выйти</a></div>
		</div> 
<?php
} ?>
    </body>
</html>