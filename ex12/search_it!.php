#!/usr/bin/php
<?php
	if ($argc > 2)
	{
		$key = trim($argv[1]);
		for ($i = 2; $i < $argc; $i++)
		{
			$array = explode(":", $argv[$i]);
			$key1 = trim($array[0]);
			$val1 = trim($array[1]);
			if ($key === $key1)
				$save_val = $val1;	
		}
		if ($save_val)
			echo $save_val . "\n";
	}
?>