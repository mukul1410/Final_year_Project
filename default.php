<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Free Ebooks for Engineering,novels,competative exams ,etc. </title>

<link rel="SHORTCUT ICON" href="http://www.ebookslibrary.site90.com/style/p1.png"/>

<style>
			body{
				background:#e6eaed;
				font-family:Arial;
				overflow-x:hidden;
				background-size:50%;
				
			}
			
			#login
			{
				position:absolute;
				right:40%;
				top:10%;
			}
			
		
			
			#openLogin
			{
				//background:#CD853F;
				color:#4c5662;;
				text-align:center;
				cursor:pointer;
				width:100px;
				text-transform:uppercase;
				text-shadow:1px 1px 1px #000;
				margin-left:50px;
						
			}
			#login label ,#header h1
			{
				font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
				font-size:17px;
				font-weight:bold;
				color:white;
				display:inline-block;
				text-shadow:1px 1px 1px none;
			}
			
			#header
			{
				background:#4c5662;
				opacity:0.7;
				width:100%;
				position:fixed;
				left:-10px;
				top:-10px;
				height:50px;
			}
			
			#header h1
			{
				margin:15px;
			}
			
			//#loginPage 
		
			
			#formWrapper div
			{
				padding:20px;
			}
			
			
			#username
			{
			   width:300px;
			   height:50px;
			   border-radius:5px 5px 5px 5px ;
			   margin-bottom:20px;
			   font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
			   border: 1px solid #4c5662;
			   background: white url("login.png") no-repeat 0px 8px;
			   text-align:center;
			   font-size:20px;
			}
			
			#password
			{
			  width:300px;
			   height:50px;
			   border-radius:5px 5px 5px 5px ;
			   margin-bottom:20px;
			   font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
			   border: 1px solid #4c5662;
			   background:white  url("password1.png") no-repeat 0px 8px;
			   background-size:10%;
			   text-align:center;
			   font-size:20px;
			}
			
			//#aboutUs{position:absolute;right:5000px;}
			//li{list-style-type:none;}
			#links{position:absolute;right:20px;top:20px;}
			#links a{color:white;}
			//label{padding-top:20px;background:white}
			</style>
		<script src="jQuery/jquery-1.8.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="jquery.easing.1.3.js"></script>
		<script type='text/javascript' src='jQuery/jquery.scrollTo-1.4.3.1-min.js'></script>
		<script type='text/javascript' src='jQuery/jquery.serialScroll-1.2.2-min.js'></script>
		<script type="text/javascript">
		$(window).load(function()
		{
			var width=$(window).width();
			var height=$(window).height();
			$('.1').css({'position':'absolute','top':'40px','width':width,'height':height,'background-color':'#e6eaed'});//loginPage Css
			$('.2').css({'position':'absolute','top':'40px','left':2*width,'width':width,'height':height,'background-color':'white'});//aboutUS Css
			$('.3').css({'position':'absolute','top':'40px','left':3*width,'width':width,'height':height,'background-color':'#CC6699'});//aboutUS Css
		});//end window load
		$(document).ready(function()
		{
			$('#links a').click(function()
			{
				var width=$(window).width();
				var height=$(window).height();
				var id=$(this).attr('id');
				var pos=0;
				if(id=='1')
				{
				pos=10;	
				id=0;
				}
				pos+=id*width+id*20;
				//alert(pos);
				$.scrollTo(pos,1000,{axis:'x'});
			/*$.serialScroll({
				//target:'#sections',
				items:'li', 
				axis:'x',
				navigation:'#navigation li a',
				duration:700,
				force:true 
		});//end scroll
		*/
		});//end click
		
			/*$('#links a').click(function()
			{
				var class1=$(this).attr('class');
				var id='#'+class1;
				//alert(id);
				$('#log,#log div').animate({left:'-10000px'},12000);
				$(id).animate({left:'0px'},12000);
				return false;
			});*/
		});//end ready
		</script>
<div id="header">
<h1 id="websiteName" >SVNIT Student Database Management Portal
<small id="websiteSuffix"></small></h1>
<div id='links'>
<a href='#' class='home'  id='1' style='text-decoration:none'>Home</a>  
<a href='#' class='aboutUs'  id='2' style='text-decoration:none'>About Us</a>  
<a href='#' class='contactUs'  id='3' style='text-decoration:none'>Contact Us</a>  
</div>
</div>
<div id='sections'>
<ul style="list-style-type:none">
<li class='1'>
<div id='log'>
<div id="logo" style="position:absolute;left:10px;top:150px;"><img src="svnit_logo.png"   width="60%" height="60%"/></div>
<div id="login">
<h2 id="openLogin">Login </h2> 

<div id="loginPage">
<div id="formwrapper">
<form action ="test2.php" method="post" id="signin">
	<div>
		<label  for="username" class="label"></label>
		<input type="text"   name="username" class="required" id="username" aria-required="true" placeholder="Username" aria-label="Username" />
	</div>	
	
	<div>
		<label  for="password" class="label"></label>
		<input type="password"   name="password" class="required" id="password"  aria-required="true" placeholder="Password" aria-label="Password" />	
		
	</div>
		
	<div>
			<input type="submit" value="Sign in" class="sign_in"/></br> <small id="reset"><a href="reset_password.php" class="iframe">Forgot Password?</a></small>
	</div>
		</div>
		</div>
		</div>
		</div>
		</li>
		<li class='2'>
		<div id='aboutUs'>
		<p>About Us</p>
		</div>
		</li>
		
		<li class='3'>
		<div id='contactUs'>
		<p>Contact Us</p>
		</div>
		</li>
		</ul>
		</div>
</body>
</html>	
		