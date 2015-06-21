<?php
	session_start();
	$id = $_SESSION['id'];
	include("../config.php");
    include("admin_theme/head.php"); 
	include("admin_functions.php");	
	include("admin_theme/nav.php");	
?>
 		<div id="container" style="height: 1200px;width: 80%;position: absolute;right: 0;">
		    <div style="background: white; width: 900px; border: 1px solid #DDDDDD;padding: 5px;font-family: Segoe UI;color: gray;font-size: 20px;">
				<p>Загрузить фотографию новой игрушки</p>  
					<?php $name="";
                    $date = time();					
					if (isset($_FILES['file']['name'])) {
						$name = $_FILES['file']['name']; 
						$tmp_name = $_FILES['file']['tmp_name']; 
						$location = '../uploads/';
						
						if(!empty($name)) {  							
							if (move_uploaded_file($tmp_name, $location.$name.$date))  {
								echo 'Фотография игрушки выбрана !';
								?>
								<img src="<?php echo $location.$name.$date; ?>" height="50"/>
								<?php
							}
						}

					}	else {
						echo 'Выберите файл';
					} ?> 
				
				
				<form action="add_news.php" method="POST" enctype="multipart/form-data"> 
				    <input type="file" name="file" /> 
				    <input type="submit" class="submit-picture" value="submit">
				</form> 
				<br>
			</div>
			<br>  
				
		    <?php $img_url = isset($name) ? $name.$date : ''; ?>
			
			<form action="add_news_action.php" method="post">
				<input type="hidden" value="<?php echo $id;?>" name="id">
				<input type="hidden" value="<?php echo $img_url;?>" name="img_url">
				<input type="textbox" name="title" required placeholder="Заголовок статьи">
				<textarea required placeholder="Короткое описание" name="summary"></textarea>
				<select name="type">
					<option value="2">Машинки</option>
					<option value="3">Плюшевые игрушки</option> 
				</select> 
				
				<textarea placeholder="Статья" class="article_add" name="full"></textarea>
				
				<input type="submit" name="submit" value="Добавить статью">
			</form>
		</div>
	</body>
</html>