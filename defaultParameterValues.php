<!DOCTYPE html>
<html>

	<?php
		function print_separated($str, $separator = ", ") {
			if (strlen($str) > 0) {
				print $str[0];
				for ($i = 1; $i < strlen($str); $i++) {
					print $separator . $str[$i];
				}
			}
		}

		print_separated("hello"); # h, e, l, l, o 
		echo "<br>";
		print_separated("hello", "-"); # h-e-l-l-o 
	?>

</html>