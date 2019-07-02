#!/usr/bin/php
<?php
	function ft_is_sort($tab) {
		$init_tab = $tab;
		asort($tab);
		if ($tab === $init_tab) 
			return true;
		arsort($tab);
		if ($tab === $init_tab)
			return true;
		return false;
	}
?>