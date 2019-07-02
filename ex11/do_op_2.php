#!/usr/bin/php
<?php
	function replace($exp) {
		$exp = str_replace("+", " + ", $exp);
		$exp = str_replace("-", " - ", $exp);
		$exp = str_replace("*", " * ", $exp);
		$exp = str_replace("/", " / ", $exp);
		$exp = str_replace("%", " % ", $exp);
		return $exp;
	}
	function calc($argc, $argv) {
		if ($argc != 2)
			return 1;
		$exp = replace(trim($argv[1]));
		$array = array_values(array_filter(explode(" ", $exp)));
		if (count($array) != 3 || !is_numeric($array[0]) || !is_numeric($array[2]))
			return 2;
		$num1 = $array[0];
		$sign = $array[1];
		$num2 = $array[2];
		if ($sign == '+') {
			echo $num1 + $num2 . "\n";
		}
		else if ($sign == '-') {
			echo $num1 - $num2 . "\n";
		}
		else if ($sign == '*') {
			echo $num1 * $num2 . "\n";
		}
		else if ($sign == '/') {
			echo $num1 / $num2 . "\n";
		}
		else if ($sign== '%') {
			echo $num1 % $num2 . "\n";
		}
		else
			return 2;
		return (0);
	}
	$ret = calc($argc, $argv);
	if ($ret == 2)
 		echo "Syntax Error\n";
 	else if ($ret == 1)
 		echo "Incorrect Parameters\n";
?>