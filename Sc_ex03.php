<?php
	echo "<h1>PHP Array 학습</h1>";
	#배열 만들기 - 인덱스 배열
	$arr= array(2=>21,33,8=>11,54,4=>77);	//인덱스 배열. 인덱스를 변경 가능
	var_dump($arr);
	echo "<br>";
	print_r($arr);
	echo "<br>";
	$arr2=[11,22.567,"33",44.23,"Today"];	//원소가 같은 타입이 아니어도 된다.
	$arr3=[];	//array()
	print_r($arr2);
	
	# 배열 만들기 - 연관 배열
	//$b=array("Sonata"=>3500,"Anante"=>2500,"Niro"=>3100);
	$b=['Sonata'=>3500,"Anante"=>2500,"Niro"=>3100];
	echo "<br>";
	print_r($b);
	
	#배열 원소 접근
	$a=[3,5,8,11,21];	//가변 길이 배열. 동적 배열
	$c=$a[0]+$a[2];
	echo "$c<br>";
	
	$c=$b["Sonata"]+$b['Anante'];
	echo "$c<br>";
	
	#새로운 원소 추가
	$cnt=count($a);	//배열의 길이(원소 갯수)
	echo "$cnt<br>";
	
	$a[$cnt]=33;
	var_dump($a);
	echo "<br>";
	
	$b["Santafe"]=4100;
	var_dump($b);
	echo "<br>";
	
	#배열 탐색
	for($i=0;$i<count($a);$i++)
		echo "$a[$i], ";
	echo "<br>";
	
	foreach($a as $val)	// 실행할 때마다 배열의 원소가 차례대로 변수에 전달
		echo "$val, ";
	
	foreach($b as $car=>$price)
		echo "$car : $price, ";
?>
<h2>예제 실습</h2>
<?php
	#10에서 200 사이의 임의의 수 10개를 배열에 저장한 다음 홀수 인덱스의 값 출력하기.
	#mt_rand(10,200)
	$list=[];
	for($i=0;$i<10;$i++)
		$list[$i]=mt_rand(10,200);
	
	for($i=1;$i<count($list);$i+=2)
		echo "$list[$i], ";
	echo "<br>";
	
	$ph=["풍경1" => "photo1.jpg", "풍경2" => "photo2.jpg", "풍경3" => "photo3.jpg", "풍경4" => "photo4.jpg"];
	
	foreach($ph as $title => $file){
		echo "<h3>$title</h3>";
		echo "<img src='$file'>";
	}
?>