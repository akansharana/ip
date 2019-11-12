ipv4 is a private ip for system
<?php
error_reporting(0);
$hosts = gethostbynamel($hostname);
if (is_array($hosts)) {
     echo "Host ".$hostname." resolves to:<br><br>";
     foreach ($hosts as $ip) {
          echo "IP: ".$ip."<br>";
     }
} else {
     echo "Host ".$hostname." is not tied to any IP.";
}
?>
