<?php 
	/**
	 * 格式化时间
	 */
	function formatTime ($time) 
	{
		//当前时间
		$now = time();
		//今天零时零分零秒
		$today = strtotime(date('y-m-d', $now));
		//传递时间与当前时秒相差的秒数
		$diff = $now - $time;
		$str = '';
		switch ($time) 
		{
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
				$str = date('M/j Y', $time);
		}
		return $str;
	}

	/**
	 * 归档时格式化时间以便整理
	 */
	function arrangeTime($time) 
	{	

		$year = date('Y' ,$time);	//格式化后的年、月、日
		$month = date('m' ,$time);
		$day = date('d' ,$time);

		$date = array(
					'year'	=> $year,
					'month'	=> $month,
					'day'	=> $day
			);
		return $date;
	}
	
	/**
	 * Setting the Imagination including label
	 */
	function setImg($label)
	{
		$str = "";

		switch ($label) 
		{
			case '1':
				$str = "technology";
				break;
			case '2':
				$str = "internet";
				break;
			case '4':
				$str = "c";
				break;
			case '10':
				$str = "electronic";
				break;
			default:
				$str = "default";
				break;
		}

		return $str.".jpg";
	}

	/**
	 * Setting the Href including the label
	 */
	function setHref($label, $id)
	{
		$str = "";

		switch ($label) {
			case '1':
				$str = "stm32";
				break;
			case '2':
				$str = "mcu";
				break;
			case '4':
				$str = "clang";
				break;
		    case '10':
				$str = "electronic";
				break;
			default:
				$str = "default";
				break;
		}
		return "article/".$str."/".$id;
	}

	/**
	 * Setting the lebel including the label
	 */
	function setLabel($label)
	{
		$str = "";

		switch ($label) {
			case '1':
				$str = "嵌入式";
				break;
			case '2':
				$str = "单片机";
				break;
			case '4':
				$str = "C语言";
				break;
		    case '10':
				$str = "电子世界";
				break;
			default:
				$str = "生活";
				break;
		}
		return $str;
	}

	/**
	 *  Settting the source and Url
	 */
	function setSource($source,$url)
	{
		$str = "";

		if (empty($url)) 
		{
			$str = $source;
		}
		else
		{
			$str = "<a href=".$url.">".$source."</a>";
		}
		
		return $str;
	}

	function getJS($ctrl)
	{
		$jquery = "<script src='"."http://libs.baidu.com/jquery/2.1.3/jquery.min.js"."'>"."</script>";
		switch ($ctrl) {
			case 'Index':
				$src = array(
					0 => __APP__."/Public/js/index.js"
				);
				$str = $jquery."<script src='".$src[0]."'>"."</script>";
				break;

			case 'Article':
				$src = array(
					0 => "//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js",
					1 => __APP__."/Public/js/index.js"
				);
				$str = $jquery."<script src='".$src[1]."'>"."</script>"
						."<script src='".$src[0]."'>"."</script>"
						."<script>"."hljs.initHighlightingOnLoad()"."</script>";
				break;
			default:
				break;
		}
		return $str;

	}
?>