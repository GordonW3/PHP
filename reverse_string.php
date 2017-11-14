
<?php
	echo $string = "hello world";

	$array = explode(" ", $string);

	$rarray = array_reverse($array);

	echo $newstring = implode(" ", $rarray);
?>