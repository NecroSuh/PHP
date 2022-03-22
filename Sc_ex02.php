<?php
#반복문 연습
echo "<h1>반복문에 대하여</h1>";
#예제1. 1~100 사이의 홀수들의 합을 구하기
$sum=0;	//누적합
$n=1;	// 반복제어변수

	while($n<=100){
		//if($n%2==1) $sum+=$n;
		$sum+=$n;
		//$n++;
		$n+=2;
		}
	echo "<h2>while : $sum</h2>";
	
	$sum=0;
	for($n=1;$n<100;$n+=2){
		$sum+=$n;
	}
	echo "<h2>for : $sum</h2>";
	
	$sum=0;
	$n=1;
	do{
		$sum+=$n;
		$n+=2;
	}while($n<=100);	//while 뒤에 반드시 ;
	echo "<h2>do while : $sum</h2>";
	
#1~200사이의 임의의 수 10개의 합을 구하자.
#임의의 수 : rand, mt_rand
#반복하는 동안 누적합 값이 500을 넘으면 중단
#임의의 수가 7의 배수이면 누적하지 않기
	//echo mt_rand(1,200);
	$sum=0;
	$n=1;
	while($n<=10){
		$m=mt_rand(1,200);
		//if($m%7!=0) $sum+=$m;
		if($m%7!=0) continue;	// 반복 조건문으로 돌아가기
		$sum+=$m;
		if($sum>500) break;	//반복문 벗어나기
		/*while(true){
			break;
		}*/
		$n++;
	}
	echo "<h2>예제2: $sum 반복횟수 : $n</h2>";
	
	$i=1;
	while($i<4){
		echo "<h3>Happy Day : $i day</h3>";
		$i++;
	}
	$i=1;
	while($i<4){
?>
<!-- HMTL 구간-->
<h3>Happy Day : <?=$i?> day</h3>
<?php
	$i++;
	}
?>
<!-- HMTL 구간-->
<ul>
<?php
	$i=1;
	while($i<4){
?>
	<li><?=$i?></li>
<?php $i++; } ?>
</ul>

<?php
	$i=1;
	while($i<5){
		echo "<img src='photo$i.jpg'><br>";
		$i++;
	}
?>
<?php
	$i=1;
	while($i<5){
?>
	<img src="photo<?=$i?>.jpg"><br>
	<?php $i++; } ?>






