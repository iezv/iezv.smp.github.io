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

	$query_n=mysql_query("SELECT * FROM users WHERE username='".$username."'");
	$numrows_n=mysql_num_rows($query_n);
	$query_p=mysql_query("SELECT * FROM users WHERE email='".$email."'");
	$numrows_p=mysql_num_rows($query_p);

	if(($numrows_n==0)&&($numrows_p==0)) 
	{
		$sql="INSERT INTO users (username, email, password) VALUES ('$username','$email', '$password')";
		$result=mysql_query($sql);
		if($result)
		{
			$message = "Account Successfully Created";
			header ('Location: ../index.php');
		}
		else 
		{
			$message = "Failed to insert data information!";
			header ('Location: ../login.php');
		}
	}
	else 
	{
		$message = "Username or(and) email is already registered!";
		header ('Location: ../login.php');
	}

 if (!empty($message)) 
	{
		echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";
	}
?>