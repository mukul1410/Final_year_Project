<div id="header">
<h1 id="websiteName" >SVNIT Student Database Management Portal
<small id="websiteSuffix"></small></h1>
<div id='links'>
<div id="name">
<?php
$name=$_COOKIE['name'];
$str="<a href='profile.php'  style='color:white;margin-top:-5px'>".$name."</a>";
echo "<p>".$str."</p>";
?>
 </div>
<!--<div  class='home'  id='0' >

<a href="home.php" style="color:white"><p>Home</p></a></div>-->
<div class='settings'  id='1' >
<img src="images/setting.png" height="45px" title="settings"/>  </div> 
<div class='contactUs'  id='2' > <a href="logout.php" ><img title="Logout" src="images/logout.png" height="30px" style="margin-top:5px"/> </a>  </div>
</div>
</div>
