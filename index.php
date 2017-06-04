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
  <body id="b">
  <div class="proov"><h1>Loo lihtne veebilehe külastajate loendur. Kuva lehe külastuste arvu ja viimase külastuse aega.</h1></div>
	 
	 <div class="soodapohi">
		<form method="POST" action=''>
	<table id='bog'>
		<tr><td></td><td>Tegin veel, et saaks vaadata kõik külalised. <br> Et saaks vaadata, et üleval ikka näitab eelmine külastuse aeg, mitte hetkine.</td></tr>
		<tr><td>Boonus. </td><td><input type="submit" name='n' value="Näita kõik külalised ning uuenda koduleht."></td></tr></td></tr>
		
	</table>
	</form>
	</div>
  
  
    
	<?php 
	include('aju.php');
	?>
	
	
  </body>
</html>