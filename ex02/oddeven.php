#!/usr/bin/php
<?php
	$part = fopen("php://stdin", 'r');
	echo "Enter a number: ";
	while ($read = fgets($part)) {
		$trimmed = trim($read);
		if (is_numeric($trimmed) == true) {
			if ($trimmed % 2 == 0) 
				echo "The number " . $trimmed . " is even\n";	
			else 
				echo "The number " . $trimmed . " is odd\n";
		}
		else {
			echo "'". $trimmed . "' is not a number\n";
		}
		echo "Enter a number: ";
	}
	fclose($part);
	echo "\n"
?>