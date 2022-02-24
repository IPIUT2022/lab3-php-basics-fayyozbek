<?php include 'header.php'; ?>
	<p> Exercise 1</p>
	<p><?php 
$color = array('white', 'green', 'red') ;
foreach ($color as $key => $value) {
		echo $value." ";
}
 ?>   
 </p>
 <ul>
 	<?php foreach ($color as $key => $value) {
 		?>
 		<li><?php
		echo $value." ";?>

		</li>
		<?php
 	} ?>
 </ul>

</body>
</html>
