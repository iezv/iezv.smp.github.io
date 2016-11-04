<?php
include 'db_connection.php';

if (isset($_POST['username']))
{
	$username = $_POST['username'];
	$username = trim($username);
}

if (isset($_POST['email']))
{
	$email=$_POST['email'];
	$email=trim($email);	
}

if (isset($_POST['password']))
{
	$password=$_POST['password'];
	$password=trim($password);
}

$query=mysql_query("SELECT * FROM users WHERE username='".$username."' OR email='".$email."'");
$numrows=mysql_num_rows($query);

if($numrows==0)
{
	$sql="INSERT INTO users (username, email, password) VALUES ('$username','$email', '$password')";
	$result=mysql_query($sql);

	if($result)	{	
		session_start();
		$_SESSION ['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['password'] = $email;
		echo '<script type="text/javascript">
		alert("Account Successfully Created!");
		location.replace("../index.php");</script>';
		}
	else 
	{
		echo '<script type="text/javascript">
		alert("Failed to insert data information!");
		location.replace("../login.php");</script>';
	}
}
else 
{
	echo '<script type="text/javascript">
	alert("Username or(and) email is already registered!");
	location.replace("../login.php");</script>';
}

?>