<?php
	declare(strict_types=1);	// 반드시 첫 줄에 있어야 됨. PHP 해석기에게 타입을 체크해달라고 요청.
	echo "<h3>Function Basic</h3>";
	
	# function definition/call, parameters, default parameter, return
	# type checking
	# call by value, call by reference
	# 함수 : 특정 기능을 수행할 수 있는 명령어들의 집합. 논리적인 작업단위
	# f(x)= 3x+4 	y = f(5) + 2f(2) - f(4)
	$a = 3;	// 전역변수
	$b = 5;
	$c = abcd($a , $b);	// call
	echo "a= $a<br>";
	function abcd(int &$a, int $b=7) : int {	// default parameter, 반드시 마지막 매개변수에만 적용
		// function body
		// echo "abcd() function is called. $msg<br>
		++$a;	// 지역변수
		echo ($a+$b)."<br>";
		return $a*$b;	// 반환
	}
	
	echo "<h3>Variable</h3>";
	# 변수의 영역과 수명(lifetime) : 전역(global), 지역(local), 정적(static)
	$x = 5;		// global
	$y = 5.5;	// global
	
	function scopeTest(){
		$x = 8;	// local
		global $y;	// global
		static $s = 1;	// 초기화. 함수가 처음 호출되어 실행할 때 메모리 생성. 함수가 끝나도 메모리에 남아있음.
		echo "x =$x<br>";
		echo "y = ".$GLOBALS['y']."<br>";	// $_GET['aa']
		echo "s =$s<br>";
		++$s;
	}
	
	scopeTest();
	scopeTest();
	scopeTest();
	scopeTest();
	echo "x =$x<br>";	// 24번줄 $x
	
	echo "<h3>function with arrays</h3>";
	$arr = [1,2,3,4,5];
	$sum = accArray($arr, 8);
	// echo "sum = $sum<br>";
	print_r($arr);	echo "<br>";
	print_r($sum);	echo "<br>";
	accArray2($arr, 8);
	print_r($arr);	echo "<br>";
	function accArray(array $list, int $a) : array {	// call by value
		$sum = 0;
		for($i=0;$i<count($list);$i++)
			$list[$i] *= $a;
		return $list;	// 배열 반환 
	}
	
	function accArray2(array &$list, int $a){	// call by reference
		$sum = 0;
		for($i=0;$i<count($list);$i++)
			$list[$i] *= $a;
		// return $list;	// 배열 반환 
	}
	
	echo "<h3>array_walk(), array_map()</h3>";
	function printArray($item, $key){
		echo "$key => $item<br>";
	}
	$arr2 = ["Americano"=>4100, "Latte"=>4500, "Mocca"=>4800];
	array_walk($arr2, 'printArray');
	
	function cube($n){
		return $n * $n * $n;	//$n**3;
	}
	// $p = array_map('cube', $arr);
	$p = [];
	for($i=0; $i<count($arr);$i++)
		$p[$i]=cube($arr[$i]);
	print_r($p);	echo "<br>";
?>