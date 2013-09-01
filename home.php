<!DOCTYPE html>

<html>
<head>
<link href="css/header.css" rel="stylesheet">
<link href="css/home.css" rel="stylesheet">
<script src="jQuery/jquery-1.8.3.js" type="text/javascript"></script>
<script type="text/javascript" src="jQuery/jquery.cookie.js"></script>

<script type="text/javascript">
		/*Check For New Notifications while document is loading*/
	
		$(window).load(function()
		{
			var height=$(window).height();
			var loaderTop=height/2;
			$('#ajaxLoader').css({'top':loaderTop});
			$.post('test_notification.php',"",processData);
				function processData(data)
				{
					
					if(data!='fail')
					{
						
					$('#notifyButton #new').html("<p style='color:red'>"+data+"</p>");
				
					}
					else
					{
						
					}
				};//end ajax
			
		});
		
		
		/*End of Checking for new notification */
		
		$(document).ready(function()
		{
			setInterval(function() {checkNotifications()},3000);
			function checkNotifications()
			{
				$.post('test_notification.php',"",processData);
				
				function processData(data)
				{
					
					if(data!='fail')
					{
					
					$('#notifyButton #new').html("<p style='color:red'>"+data+"</p>");
					
					}
					else
					{
						
					}
				};//end ajax
			}
			
		
			
			/*Setting the height of #values according to screen*/
		
			var height=$(window).height();
			var ht=height-130;
			//alert(height);
			$('#rightbar #values').css({'height':ht});
			
			/*End Setting the height*/
			
			/*Creating the hover effect on notification class*/
			
			$('#notifyButton,#rightbar ').hover(
			function()
			{
				
				
				
				$('#rightbar').stop().animate({'right':'0px'},700);
			},
			function()
			{
				$('#rightbar').stop().animate({'right':'-400px'},700);
				$.post("updaten.php","",pdata);
				function pdata(data)
				{
					
				}
			});//end notifyButton hover
			
			$('#notifyButton').hover(function()
			{
				$('#msgs').css({'background':'rgb(240,240,240)'});
				$('#notifications').css({'background':'white'});
				$.post("nvalues.php","",refreshValues);
				function refreshValues(data)
				{
					//alert(data);
					$('#rightbar #values').html(data);
				}//end refreshValue
				
			});
			
			/* End of hover effect on notification class*/
			
			/*Start Of The Onclick Event Inside the notification  box*/
			
				$('#rightbar .clickable').click(function()
				{
					var name=$(this).attr('name');
					var url=name+'.php';
					if(name=='nvalues')
					{
						$('#msgs').css({'background':'rgb(240,240,240)'});
						$('#notifications').css({'background':'white'});
						
					}
					
					else
					{
						$('#msgs').css({'background':'white'});
						$('#notifications').css({'background':'rgb(240,240,240)'});
					}
					$('#ajaxLoader').fadeOut(200);
					$('#rightbar #values').fadeOut(200);
					$.post(url,"",refreshValues);
					
					function refreshValues(data)
					{
						$('#rightbar #values').html(data);	
						$('#ajaxLoder').fadeIn(200);
						$('#rightbar #values').fadeIn(200);
					}//end refreshValue
				});//end click
			
			/*End Of The Onclick Event Inside the notification  box*/
			
			
			/*Start Of Onclick Event inside the #values div*/
			
		
				$(document).on('click','.mvalue',function()
				{
						var sid=$(this).attr('name');
						alert(sid);
						var sendData='sid='+sid;
						$.post('conversation.php',sendData,processData);
						function processData(data)
						{
							$('body').html(data);
						}
				});//end mvalue click
			
			/*End Of Onclick Event inside the #values div*/
			
		});//end ready
	</script>
</head>
<body>
<?php
	include "header.php";
	include "sidebar.php";
?>
<div id='notifyButton' class='notifications' style=''>
   <img src="images/12.png"/>
   <p style="font-size:13px; margin-top:-75px;margin-left:29px;">Notifications</p>
<p id='new'></p></div>
<div id='rightbar' class='notifications' >
<div id='notifications' class='clickable' name='nvalues' >
<img src="images/m3.png" style="margin-top:16px;margin-left:20px;"/>
</div>
<div id='msgs' class='clickable' name='mvalues'>
<img src="images/m2.png" style="margin-top:0px;margin-left:10px;"/>
</div>
<div id='values' class='notifications'>

</div>
<div id="ajaxLoader"><img src="images/ajaxLoading.gif" /></div>
</div>

</body>
</html>
