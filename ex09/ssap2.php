#!/usr/bin/php
<?php
	function cmp_char($c1, $c2) {
		if ($c1 == $c2)
			return 0;
		else if ((ctype_alpha($c1) && ctype_alpha($c2)) || 
			 (is_numeric($c1) && is_numeric($c2)))
			return $c1 > $c2 ? 1 : -1;
		elseif (ctype_alpha($c1))
			return -1;
		elseif (ctype_alpha($c2))
			return 1;
		elseif (is_numeric($c1))
			return -1;
		elseif (is_numeric($c2))
			return 1;
		else
			return $c1 > $c2 ? 1 : -1;
	}
	$array = array();
	for ($i = 1; $i <= $argc; $i++) { 
		$splitted = array_filter(explode(" ", $argv[$i]));
		$array = array_merge($array, $splitted);
	}
	usort($array, function ($str1, $str2) {
		$str1 = strtolower($str1);
		$str2 = strtolower($str2);
		$i = 0;
		while ($str1[$i] || $str2[$i])
		{
			$res = cmp_char($str1[$i], $str2[$i]);
			if ($res != 0) {
				return $res;
			}
			$i++;
		}
		return 0;
	});
	foreach ($array as $up)
		echo $up . "\n";
?>