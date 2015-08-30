<?php 
	$urls = array(
		'http://www.elecpubs.com/article/electronic/15',
		'http://www.elecpubs.com/article/electronic/14',
		'http://www.elecpubs.com/article/electronic/13'
	);
	$api = 'http://data.zz.baidu.com/urls?site=www.elecpubs.com&token=1YJgRdb12J99AHfe';
	$ch = curl_init();
	$options =  array(
	    CURLOPT_URL => $api,
	    CURLOPT_POST => true,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_POSTFIELDS => implode("\n", $urls),
	    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
	);
	curl_setopt_array($ch, $options);
	$result = curl_exec($ch);
	echo $result;

 ?>