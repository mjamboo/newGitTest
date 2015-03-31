<?php
 
    $hmac_key = "speedo3Pow4Tag";
    $body = 'Mohammed Jamboo 34';
	$body = 'Mohammed Jamboo abc';
    $calculatedHmac = base64_encode(hash ('sha256', $hmac_key . $body, true));
	print($calculatedHmac);
?>