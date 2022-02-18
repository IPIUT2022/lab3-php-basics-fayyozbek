<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
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

	else echo "Ошибка при открытии файла";
	fclose($fp);


	foreach ($array as $key => $value) {
		echo "<p>Key: \"".$key."\" Value: \"".$value."\" </p>";
	}
	?>

</body>
</html>
