<?php
	require_once('./initialize.php');
	$user = new User();
	echo 's <br />';
	$n = $user->password_matches('lwxted1204', '$P$BXua20pKEjWKaV67FRCdtqYAyyvWJf1');
	if ($n) {
		echo 'y';
	} else {
		echo 'n';
	}
?>