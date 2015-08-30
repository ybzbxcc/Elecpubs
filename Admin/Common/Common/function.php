<?php 

	function getExcerpt($content)
	{
		$content = mb_substr(strip_tags($content),0,79,'utf-8');
		return $content;
	}

	function FormatTime($time) 
	{
	//当前时间
	$now = time();
	//今天零时零分零秒
	$today = strtotime(date('y-m-d', $now));
	//传递时间与当前时秒相差的秒数
	$diff = $now - $time;
	$str = '';
	switch ($time) {
		case $diff < 60 :
			$str = $diff . '秒前';
			break;
		case $diff < 3600 :
			$str = floor($diff / 60) . '分钟前';
			break;
		case $diff < (3600 * 8) :
			$str = floor($diff / 3600) . '小时前';
			break;
		case $time > $today :
			$str = '今天&nbsp;&nbsp;' . date('H:i', $time);
			break;
		default : 
			$str = date('Y-m-d', $time);
	}
	return $str;

	function getExcerpt($str, $length)
	{
		$content = strip_tags($str);
		$result = mb_substr($content, 0, $length, 'utf-8');
		return $result;
	}
}
?>