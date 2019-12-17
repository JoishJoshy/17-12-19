<?php 
$con=new mysqli("localhost","root","","orisys_project");
if(!$con)
{
	die("connection_error".$con->connect_error);
}
else
{
	//-echo "success";
}