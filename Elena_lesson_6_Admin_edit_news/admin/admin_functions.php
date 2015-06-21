<?php 
	function sklonenie($number_of_articles,$string1,$string2,$string3)
	{
		$m = $number_of_articles%10;
		$j = $number_of_articles%100;
		if(!$m||$m>=5 || ($j>=10 && $j<=20)) 
		    return $number_of_articles. ' ' .$string3;
		if($m>=2 && $m<=4) 
		    return $number_of_articles. ' ' .$string2;
		return $number_of_articles. ' ' .$string1;
	} 
	
	function filter_data($var)
	{
		$var = mysql_real_escape_string($var);
		$var = htmlspecialchars($var);
		$var = trim($var);
		return $var;
	}
?>