<?php
	include_once('Sc_ex07.php');	// Sc_ex07.php 내용을 이 자리에 가져오기
	# Object creation
	$c = new Circle(5);	// 메모리 할당. $c 변수는 객체참조변수. 객체의 주소가 들어있음.
	//$c->r = 15;			// $c 객체의 멤버변수(속성) r에 5를 대입
	$c->setRadius(15);		// $c 객체에게 setRadius 요청하면서 15 값을 넣어달라고 부탁.
	$c->calcSize();		// 메소드 호출. $c 객체에게 calcSize() 함수 실행해라 요청.
	$c->display();
	echo "반지름 = ".$c->getRadius()."<br>";
	
	
	$c2 = new Circle(8);
	//$c2-> r = 8;
	$c2->calcSize();	// 메소드 호출 .$c 객체에게 calcSize() 함수 실행해라 요청.
	$c2->display();
	
	$c3 = new Circle(11);
	$c3->calcSize();
	$c3->display();
	
	$c4 = new Circle();
	$c4->calcSize();
	$c4->display();
	
	$c5 = $c;		// 객체의 값이 아니라 주소가 복사된다. 같은 객체를 $c와 $c5가 가리킴.
	//$c5->r = 9;
	$c->display();
?>
