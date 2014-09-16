<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-5 - Andmetüübid (3)</title>
</head>
	<h2>Booleans</h2> 
		<?php 
			$result1 = true;
			$result2 = false;
		?>
		
		<?php 
			echo "Result 1 : {$result1}"; 
		?>
			<br>
		<?php 
			echo "Result 2 : {$result2}"; 
		?>
			<br>
		<?php 
			echo "Kas result1 on boolean? " .is_bool($result1); 
		?>
			<br>
		<?php 
			echo "Kas result2 on boolean? " .is_bool($result2); 
		?>
			<br>
		
	<h2>Andmetüüpide olekud</h2> 	
		<h3>NULL</h3> 	
			<?php 
				$var1  = null;
				$var2  = "";
				$var3  = 0;
			?>
			
			<?php 
				echo "var1 on null?" .is_null($var1); 
			?>
				<br>
				
			<?php 
				echo "var2 on null?" .is_null($var2); 
			?>
				<br>
			
			<?php 
				echo "var3 on null?" .is_null($var3); 
			?>
				<br>
			<?php 
				echo "var4 on null?" .is_null($var4); 
			?>
				<br>
			
		<h3>Set</h3> 	
			<?php 
				echo "Kas var1 on väärtustatud?" .isset($var1); 
			?>
				<br>
				
			<?php 
				echo "Kas var2 on väärtustatud?" .isset($var2); 
			?>
				<br>
			
			<?php 
				echo "Kas var3 on väärtustatud?" .isset($var3); 
			?>
				<br>
			<?php 
				echo "Kas var4 on väärtustatud?" .isset($var4); 
			?>
				<br>
		
		<h3>Empty</h3> 	
		
			<?php 
				echo "Kas var1 on väärtustatud?" .empty($var1); 
			?>
				<br>
				
			<?php 
				echo "Kas var2 on väärtustatud?" .empty($var2); 
			?>
				<br>
			<?php 
				echo "Kas var3 on väärtustatud?" .empty($var3); 
			?>
				<br>
			<?php 
				echo "Kas var4 on väärtustatud?" .empty($var4); 
			?>
				<br>
	<h2>Andmetüübi teisendamine</h2> 	
		<?php 
			$count = 2;
		?>
		<?php 
			echo gettype($count); 
		?>
			<br>
		<?php 
			echo $count; 
		?>
			<br>
		<?php  
			 settype($count , "string"); 
		?>
			<br>
		<?php 
			echo gettype($count); 
		?>
			<br>
		<?php 
			echo $count; 
		?>
			<br>
		<?php  
			 settype($count , "double"); 
		?>
			<br>
		<?php 
			echo gettype($count); 
		?>
			<br>
		
		<?php
			print_r($count);
		?>	
			<br>
		
		<?php  
			 settype($count , "array"); 
		?>
			<br>
		<?php 
			echo gettype($count); 
		?>
			<br>
			
		Array
	<pre>
		<?php
			print_r($count);
		?>	
	</pre>
			<br>
		<?php  
			 settype($count , "boolean"); 
		?>
		<?php 
			echo gettype($count); 
		?>
			<br>
		<?php 
			echo $count; 
		?>
			<br>
	<h2>Konstandid</h2>
		<?php 
			$max_width = 980; 
		?>	
		<?php 
			echo $max_width; 
		?>
			<br>
		<?php 
			define("MAX_WIDTH", 980); 
		?>
		<?php
			echo MAX_WIDTH; 
		?>
	
<body>	
</body>
</html>