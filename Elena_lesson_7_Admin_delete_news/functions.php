<?php 
	
	function return_substr($s)
	{
		return mb_substr($s,0,300);
	}
	
	function query_with_pagignation($on_page, $current_page, $num_pages, $q, $db)
	{ 	  
		if($current_page < 1)
			$current_page = 1;
		if($current_page > $num_pages)
			$current_page = $num_pages;
		$start_from = ($current_page - 1) * $on_page;
		
		return mysql_query("$q ORDER BY date DESC LIMIT $start_from, $on_page",$db); 
	}
?>			
			