<?php 
require_once("database_connection.php");
$uid=$_COOKIE['uid'];
$sql="select *,count(nid) from msg where rid='$uid' and nread=0";// default=0 is not read
$sql2="select *,count(nid) from notification where rid='$uid' and nread=0";
//echo $sql;
//echo $sql." <br>".$sql2;
$result=mysql_query($sql);
$result2=mysql_query($sql2);
$data=mysql_fetch_assoc($result);
$data2=mysql_fetch_assoc($result2);
if($data==NULL && $data2==NULL)
{
//echo "fail";
}
else
{
$count=$data['count(nid)']+$data2['count(nid)'];
$sql="update msg set nread=1 where rid='".$_COOKIE['uid']."'";
$sql2="update notification set nread=1 where rid='".$_COOKIE['uid']."'";
$result=mysql_query($sql);
$result2=mysql_query($sql2);
//echo $count;	

}
?>
