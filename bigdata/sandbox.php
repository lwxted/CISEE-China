<!DOCTYPE html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7, IE=9" /> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<code><pre>
<?php
	require_once('./initialize.php');
	function increment ($someArray) {
		$someArray[0] += 1;
	}
	function testing_string ($someString) {
		$someString = 'changed';
	}
	$aArray = array(2, 2);
	$aString = 'something';
	increment($aArray);
	testing_string($aString);
	var_dump($aArray);
	echo $aString;
?>

</pre></code>
</body>