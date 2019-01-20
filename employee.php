<?php

$first_name = ''; # Define empty variable for first name
$fname_error = ''; # Define empty variable for first name error`
if(isset($_POST['fname']))
{
	$first_name = $_POST['fname']; # assign value of first_name input box to a variable we defined at top
} else {	
	$fname_error = 'Please enter first name'; # assign error of first_name to a variable we defined at top
}


$last_name = '';
$lname_error = ''; 
if(isset($_POST['lname']))
{
	$last_name = $_POST['lname']; 
} else {	
	$lname_error = 'Please enter last name'; 
}


$user_name = '';
$username_error = ''; 
if(isset($_POST['username']))
{
	$user_name = $_POST['username']; 
} else {	
	$username_error = 'Please enter user name'; 
}

$Email_id = ''; 
$Email_error = '';
if(isset($_POST['Email']))
{
	$Email_id = $_POST['Email']; 
} else {	
	$Email_error= 'Please enter Email id'; 
}


$password = ''; 
$password_error = '';
if(!isset($_POST['password']))
{	$password_error= 'Please enter your password'; 
		
} elseif (strlen($_POST['password']) <4) {
	$password_error= 'Password must be atleast 4 digit/character'; 
}else if (isset($_POST['password']) 	){
	$password = $_POST['password']; 	
}


$confirm_passwordpassword = '';
$confirm_password_error = '';
if(!isset($_post['confirm_password']))
{
	$confirm_passsword_error= 'please confirm your password';	
}elseif(isset($_post['confirm_password']) && isset($_post['password']) && $_post['confirm_password'] != $_post['confirm_password'])
{
	$confirm_passsword_error= 'Password and confirm password should match';
} else if(isset($_post['confirm_password'])) {
	$confirm_password=$_post['confirm_password'];
}


$all_hobbies = '';
if (isset($_POST['hobbies']))
{
	$hobbies = $_POST['hobbies'];
	for ($i=0; $i<count($hobbies);$i++)
	{
		$all_hobbies .= $hobbies[$i] . ',';
	}
}
echo $all_hobbies;

$birthdate= ''; 
if(isset($_POST['birthdate']))
{
	$birthdate = $_POST['birthdate']; 
} else {	
	$birthdate= 'Please enter birthdate'; 
}
 $submit= ''; 
if(isset($_POST['submit']))
{
	$submit = $_POST['submit']; 
}	
	$submit= 'submitted successfully'; 
 
 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "priya";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "INSERT INTO priya (First Name)
	VALUES ('John')";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
 
 
 
?>

<form method='post'>
<table>
<tr>
	<td>Fname:</td>
	<td style='color:red'>
		<input type='text' Name='fname' value='<?=$first_name?>'>
	<br>
	<?=$fname_error;?>
	</td>
</tr>

<tr>
 <td>Lname:</td>
 <td><input type='text' Name='lname' value='<?=$last_name?>'>
 <br>
 <?=$lname_error;?>
 </td>
<tr>
 <td>Username:</td>
 <td><input type='text' Name='username'></td>
 </tr>
<tr>
 <td> Email:</td>
 </tr>
 <tr>
 <td>Password:</td>
 <td><input type='password' Name='password' title='password must be 4 character'></td>
 </tr>
 <tr>
 <td>Confirm password:</td>
<td> <input type='password' Name='password'></td>
 </tr>
 <tr>
 <td>Birthdate:</td>
 <td><input type='date' name='date'></td>
 </tr>
 <tr>
 <td>Address:</td>
 <td><textarea name='address' cols='10' rows='5'></textarea></td>
 </tr>
 <tr>
 <td>Gender:</td>
       <td> male:<input type='radio' value='male' Name='gender'></td>
        <td>female:<input type='radio' value='female' Name='gender'></td>
		<td>Others:<input type='radio' value='gender' Name='gender'></td>
		</tr>
 <tr>
 <td>Hobbies:</td>
        <td>Reading:<input type='checkbox' name='hobbies[]' value='reading'></td>
        <td> singing:<input type='checkbox' name='hobbies[]' value='singing'></td>
        <td>dancing: <input type='checkbox' name='hobbies[]' value='dancing'></td>
		<td>traveling:<input type='checkbox' name='hobbies[]' value='traveling'></td>
		</tr>

<tr>
 <td>Submit:</td>
 <td><input type='submit' name='submit' value='submit'></td>
 </tr>

</table>
</form>