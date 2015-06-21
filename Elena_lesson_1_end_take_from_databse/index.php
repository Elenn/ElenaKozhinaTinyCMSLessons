<?php
    include("config.php");
	include("functions.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js">
		</script>
	</head>
	<body>  	 
	<div class="navigation left">
		<div class="nav_item"><a href="index.php">Главная</a></div> 
		<div class="nav_item"><a href="page_by_toy_types.php?type=3">Плюшевые игрушки</a></div>
		<div class="nav_item"><a href="page_by_toy_types.php?type=2">Машинки</a></div>
		<div class="nav_item"><a href="page_by_author.php?id_author=8">Anna</a></div>
		<div class="nav_item"><a href="page_by_author.php?id_author=9">Maria</a></div>
	</div>	
	<div class="navigation" style="float: right;">
		<div class="nav_item">Maria Maria</div>
		<div class="nav_item">aa@kk.com</div>
		<div class="nav_item">08-06-2015 03:57:11</div>
		<div class="nav_item">Женский</div>
		<div class="nav_item"><a href="action/exit.php">Выход</a></div>
	</div>		
	<div id="container"> 
	    <div id="header">
			<img src="images/logo.png" width="60" style="float: left;">
			<a class="site-name" href="index.php">Обмен игрушками</a>
			<a href="profile_my.html" style="float: right;">
				<img src="http://s4.pikabu.ru/images/previews_comm/2014-04_4/13978305602841.png" height="60">
			</a>
		</div> 							
		<?php 
			$query = mysql_query("SELECT * FROM articles",$db);
			
			if(!mysql_num_rows($query)) { 
				echo '<h1>тут пусто(...</h1>'; 
			} else {
				while($res = mysql_fetch_array($query)) { 
				?>
					<div class="article">
						<div class="top_block">
							<div class="title"><?php echo $res['title']; ?></div>
							<div><img class="image-article" src="uploads/<?php echo $res['img_url']; ?>"></div> 
							<div class="summary"><?php echo return_substr($res['summary']); ?>...</div>
						</div>
						<div class="bottom_block">
							<div class="date"> Дата публикации <?php echo date('d-m-Y H:i:s',$res['date']); ?></div> 
							<div class="more">
								<a href="full.php?id=<?php echo $res['id']; ?>">Подробнее...</a>
							</div>
						</div>
					</div>
	   <?php	} ?> 
	<?php	} ?>
		<div class="nav_page">
			<strong>1</strong> &nbsp; <a href="index.php?page=2">2</a> &nbsp;
		</div> 
	</div>
	<div class="admin_panel_link">
		<a href="admin/edit_news">Admin Site</a>
	</div>
	</body>
</html>   
	  