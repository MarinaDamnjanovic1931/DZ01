<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Type a date in format July 04
			<br>
   			<input type="text" name="fname">
   			<input type="submit">
		</form>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
     			$date = $_POST['fname']; 
     			if (empty($date)) {
         			echo "Input is empty";
     			} else {
         			$d1=strtotime($date);
					$d2=ceil(($d1-time())/60/60/24);
					echo "There are " . $d2 ." days until " . $date;
     			}
			}
		?>
	</body>
</html>