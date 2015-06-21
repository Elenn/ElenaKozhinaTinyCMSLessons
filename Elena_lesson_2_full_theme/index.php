<?php
    include("config.php");
	include("functions.php");
    include 'themes/head.php';
    include 'themes/sidebar_left.php';	
?>   
	<div class="navigation" style="float: right;">
		<div class="nav_item">Maria Maria</div>
		<div class="nav_item">aa@kk.com</div>
		<div class="nav_item">08-06-2015 03:57:11</div>
		<div class="nav_item">Женский</div>
		<div class="nav_item"><a href="action/exit.php">Выход</a></div>
	</div>		
	<div id="container"> 
	    <?php include 'themes/header.php'; ?>						
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
							<div><img class="image-article" src="downloads/<?php echo $res['img_url']; ?>"></div> 
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
    <?php include 'themes/footer.php'; ?>
	  