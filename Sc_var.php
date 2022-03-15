<?php
	$x=7;
	echo $x."<br>";
	echo "x= $x 입니다.<br>";
	var_dump($x);
	
	$x="welcome";
	var_dump($x);
	
	$x=7.123;
	var_dump($x);
	
	$x=true;
	var_dump($x);
	
	$x=array(3,7,9,13);
	var_dump($x);
	
	echo "<br>";
	var_dump(is_int($x));
	
	class Book{
		function Book($t){
			$this->$title=$t;
		}
	}
	$mybook=new Book("Harry Porter");	
	echo "<br>";
	var_dump($mybook);	
	
	define("PHI",3.1415);
	$x=4*PHI;
	var_dump($x);
	
	echo "<h2>Operator Test</h2>";
	echo "<hr>";
	echo "<h3>원 면적과 둘레 계산하기</h3>";
	#반지를 읽어오기
	$r=$_GET['r']??5;	//??:null checking
	if(!isset($_GET['r'])) $r=5;
	else $r=$_GET['r'];
	$size=$r**2*PHI;
	$length=$r*2*PHI;
	echo "<h4>면적 = $size 둘레 = $length</h4>";
	
	#자동차 이동한 거리(km), 사용한 연료(liter)를 입력받기. 연비=km/liter
	#연비>=20:고연비차, 연비<=8:저연비차, 나머지는 일반차 출력
	$km=$_GET['km']??1;
	$liter=$_GET['liter']??1;
	$rate=$km/$liter;
	echo "<h4>연비=$rate</h4>";
	$result=($rate>=20)? "고연비차" :(($rate<=8)? "저연비차" : "일반차");
	echo "<h4>당신의 자동차는 {$result} 입니다.</h4>";
?>
