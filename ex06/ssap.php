#!/usr/bin/php
<?php
	$array = array();
	for ($i = 1; $i < $argc; $i++) { 
		$splitted = array_filter(explode(" ", $argv[$i]));
		$array = array_merge($array, $splitted);
	}
	sort($array);
	foreach ($array as $up)
		echo $up . "\n";
?>