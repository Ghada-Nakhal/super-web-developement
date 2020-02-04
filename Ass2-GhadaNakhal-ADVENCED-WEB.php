<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Strings</title>
	</head>
	<body>
		<?php
			$x = 'hello world';
			$s = 'h';
			$y =-1;
			if ($x[0] == $s)
				$count = 1;
			else
				$count = 0;	
			while (TRUE){
				$y = strpos($x,$s,$y+1);

				if ($y)
					$count++;
				else
					break;
			}
		?> 
		<p><?= "$s appears $count times in '$x'";?></p>
	</body>
</html>