<?php
	/* 초등학교 학년에 따른 그빗ㄱ비 계싼 프로그램
	1학년 : 3만원
	2학년 : 3만5천원
	3학년 : 4만원
	4학년 : 4만5천원
	5학년 : 5만원
	6학년 : 5만5천원
	*/
	
	$grade=5;	//5학년
	
	switch($grade)
	{
		case 1:
			echo "$grade 학년 급식비 : 3만원<br>";
			break;
		case 2:
			echo "$grade 학년 급식비 : 3만5천원<br>";
			break;
		case 3:
			echo "$grade 학년 급식비 : 4만원<br>";
			break;
		case 4:
			echo "$grade 학년 급식비 : 4만5천원<br>";
			break;
		case 5:
			echo "$grade 학년 급식비 : 5만원<br>";
			break;
		case 6:
			echo "$grade 학년 급식비 : 5만5천원<br>";
			break;
		default:
			echo "학년이 잘못 입력되었어요!<br>";
			break;
	}
	
	if($grade==1)
		echo "$grade 학년 급식비 : 3만원<br>";
	elseif($grade==2)
		echo "$grade 학년 급식비 : 3만5천원<br>";
	elseif($grade==3)
		echo "$grade 학년 급식비 : 4천원<br>";
	elseif($grade==4)
		echo "$grade 학년 급식비 : 4만5천원<br>";
	elseif($grade==5)
		echo "$grade 학년 급식비 : 5만원<br>";
	elseif($grade==6)
		echo "$grade 학년 급식비 : 5만5천원<br>";
	else
		echo "학년이 잘못 입력되었어요!<br>";
?>
	