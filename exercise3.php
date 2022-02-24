<?php include 'header.php'; ?>
	<p> Exercise 3</p>
	<?php
	$fp = fopen("text.txt", "r"); // Открываем файл в режиме чтения
	$array;
	if ($fp)
	{
		$allWords= array();
		while (!feof($fp))
		{
		$mytext = fgets($fp, 999);
		$keywords = preg_split("/(\s)/", $mytext);
		foreach ($keywords as $key => $value) {
			$allWords[]=$value;

			}
		}
		
		for ($i=0; $i <count($allWords)-2; $i+=3) { 

			$array[$allWords[$i]]=$allWords[$i+1];
		}

		
			
	}

	else echo "There is no such file <br> <h1> :( </h1> <br>";
	fclose($fp);


	foreach ($array as $key => $value) {
		echo "<p>Key: \"".$key."\" Value: \"".$value."\" </p>";
	}
	?>

</body>
</html>
