<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<script type="text/javascript">
			// hide URL field on the iPhone/iPod touch
			function hideUrlBar() {
				
				if (window.pageYOffset==0) {
					window.scrollTo(0, 1);
					// repeat every second for slow rendering pages
					setTimeout(function() { hideUrlBar(); }, 3000);
				
				}
			}
		</script>
		<style type="text/css" title="Default">
			body, div, h1, h2, h3, span, p {
				font-family: Verdana,Arial,Helvetica,sans-serif;
				color: #000000; 
			}
			body {
			  font-size: 10pt;
			  background : #ffffff; 
			}
			table,tr,td {
				font-size: 10pt;
				border-color : #777777;
				background : #dddddd; 
				color: #000000; 
				border-style : solid;
				border-width : 2px;
				padding: 5px;
				border-collapse:collapse;
			}
			h1 {
				font-size: 18pt;
			}
			h2 {
				font-size: 14pt;
			}
			.warning { 
				font-weight: bold;
			} 
		</style>	
	</head>
	<body onorientationchange="hideUrlBar();">
		<h1></h1>
		<br>
		<script type="text/javascript" src="object2vr_player.js">
		</script>
		<div id="container" style="width:375px;height:375px;">
		This content requires HTML5 &amp; Javascript or Adobe Flash Player Version 9 or higher.
		</div>
		<script type="text/javascript">
	
			// create the object player with the container
			obj=new object2vrPlayer("container");
			obj.readConfigUrl("vasyanya_out.xml");
			// hide the URL bar on the iPhone
			hideUrlBar();
		
		</script>
		<noscript>
			<p><b>Please enable Javascript!</b></p>
		</noscript>
		
		<p>
		<table>
			<tr>
				<td><b>Description</b></td>
				<td></td>
			</tr>
			<tr>
				<td><b>Author</b></td>
				<td></td>
			</tr>
			<tr>
				<td><b>Date/Time</b></td>
				<td></td>
			</tr>
			<tr>
				<td><b>Copyright</b></td>
				<td></td>
			</tr>
		</table>
	</body>
</html>
