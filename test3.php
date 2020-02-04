<!DOCTYPE html>
<html>
<head><title>CSC242: Embedded PHP</title></head>
<body>
<?php for ($i = 99; $i >= 1; $i--) { ?>
<p> <?= $i ?> bottles of water on the wall, <br />
<?= $i ?> bottles of water. <br />
Take one down, pass it around, <br />
<?= $i - 1 ?> bottles of water on the wall. </p>
<?php } ?>

<?php
for ($i = 0; $i < 4; $i++) {
echo "$i squared is " , $i * $i , ".<br>";}
?> 

<?php
$favorite_food = "Lebanese";
echo "Hello<br>My favorite food is: ",$favorite_food."<br>";echo
"$favorite_food[2]";?>

</body>
</html>

/*http://127.0.0.1/webprogramming/firstlab/test3.php */