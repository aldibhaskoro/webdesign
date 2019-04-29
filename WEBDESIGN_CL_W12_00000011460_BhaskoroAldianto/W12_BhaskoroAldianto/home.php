<?php
	if (isset($_COOKIE['visitcount'])) {
		$_COOKIE['visitcount'] = 0;
	}

	$visitcount = $_COOKIE['visitcount']+1;
	setcookie('visitcount', $visitcount, time()+3600*24*365);
	if ($visitcount > 1) {
		echo "This is visit number $visitcount.";
	}
	else {
		echo "Welcome to your first visit!";
	}
?>