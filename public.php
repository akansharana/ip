get client ip useing php
<?php
$_SERVER['REMOTE_ADDR']; 
$ip_address=file_get_contents('http://checkip.dyndns.com/');

$ip_address = str_replace("Current IP Address: ","",$ip_address);
echo $ip_address ;
?>

get client ip using javascript
<html> 

<head> 
	
	
	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> 
	</script> 

	<script> 
$.getJSON("https://api.ipify.org?format=json", 
function(data) { 
$("#gfg").html(data.ip); 
		}) 
	</script> 
</head> 

<body> 	
<p id="gfg"></p> 	
</body> 

</html> 
