<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: usersGoHere.php");
}
else if(isset($_SESSION['user'])!="")
{
session_destroy();
header("Location: index.php");
}

?>