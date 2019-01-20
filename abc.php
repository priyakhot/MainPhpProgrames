<?php

$err_count = 0;
$first_name='';
if(isset($_POST['first_name']) && $_POST['first_name']!='')
{
    $first_name=$_POST['first_name'];
	
} else {
	
	echo 'Please enter name<br>';
	$err_count++;
}
$Email_Id='';
if(isset($_POST['Email_Id']) && $_POST['Email_Id']!='')
{
    $Email_Id=$_POST['Email_Id'];
}
else {
		echo 'Please enter Email Address<br>';
		$err_count++;			
}
 if($err_count==0)
 {
	#Database details
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "school";
	
	// Create connection tothe db
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	#insert data into db
	$sql = "INSERT INTO Student (first_name,email)	VALUES ('".$first_name."','".$Email_Id."')";
	
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}



?>







<form method='post'>
<table>
<tr>
<td>fname</td>
<td><input type='text' name='first_name' value='<?=$first_name?>' ></td>
</tr>
<tr>
<td>Email.id</td>
<td><input type='text' name='Email_Id' value='<?=$Email_Id?>'></td>
</tr>
<tr>
 <td>Submit:</td>
 <td><input type='submit' name='submit' value='submit'></td>
 </tr>
