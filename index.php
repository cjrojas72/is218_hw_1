<?php
	$date =  date('Y/m/d', time());
	$dateArr = explode('/', $date);

	foreach ($dateArr as $key) {
		echo "dateArr: $key".", ";
	}
	echo "<br>";

	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";

	if($date > $tar){
		echo "The Future"."<br>";
	}
	elseif($date < $tar){
		echo "The Past"."<br>"; 
	}
	else{
		echo "Oops"."<br>"; 
	}

	$stcount = substr_count($date, '/');
	echo $stcount."<br>";

	if($stcount > 1){
		$date = str_replace('/', " " , $date);
		echo $date."<br>"; 
	}

	echo str_word_count($date)."<br>";
	echo strlen($date)."<br>";
	echo ord($date)."<br>";
	echo $date[strlen($date)-1].$date[strlen($date)-2]."<br>";

	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	echo "<br>"."Leap Year: "."<br>";

	for($i=0; $i<count($year); $i++){
		if($year[$i]%4 == 0 && ($year[$i] % 100 != 0 || $year[$i] % 400 == 0)){
			echo $year[$i]." Leap Year: True <br>";
		}
		else{
			echo $year[$i]." Leap Year: False <br>";
		}
	}
?>