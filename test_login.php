<?php
require_once("database_connection.php");
$uname=$_POST["username"];
//echo $uname;
$pass=$_POST["password"];
$query="Select * from student_entity where sid='".$uname."' AND spassword='".$pass."'";
//echo $query;
$q2=mysql_query($query);
if($q2 === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
$row=mysql_fetch_array($q2);
if($row==NULL)
echo $uname."fail";
else
{
setcookie('uid',$row['uid']);
setcookie('name',$row['sname']);	
echo "pass";
}

?>
