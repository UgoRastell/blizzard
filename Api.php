<?php

$curl = curl_init('');
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