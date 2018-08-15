<html>
	<head>
 		<title>PHP Test</title>
	</head>
	<body>
		<?php
 		date_default_timezone_set('US/Eastern');
 		$currenttime = date("m-d-Y H:i:s");
 		list($ddd,$ttt) = split(' ',$currenttime);
 		echo "$ddd/$ttt\n";
		?
	</body>
</html>

