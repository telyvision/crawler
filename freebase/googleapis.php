<?php
$freebase_api_key = "AIzaSyAyuOrNmljpjSusUC6-8T-i587Jj5ufgd0";
$query = array(array('id' => NULL, 'mid' => NULL, 'name' => NULL, 'type' => '/tv/tv_program'));
$service_url = 'https://www.googleapis.com/freebase/v1/mqlread';
$params = array(
                'query' => json_encode($query),
                'key' => $freebase_api_key
);
$url = $service_url . '?' . http_build_query($params);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = json_decode(curl_exec($ch), true);
curl_close($ch);
foreach ($response['result'] as $topic) {
	echo $topic['name'] . '<br/>';
}

?>