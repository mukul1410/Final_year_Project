<?php 
require_once("database_connection.php");
$query="Select * from notification where rid='".$_COOKIE['uid']."' order by ntime desc Limit 10";
//echo $query;
$q2=mysql_query($query);
$str="";
while($row=mysql_fetch_array($q2))
{
	if($row['nread']==1)
	$color='black';
	else
	$color='#0072C6';
	$query2="Select * from student_entity where uid='".$row['sid']."'";
	$q3=mysql_query($query2);
	$row2=mysql_fetch_array($q3);
	$temp="<div id=".$row['nid']." class='nvalue'>
	<div class='title' ><h3 style='font-weight:bold;color:$color'>".$row2['sname']."</h3></div>
	<div class='content' style='color:$color';><p>".$row['nmsg']."</p></div>
	</div>";
	$str.=$temp;
}
	echo $str;
?>
