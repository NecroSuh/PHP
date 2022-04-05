<?php
	# PHP class definition
	class Circle {
		// 1) Property = Variables = 데이터 = 상태
		const PHI = 3.1415; // 상수
		// 클래스 속성을 완전 차단(비공개) : 캡슐화(Encapsulation). 정보은닉.
		private int $r = 0;			// public : Visibility(가시성). 공개
		private float $length = 0;	// private : 비공개. 클래스 내에서만 사용.
		private float $size= 0;
		
		// 2) Method = function = 기능 = 동작 
		// 생성자(constructor) 정의
		public function __construct(int $r = 2){	// 매개변수 (디폴트값)를 멤버변수에 복사
			$this->r = $r;	
		}
		public function setRadius($r){	// set~ : Setter 함수. 내부로 갑을 가져와서 변경
			$this->r =$r;
		}
		public function getRadius() : int{	// get~ " Getter 함수. 외부로 값을 가져와서 변경
			return $this->r;
		}
		function calcSize(){ // 면적과 둘레 계산
			$this->length = 2 * $this->r * Circle::PHI; // $this : 객체 자신을 가리킴
			$this->size = $this->r ** 2 * Circle::PHI;
		}
		function sizeUp($scale = 1){ // 확대하기
			$this->r *= $scale;	
			calcSize();			
		}
		function display(){ // 데이터 출력하기
			echo "<h3>반지름 = $this->r 둘레 = $this->length 면적 = $this->size</h3>";
		}
	}
	
?>