<?php
	/*for($a=1;$a<=10;$a++)
	{
		for($b=1;$b<=$a;$b++)
		{
			echo "* ";
		}
		echo "<br>";
	}
	echo "<br>";
	*/
	
	for($c=1;$c<=10;$c++)
	{
		for($d=9;$d>=$c;$d--)
			echo "&nbsp;&nbsp;";
	
		for($e=1;$e<=$c;$e++)
			echo "* ";
	
		echo "<br>";
	}
?>