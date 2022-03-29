<?php
# array functions
# 1. array_combine
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b); // 연관배열 생성
print_r($c); echo "<br>";

# 2. array_merge
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result); echo "<br>";

$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
var_dump($result); echo "<br>";

# 3. array_values
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array)); echo "<br>";

# 4. array_keys
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array)); echo "<br>"; // 연관배열의 키 0, color

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue")); echo "<br>"; // blue 값을 가진 인덱스 키 : 0, 3, 4

$array = array("color" => array("blue", "red", "green"),
"size" => array("small", "medium", "large"));
print_r(array_keys($array)); echo "<br>"; // color, size

# array_keys 함수를 이용한 배열 탐색
/*
foreach($array as $key=>$value){
	echo "<h3>$key</h3>";
	if(is_array($value)) {
		echo "Array!!<br>";
		foreach($value as $e) echo "$e<br>";
	}
	//print_r(array_keys($value)); echo "<br>";
}
*/
$keys=array_keys($array);	//$array 배열에서 키들을 추출하여 배열로 저장
for($i=0; $i<count($keys);$i++){
	$value=$array[$keys[$i]];
	echo "<h3>$keys[$i]</h3>";
	//print_r(array_keys($value)); echo "<br>";
	for($j=0;$j<count($value);$j++)
		echo "$value[$j]<br>";
}




# 5. array_key_exists
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
	echo "The 'first' element is in the array";
}

# 6. in_array
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
	echo "Got Irix";
}
if (in_array("mac", $os)) {
	echo "Got mac";
}
echo "<br>";

#in_array 함수가 없을 때
$found=false;	//플래그 변수
foreach($os as $e){
	if($e === "Mac") {
	echo "Mac is found!!<br>";
	$found=true;
	break;
	}
}
// 이 자리로 왔을 때 1) break에 의해 나온 경우, 2) foreach가 끝나서 나온 경우
if($found) echo "Status : Found<br>";
else echo "Status : Not Found<br>";

# 7. array_search
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array); // $key = 1;
echo "$key<br>";

# 8. sort
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
echo "fruits[" . $key . "] = " . $val . "\n";
}
echo "<br>";

# 9. array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack); echo "<br>";

#10. array_pop
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack); echo "<br>";

#11. array_shift
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack); echo "<br>";

#12. array_unshift
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
print_r($queue); echo "<br>";

# 2-dimension array
$arr=array(array(1,2,3), array(4,5,6));
$x=$arr[0][0]+$arr[1][1];
echo "$x<br>";

# 5~35 사이의 임의의 수로 가로 세로 길이의 사각형을 배열에 저장. 사각형 개수는 10개로 한다.
# 7 12
# 9 6
//$rect=[][];	//구문 오류
$rect=[];	//$rect=array();
for($i=0;$i<10;$i++){
	for($j=0;$j<2;$j++) $rect[$i][$j]=mt_rand(5,35);
}


print_r($rect); echo "<br>";

$keys=[];
for($i=0;$i<10;$i++) $keys[$i]="RECT".($i+1);
print_r($keys); echo "<br>";
$rect=array_combine($keys, $rect);	//연관배열 생성
print_r($rect); echo "<br>";

echo "<h3>사각형의 면적</h3>";
foreach($rect as $key=>$value){
	echo "<h4>$key : ".($value[0]*$value[1])."</h4>";
}

?>