<?php
include 'db_connection.php';

if (isset($_POST['username']))
{
    $username = $_POST['username'];
    $username = trim($username);
}

if (isset($_POST['password']))
{
    $password=$_POST['password'];
    $password=trim($password);
}

$query=mysql_query("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");
$numrows=mysql_num_rows($query);

if($numrows!=0)
{
    $row=mysql_fetch_assoc($query);
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    
    if($username == $dbusername && $password == $dbpassword)
    {
        session_start();
        $_SESSION ['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $row['email'];;
        echo '<script type="text/javascript">
        location.replace("../index.php?");</script>';
    }
    else 
    {
        echo '<script type="text/javascript">
        alert("Failed to insert data information!");
        location.replace("../login.php");</script>';
    }
}
else {
    echo '<script type="text/javascript">
    alert("Error username or password!");
    location.replace("../login.php");</script>';
}

?>