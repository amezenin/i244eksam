<?php


 
 
 
 if(isset($_SESSION)){
	 
	 //logime IP ja aja logifaili
		$logfile = "text.txt";
		$ip = $_SERVER['REMOTE_ADDR'];
		$line = date('Y-m-d H:i:s') . " - " . $ip;	
		file_put_contents($logfile, $line . PHP_EOL, FILE_APPEND);
		
		$logfile = "text.txt";
		$data = file($logfile); //4itaem infu po strokam
		$lines = count(file($logfile));
  
		echo '<table border="1" id="bog">';
		echo '<tr>';
		echo '<td> Sellel lehel on ' . $lines . ' külastust </td>';
		echo '</tr>';
		echo '</table>';
		
		$i = 1;
 }
 
 if($_POST){
	 if($_POST['n']){
	
	foreach( $data as $value ):
 
		# Разбиваем строку по |
		$value = explode( "|", $value );
 
echo '<table border="1" id="bog">';
{
echo '<tr>';
echo '<td>' . $i++ . '</td>';
echo '<td>' . $value[0] . '</td>';
echo '</tr>';
}
echo '</table>';
endforeach;
	
 }
	 
 }
 
		
	
	
	


?>