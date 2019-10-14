<?php
function getAddrByHost($hosts, $timeout = 3) {
  $returnString = '';
  foreach ($hosts as $host) {
    $query = `nslookup -timeout=$timeout -retry=1 $host`;
    if (preg_match('/\nAddress: (.*)\n/', $query, $matches))
      $returnString .= trim($matches[1]) . '<br>';
    $returnString .= $host . '<br>';
  }
  return $returnString;

}

$hostArray[] = 'https://www.w3resource.com';

$returnString = getAddrByHost($hostArray);
echo $returnString;
?>