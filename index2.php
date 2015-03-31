<?php
 
    $hmac_key = "speedo3Pow4Tag";
    $body = '';
    $calculatedHmac = base64_encode(hash ('sha256', $hmac_key . $body, true));
	print($calculatedHmac);
?>