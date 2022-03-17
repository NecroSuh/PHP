<?php
#BMI 계산: bmi=몸무게(kg)/(키(m)*키(m))
#몸무게와 키를 입력바도 BMI 지수를 계산해서 출력하기
	$kg=$_GET['kg'];
	$m=$_GET['m'];
	$m/=100;	#cm-->m
	$BMI=round($kg/($m**2),1);
	$m*=100;
	echo "<h1>BMI 지수 계산하기</h1>";
	echo "<h3>키: {$m}cm</h3>";
	echo "<h3>몸무게: {$kg}kg</h3>";
	echo "<h3>BMI=$BMI</h3>";
	
	if($BMI<=18.5)
		echo "<img src='bmi1.png'>";
	elseif($BMI>18.5&&$BMI<=23)
		echo "<img src='bmi2.png'>";
	elseif($BMI>23&&$BMI<=25)
		echo "<img src='bmi3.png'>";
	else
		echo "<img src='bmi4.png'>";
	
	
?>