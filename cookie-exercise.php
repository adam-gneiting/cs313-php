
<!DOCTYPE html>
<html>
<head>
	<title>Cookie Exercise</title>
</head>
<body>
	<?php

	$visits = 1;

	if (isset($_COOKIE['count'])) {
		$visits = $_COOKIE['count'] + 1;
	}

	setcookie('count', $visits);

	?>

	<div class="page-count">
		<?php 
		echo "$visits visit";
		echo ($visits > 1) ? 's' : '';
		?>	
	</div>

	<?php

	for ($i = 1; $i <= 5; ++$i) {
		echo sprintf('<div class="counted-%1$s">This is div number %1$d</div>', $i);
	}
	?>
</body>
</html>