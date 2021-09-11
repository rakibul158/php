<?php
	echo "&copy; 2019 - ".date('Y');
	echo "</br>";
	
	echo "The time is ". date("h:i:sa");
	echo "</br>";
	
	$d = mktime(11,02,35,10,18,2014);
	echo "Created Date: ".date("h:i:sa", $d);
	echo "</br>";
	
	$stt = strtotime("10:30pm April 15 2014");
	echo "Created date is: " .date("Y-m-d h:i:sa", $stt)."<br>";
	
	$check = date("H");
	if($check > 20)
	{
		echo "Good Morning";
	} else{
		echo "Good Night";
	}
	echo "<br>";
	
	$t = strtotime("tomorrow");
	echo "Tomorrow Is: " .date("Y-m-d h:i:sa", $t)."<br>";

	echo("Bangladesh");
	echo"<br>";
	$string = "Bangladesh";
	$array = [];
	foreach (count_chars($string, 1) as $i => $val) {
		$count=chr($i);
		$array[]= $val.",".$count."<br>";
	}
	print_r($array);
	echo "<br>";


	echo "Md Rakibul Hasan Rakib";
	echo "<br>";
	$chkchar = "Md Rakibul Hasan Rakib";
	$arrayResult = [];
	$charCount = count_chars($chkchar,1);
	foreach($charCount as $i => $val){
		$count = chr($i);
		$arrayResult[] = $val.",".$count."<br>";
	}
	print_r($arrayResult);
	echo"<br>";


	$get = "geeksforgeeks";
	$a = [];
	$geta = count_chars($get, 1);
	foreach($geta as $i => $v){
		$c = chr($i);
		$a[] = $c.",".$v."<br>";
	}
	print_r($a);
	
?>