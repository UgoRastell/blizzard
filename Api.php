<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_CAINFO, __DIR__ . DIRECTORY_SEPARATOR . 'cert/cacert.pem' );
curl_setopt($ch, CURLOPT_URL, 'https://us.api.blizzard.com/hearthstone/deck?locale=fr_FR&code=AAECAQcG%2Bwyd8AKS%2BAKggAOblAPanQMMS6IE%2Fweb8wLR9QKD%2BwKe%2BwKz%2FAL1gAOXlAOalAOSnwMA');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$headers[] = 'Authorization: Bearer EUyvfniVyaKtweLedhokSgFVTz0sqkg1NI';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else {
    $result = json_decode($result, true);
    print_r($result);

    foreach($result ['version'][0] as $hr){
        
    }
}
curl_close($ch);