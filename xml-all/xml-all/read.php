<?php
$dom = simplexml_load_file("cox.xml");

foreach($dom->hotel as $h)
{
	echo "<h2>$h->name - $h->Stars</h2>"."<hr>";
	echo "<h4>Facilities:</h4>";
	
	foreach($h->Facilities->facility as $f){
		echo "<li>".$f->fName."</li>";
		
	}
	echo "<h4>Address:</h4>"."<br>";
		echo $h->address."<br>";
		echo $h->Distance;
	
	foreach($h->Available as $av){		
		if($av=="True"){
			echo "<h4>ROOM Available: YES</h4>"."<br><hr>"; 
		}
		else echo "<h4>ROOM Available: NO</h4>"."<br>"."<hr>";
	}
	}

?>