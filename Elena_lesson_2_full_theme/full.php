<?php
	include("config.php");
	$id = $_GET['id'];
	 
    include 'themes/head.php';
    include 'themes/sidebar_left.php';  	
?>   	
		<div id="container_full">
	  <?php include 'themes/header.php';  
			$id = $_GET['id'];
			$q = mysql_query("SELECT title,full,date,img_url FROM articles WHERE id='$id'",$db);
			$res = mysql_fetch_array($q); 
		?>			 
			<div class="title_full"><?php echo $res['title']; ?></div>
			<div><img class="image-article" src="downloads/<?php echo $res['img_url']; ?>"></div>
			<div class="full"><?php echo $res['full']; ?></div>			
			<div class="date"> Дата публикации <?php echo date('d-m-Y H:i:s',$res['date']); ?></div>			 
		</div>
		<?php include 'themes/footer.php'; ?>  