<html>
	<head>
		<title>C1 | PHP</title>
	</head>
	<body>
		<?php 
			echo "hello world <br>";
			$myvar = "hello C1, cse 3100, aust";
			echo $myvar;
			echo "<br>";
			$pi = 3.1416;
			echo $pi . " is the value of PI";
			echo "<br>";
			echo "$pi is the value of PI";
			echo "<br>";
			echo "{$pi} is the value of PI";
			echo "<br>";
			echo strtoupper($myvar);
			echo "<br>";
			echo ucwords($myvar);
			echo "<br>";
			echo strstr($myvar,"cse",false);
			echo "<br>";
			echo strstr($myvar,"cse",true);
			echo "<br>";
			echo strlen($myvar);
			echo "<br>";
			echo str_replace("C1","section C",$myvar);
			echo "<br>";
			echo strpos($myvar,"3100");
		?>
	</body>
</html>






