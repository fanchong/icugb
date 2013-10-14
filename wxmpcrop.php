
<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'localhost/test.html');

curl_setopt($curl, CURLOPT_HEADER, 1);


curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$data = curl_exec($curl);

curl_close($curl);

$mat="/<script type=\"json\" id=\"json-msgList\">([\s\S]*?)<\/script>/i";
preg_match_all($mat,$data,$ra);
$jsondecode = json_decode($ra[1][0]);

$url = "https://mp.weixin.qq.com/cgi-bin/getheadimg?token=1789210111&fakeid=319441055";
$curl = curl_init($url);
$filename = date("Ymdhis").".jpg";
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
	$imageData = curl_exec($curl);
curl_close($curl);
	$tp = @fopen($filename, ‘a’);
	fwrite($tp, $imageData);
	fclose($tp)
?>
