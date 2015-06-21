<?php
    session_start();
    include("config.php");
	include("functions.php");
    include 'themes/head.php';
    include 'themes/sidebar_left.php'; 
	$page = (isset($_GET['page'])) ? $_GET['page'] : ''; 
	$first_name = isset($_SESSION['first_name']) ? $_SESSION['first_name'] : ''; 
	$last_name = isset($_SESSION['last_name']) ? $_SESSION['last_name'] : '';
    include 'themes/sidebar_right.php'; 	
?>    	
	<div id="container"> 
	    <?php include 'themes/header.php'; ?>						
		<?php 
		    if(isset($_SESSION['login'])) { 
			
			$on_page = 6; 
			$current_page = isset($_GET['page'])? intval($_GET['page']): 1;
            $num_pages = ceil((mysql_num_rows(mysql_query("SELECT id FROM articles")))/$on_page); 
			
			if(!$num_pages) { 
				echo '<h1>тут пусто(...</h1>'; 
			} else {
			    $q = "SELECT * FROM articles"; 
			    $query = query_with_pagignation($on_page, $current_page, $num_pages, $q, $db);
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
				    <div class="nav_page">
				<?php	
					for ($page = 1; $page <= $num_pages; $page++) {
						if ($page == $current_page) { ?>
							<strong><?php echo $page; ?></strong> &nbsp; <?php
						} else { ?>
							<a href="index.php?page=<?php echo $page; ?>"><?php echo $page; ?></a> &nbsp; <?php
						}
					}  
				} ?>
				    </div>
	
		        </div>
<?php } else if ($page=='reg') { ?> 
      <div class="auth_form" style="height: 450px">
			Регистрация
			<form action="action/reg.php" method="POST">
				<input type="textbox" name="login" placeholder="Логин" required autocomplete="off" style="width: 290px;"/><br/>
				<input type="email" name="email" placeholder="E-mail" required autocomplete="off" style="width: 290px;"/><br/>
				<input type="textbox" name="first_name" placeholder="Имя" required autocomplete="off" style="width: 290px;"/><br/>
				<input type="textbox" name="last_name" placeholder="Фамилия" required autocomplete="off" style="width: 290px;"/><br/>
				
				<select name="sex" style="width: 290px;">
					<option value="0" disable selected required>Выберите пол</option>
					<option value="0" selected>Женщина</option>
					<option value="1">Мужчина</option>
				</select><br/>
				
				<input type="password" name="password" placeholder="Пароль" required style="width: 290px;"/><br/>
				<input type="password" name="r_password" placeholder="Повторите пароль" required style="width: 290px;"/><br/>
				
				<input type="submit" name="sumbit" value="Зарегистрироваться"/>
			</form>
		</div> 
<?php } else { ?>	
	<div class="auth_form">
		Вход
		<form action="action/auth_action.php" method="POST">
			<input type="textbox" name="login" placeholder="Логин" style="width: 290px;"/><br/>
			<input type="password" name="password" placeholder="Пароль" style="width: 290px;"/><br/>
			<input type="submit" name="submit" value="Войти"/>
		</form>
	</div> 
<?php } ?>	
    <?php include 'themes/footer.php'; ?>
	  