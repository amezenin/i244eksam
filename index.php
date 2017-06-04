<?php
	session_start();
	$last = isset($_COOKIE['last']) ? $_COOKIE['last'] : 'pole kunagi';
	setcookie('last', date('Y-m-d H:i:s'), time()+3600*24*31, '/');
	echo "Viimane kord te olite sisselogitud: " . $last;
?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css"  />
    <meta charset="utf-8"/>
	<title>Text</title>
	
  </head>
  <body>
  <div class="proov"><h1>Loo lihtne veebilehe külastajate loendur. Kuva lehe külastuste arvu ja viimase külastuse aega.</h1></div>
	 <div class="soodapohi">
		
	<table>
		<tr><td></td><td>Kulastajate arv</td></tr>
		<tr><td></td><td></td></tr></td></tr>
	</table>
	</div>
  
  <input type="submit" name='n' value="Näita viimase külastuse aega.">
    
	<?php 
	include('aju.php');
	?>
	
	
  </body>
</html>