<?php
	$date =  date('Y/m/d', time());
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

	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
?>