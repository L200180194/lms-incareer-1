<?php 

function http_request($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $out = curl_exec($ch);

    curl_close($ch);

    return $out;
}

?>