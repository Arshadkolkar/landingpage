<?php
include 'database.php';

if(isset($_POST['submit'])){
	$fname = mysqli_real_escape_string($con,$_POST['fname']);
	$lname = mysqli_real_escape_string($con,$_POST['lname']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$phno = mysqli_real_escape_string($con,$_POST['phno']);
	
	
	if(!isset($fname) || $fname=='' ||
	!isset($fname) || $fname=='' ||
	!isset($fname) || $fname=='' ||
	!isset($fname) || $fname=='')
	{
	echo "fill all details";	
	}
	else
	{
		$query = "INSERT INTO user_data(fname,lname,email,phno)
							VALUES('$fname','$lname','$email','$phno')";
						
	}
	if(!mysqli_query($con,$query)){
		die('Error: '.mysqli_error($con));
	}
	else{
		header("Location: Thankyou.php");
		exit();
	}
}

