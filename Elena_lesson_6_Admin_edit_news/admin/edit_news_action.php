<?php
	session_start();
	include("../config.php");
	include("admin_functions.php");	
	$id = intval($_GET['id']);
	$q = mysql_query("SELECT * FROM articles WHERE id='$id'");
	$res = mysql_fetch_array($q);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="../css/style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
		<script type="text/javascript">
		tinymce.init({
			selector: ".article_add",
			theme: "modern",
			plugins: [
				"advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor colorpicker textpattern"
			],
			toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			toolbar2: "print preview media | forecolor backcolor emoticons",
			image_advtab: true,
			templates: [
				{title: 'Test template 1', content: 'Test 1'},
				{title: 'Test template 2', content: 'Test 2'}
			]
		});
		</script>
	</head>
	<body>
		<?php include("admin_theme/nav.php");?>
		<div id="container" style="height: 980px;width: 80%;position: absolute;right: 0;">
			<form action="edit_news_action_update.php" method="post">
				<input type="hidden" value="<?php echo $id;?>" name="id">
				<input type="textbox" name="title" required placeholder="Заголовок статьи" value="<?php echo $res['title'];?>">
				<textarea required placeholder="Короткое описание" name="summary"><?php echo $res['summary'];?></textarea>
				<select name="type">
					<option value="1" <?php if($res['type']==1) echo "selected";?>>Машинки</option>
					<option value="2" <?php if($res['type']==2) echo "selected";?>>Плюшевые игрушки</option> 
				</select>
				<textarea placeholder="Статья" class="article_add" name="full"><?php echo $res['full'];?></textarea>
				<input type="submit" name="submit" value="Изменить статью">
			</form>
		</div>
	</body>
</html>