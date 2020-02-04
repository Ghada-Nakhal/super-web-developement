<!DOCTYPE html>
<html>
<body>
<?php
$pers=array("LastName"=>"nasreddine","FirstName"=>"jad");
print_r($pers);

echo "<br>".$pers["LastName"]. "<br>";
foreach($pers as $elem){echo $elem." ";}
foreach($pers as $key => $elem)
{echo $key. ":". $elem." ";}
?>
</body>
</html>