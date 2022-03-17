<?php
	echo "<h2>주사위 던지기</h2>";
	$dice=rand(1,6);
	if(!($dice%2))
		echo "짝수입니다. $dice<br>";
	else
		echo "홀수입니다. $dice<br>";
	
	$dice1=rand(1,6);
	$dice2=rand(1,6);
	$score=100;
	/*if($dice1<$dice2)
		$score-=10;
	elseif($dice1==$dice2)
		$score+=10;
	else
		$score+=15;*/
	
	$val=$dice1<=>$dice2;
	/*switch($val){
		case -1:
			$score-=10;
			break;
		case 0:
			$score+=10;
			break;
		default:
			$score+=15;
	}
	*/
	$score=match($val){
		-1=>$score-10,
		0=>$score+10,
		1=>$score+15,
	};
	
	echo "주사위1= $dice1 , 주사위 2= $dice2<br> 점수는 $score<br>";
	
	$age=$_GET['age'];
	$result=match(true){
		$age>=65=>"Senior",
		$age>=25=>"Adult",
		$age>=18=>"Young adult",
		default=>"Kid",
	};
	echo "$result<br>";
	
?>