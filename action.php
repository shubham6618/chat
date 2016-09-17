
<?php
	
	$name=$_POST['name'];
	$rollNo=$_POST['rollNo'];
	$mobileNo=$_POST['mobileNo'];
	$status=$_POST['status'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	echo "Name:".$name."<br>";
	echo "Roll no:".$rollNo."<br>";
	echo "Email:".$email."<br>";
	echo "mobileNo:".$mobileNo."<br>";
	echo "Address:".$address."<br>";
	echo "Status".$status."<br>";
	for ($i=1000; $i < $rollNo ; $i++) { 
		if ($i % 50 == 0) {
			echo "<br>";
		}
		echo " &#".$i;
	}




?>
