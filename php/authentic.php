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
    while($row=mysql_fetch_assoc($query))
    {
        $dbusername=$row['username'];
        $dbpassword=$row['password'];
    }
    if($username == $dbusername && $password == $dbpassword)
    {
    // старое место расположения
    //  session_start();
       $_SESSION['session_username']=$username;  

       /* Перенаправление браузера */
       header("Location: ../index.php");
   }
   else {
       echo  "Invalid username or password!";
       header("Location: ../login.php");
   }
}
else 
{
    $message = "All fields are required!";
    header("Location: ../login.php");
}

?>