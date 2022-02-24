<?php include 'header.php'; ?>
	<p> Exercise 4</p>
	<?php
	$array= array(1 ,2, 4, 5, 5);
	print_r($array);
	$int =rand(0, count($array)-1);
	echo "<br>";
	array_splice($array, $int, 0," $" );
	print_r($array);

	?>

</body>
</html>
