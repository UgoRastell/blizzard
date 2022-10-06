<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_CAINFO, __DIR__ . DIRECTORY_SEPARATOR . 'cert/cacert.pem' );
curl_setopt($ch, CURLOPT_URL, 'https://us.api.blizzard.com/hearthstone/cards?locale=en_US&gameMode=battlegrounds');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: Bearer EUyvfniVyaKtweLedhokSgFVTz0sqkg1NI';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else {
    echo($result);
}
curl_close($ch);