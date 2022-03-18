<?php
	for($i=0;$i<8;$i++)
	{
		$a[$i]=$i+2;
		echo $a[$i]." ";
	}
	
	echo "<br>";
	
	for($j=0;$j<9;$j++)
	{
		$b[$j]=$j+1;
		echo $b[$j]." ";
	}
	
	echo "<br>---------------<br>";
	
	for($i=0;$i<9;$i++)
	{
		$c=$a[0]*$b[$i];		//$a[0]은 구구단 2단
		echo "$a[0] X $b[$i]=$c<br>";
	}
	
	echo "<br>---------------<br>";
	
	for($i=0;$i<9;$i++)
	{
		$c=$a[4]*$b[$i];		//$a[4]는 구구단 6단
		echo "$a[4] X $b[$i]=$c<br>";
	}
	
	echo "<br>---------------<br>";

?>