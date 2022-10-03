<?php
$header [] = 'Authorization: Bearer JztPwWCSK85RlcEfMm4MU74fQrmuiku7';

$curl = curl_init('-u4d50be5e687543d0a4754913047a8c3e:JztPwWCSK85RlcEfMm4MU74fQrmuiku7 -d grant_type=client_credentials https://oauth.battle.net/token');
curl_setopt_array($curl, [
    CURLOPT_CAINFO => __DIR__ . DIRECTORY_SEPARATOR . 'cert/cacert.pem',
    CURLOPT_HTTPHEADER, $header
]);
$data = curl_exec($curl);

if ( $data === false ) {
    var_dump(curl_error($curl));
}else{
    $data = json_decode($data, true);
}
curl_close($curl);