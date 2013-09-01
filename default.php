<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SVNIT Student Database Management System </title>

<style>
			body{
				background:white;
				font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
				overflow:hidden;
				
			
			}
			
			#content{visibility:hidden;}
			#login
			{
				position:absolute;
				right:40%;
				top:10%;
			}
			
		
			
			#openLogin
			{
				//background:#CD853F;
				color:#0072C6;
				text-align:center;
				cursor:pointer;
				width:100px;
				text-transform:uppercase;
				text-shadow:1px 1px 1px #000;
				margin-left:125px;
						
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
				background:#0072C6;
				//opacity:0.7;
				width:100%;
				position:fixed;
				left:-10px;
				top:-10px;
				height:50px;
			}
			
			#header h1
			{
				margin-left:15px;
				margin-top:15;
			}
			
			//#loginPage 
		
			
			#formWrapper div
			{
				padding:20px;
			}
			
			
			#username
			{
			   width:350px;
			   height:50px;
			   border-radius:5px 5px 5px 5px ;
			   margin-bottom:20px;
			   font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
			   border: 1px solid #0072C6;
			   background: white url("login.png") no-repeat 0px 8px;
			   text-align:center;
			   font-size:20px;
			   color:#0072C6;
			   text-transform:uppercase;
			}
			
			#password
			{
			   color:#0072C6;
			   width:350px;
			   height:50px;
			   border-radius:5px 5px 5px 5px ;
			   margin-bottom:20px;
			   font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
			   border: 1px solid #0072C6;
			   background:white  url("password1.png") no-repeat 0px 8px;
			   background-size:10%;
			   text-align:center;
			   font-size:20px;
			}
			
			
			#signInBtn
			{
				background-color:#0072C6;
				border:1px #0072C6 solid;
				font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
				font-size:17px;
				cursor:pointer;
				color:white;
				width:100px;
				height:30px;
				border-radius:5px 5px 5px 5px;
				margin-left:260px;
			}
			
			#signInBtn:hover
			{
				background-color:#4791DA;
				border-color:#4791DA;
				cursor:pointer;
				color:white;
			}
			//.home{color:#0072C6;background:white;}
			#reset{position:relative;top:-20px;}
			#login a{color:#0072C6;text-decoration:none;}
			#login a:hover{text-decoration:underline;}
			#content {display: none;}
			#links div{float:left;color:white;cursor:pointer;padding:15px;height:40px;font-weight:bold;}
			#links{position:absolute;right:20px;top:10px;}
			#links div:hover{background-color:#4791DA}
			input{outline:none;}
			#features {color:#0072C6;font-weight:none;font-size:12px;}
			#featuresList {margin-left:200px;margin-top:70px;}
			#featuresList div{padding:15px;}
			#contactInfo{margin-left:100px;margin-top:100px;}
			#contactForm{float:right;margin-top:-240px;margin-right:150px;}
			#contactInfo ul li{padding-bottom:10px;font-size:14px;}
			#contactForm input.text
			{
				width:300px;
			   height:50px;
			   border-radius:5px 5px 5px 5px ;
			   margin-bottom:20px;
			   font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
			   border: 1px solid #0072C6;
			   text-align:center;
			   font-size:14px;
			   color:#0072C6;
			 }
			 
			 #contactForm textarea
			 {
			   width:400px;
			   height:70px;
			   border-radius:5px 5px 5px 5px ;
			   margin-bottom:20px;
			   font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
			   border: 1px solid #0072C6;
			   text-align:center;
			   font-size:14px;
			   color:#0072C6;
			 }
			 ::-webkit-input-placeholder { /* WebKit browsers */
				
				opacity: 0.3 !important;
}
			</style>
		<script src="jQuery/jquery-1.8.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="jQuery/jquery.cookie.js"></script>
		<script type='text/javascript' src='jQuery/jquery.scrollTo-1.4.3.1-min.js'></script>
		<script type='text/javascript' src='jQuery/jquery.vibrate.min.js'></script>
		
		<script type="text/javascript">
		$(window).load(function()
		{
			
			var width=$(window).width();
			var height=$(window).height();
			$('.home').css({color:'#0072C6',backgroundColor:'white'});
			
			//$('#whileLoading').css({'position':'absolute','top':height/2,'left':width/2,'width':width,'height':height,'background-color':'white'});
			$('.1').css({'position':'absolute','top':'40px','width':width,'height':height,'background-color':'white'});//loginPage Css
			$('.2').css({'position':'absolute','top':'40px','left':width+20,'width':width+20,'height':height,'background-color':'white'});//features Css
			$('.3').css({'position':'absolute','top':'40px','left':2*width+20,'width':width,'height':height,'background-color':'white'});//features Css
			$('#featuresList .list div').css({'width':width});
			$('#content').show();
		});//end window load
		
		$(document).ready(function()
		{
			var headerColor='#0072C6';
			var hoverColor='#4791DA';
			$.cookie('currentId',0);
			$('#content').css({'visibility':'visible'});
			//$('#features,#contactUs').show(1);
			$('#links div').click(function()
			{
				var width=$(window).width();
				var height=$(window).height();
				id=$(this).attr('id');
				/*if(id==0)
				{headerColor='#0072C6';hoverColor='#4791DA'}
				else if(id==1)
				{headerColor='rgb(173, 178, 132)';hoverColor='#C2C2A3'}
				else
				{headerColor='#478A47';hoverColor='#45B46A'}
				*/
				var pos=0;
				pos+=id*width+id*20;
				//alert(pos);
				$.scrollTo(pos,1000,{axis:'x'});
				//$("html","body").animate({ scrollDown: 1000},600);
				$('#header').css({backgroundColor:headerColor});
				var div='#'+id;
				for(var i=0;i<3;i++)
				{
					if(i==id)
					{
						
						var div='#'+i;
						$(div).css({backgroundColor:'white',color:headerColor});
					}
					
					else
					{
						var div='#'+i;
						
						$(div).css({backgroundColor:headerColor,color:'white'});
						
					}
				}
				$.cookie('currentId',id);
				$.cookie('headerColor',headerColor);
				$.cookie('hoverColor',hoverColor);
		});//end click
		
		$('#links div').hover(function()
				{
						hoverColor=$.cookie('hoverColor').replace("%23","#");
						headerColor=$.cookie('headerColor').replace("%23","#");
					if($(this).attr('id')!=$.cookie('currentId'))
					{
						//alert(hoverColor);
						$(this).css({backgroundColor:hoverColor});
					}
	
					
				},
				function()
				{
					if($(this).attr('id')!=id)
					$(this).css({backgroundColor:headerColor});
				});	
		
				$('#signin').submit(function()
	{			var length1=$('#username').val().length;
				var length2=$('#password').val().length;
				
				if(length1!=0 && length2!=0 )
				{
		var formData=$(this).serialize();
		//alert(formData);
		$.ajax({
		type:"POST",
		url:"test_login.php",
		data:formData
		}).done(function processData(data)
		{
			var url="home.php";
			if(data=='pass')
			{
				var id=data;
				
				$.cookie('user_id',id);
				window.location=url;
			}//end if
			
			else
			{
			
				$('#password').css({'border':'2px solid red'});
				$('#reset').css({'font-size':'15px'});
				$('#reset a').css({'color':'red'});
				var vibrate=setInterval(startVibration,30);
				setTimeout(stopVibration,1000);
				function startVibration()
				{
					
					$('#password').stop().css({'position':'relative',
					'left':Math.round(Math.random()*5)-2+'px',
					'top':Math.round(Math.random()*5)-2+'px'
				});
				}
				function stopVibration()
				{
					
					clearInterval(vibrate);
					$('#password').stop().css({'position':'static','left':'0px','top':'0px'});
				}
				
				
			}//end else
		});//end processData
		}
		return false;
		
	});//end submit
			
		});//end ready
		</script>
		
		
		<div id='content'>
<div id="header">
<h1 id="websiteName" >SVNIT Student Database Management Portal
<small id="websiteSuffix"></small></h1>
<div id='links'>
<div  class='home'  id='0' >Home  </div>
<div class='features'  id='1' >Features </div> 
<div class='contactUs'  id='2' >Contact Us</a>  </div>
</div>
</div>
<div id='sections'>
<ul style="list-style-type:none">
<li class='1'>
<div id='log'>
<div id="logo" style="position:absolute;left:10px;top:100px;"><img src="svnit_logo.png" width="60%" height="60%"/></div>
<div id="login">
<h2 id="openLogin">Login </h2> 

<div id="loginPage">
<div id="formwrapper">
<form action ="#" method="post" id="signin">
	<div>
		<label  for="username" class="label"></label>
		<input type="text"   name="username" class="required" id="username" aria-required="true" placeholder="U10COXXX" aria-label="Username" />
	</div>	
	
	<div>
		<label  for="password" class="label"></label>
		<input type="password"   name="password" class="required" id="password"  aria-required="true" placeholder="Password" aria-label="Password" />	
		
	</div>
		
	<div>
			<input type="submit" value="Sign in" class="sign_in" id='signInBtn'/></br><small id="reset"><a href="#" class="iframe">Have a Bad Memory?</a></small>
	</div>
		</form>
		</div>
		
		</div>
		</div>
		</div>
		</li>
		<li class='2'>
		<div id='features'>
		<!--<h1 style="margin-left:250px">FEATURES</h1>-->
		<div id='featuresList'>
		<div class="list">
		<img src="images/queue.jpg" width='120px' height='70px' />
		<h2  style="display:inline;margin-left:15px;margin-top:-15px;">End the Queue with Online Fees Payment.</h2>
		</div>
		<div class="list">
		<img src="images/yell.jpg" width='120px' height='70px'  />
		<h2 style="display:inline;margin-left:15px;margin-top:-15px;">Get Academic Related Information Without Being Yelled At.</h2>
		</div>
		<div class="list">
		<img src="images/studyMaterial.gif" width='120px' height='70px' />
		<h2 style="display:inline;margin-left:15px;margin-top:-15px;">Get Study Material For Free.</h2>
		</div>
		<div class="list">
		<img src="images/money.gif" width='120px' height='70px' />
		<h2 style="display:inline;margin-left:15px;margin-top:-15px;">Save Money By Re-issueing Library Books From Room and By Getting Due Date Reminder.</h2>
		</div>
		<div>
		<!--<h3 style='margin-left:150px;margin-top:50px'>All This And Much Much More On SVNIT Student Database Portal - The Information Hub</h3>-->
		</div>
		</div>
		</div>
		</li>
		
		<li class='3'>
		<div id='contactUs' style='color:#0072C6'>
		<div id='contactInfo'>
		<h2>Contact Us Directly</h2>
		<ul id='emailList'>
		<li style='list-style-type:none;margin-top:40px'> Mukul Rawal : rawal.mukul@hotmail.com</li>
		<li style='list-style-type:none'> Abhishek Sharma : abhishek.sharma@outlook.com</li>
		<li style='list-style-type:none'> Niraj Kumar : neeroj.kumar29@gmail.com</li>
		<li style='list-style-type:none'> Prashant Srivastava: 005prashant@gmail.com</li>
		<ul>
		</div>
		<div id='contactForm'>
		<h2>Drop Us a Mail</h2>
		<form id="form1" name="form1" method="post" action="#">
		<div>
		<input name="username" class="text" type="text" id="name" class="field" aria-required="true" placeholder="Name"  />
		</div>
		
		<div>
		<input name="email" type="text"  class="text" id="email" class="field"  aria-required="true" placeholder="Email"  />
		</div>
		
		<div>
		<textarea name="msg" id="msg" aria-required="true" placeholder="Message" ></textarea>
		</div>
		
		<div>
		<input type="submit" name="button" class="submitBtn" id='signInBtn' style='background:#0072C6' onmouseout="this.style.backgroundColor='#4791DA' " onmouseover="this.style.backgroundColor='#4791DA' "  value="Shoot" />
		</div>
		</div>
		</div>
		</li>
		</ul>
		</div>
		
		
		</div>
		<div id='whileLoading' ><img style='margin:50%' src="images/loading.gif" /></div>
		
</body>
</html>	
		
