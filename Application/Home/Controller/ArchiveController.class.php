<?php
namespace Home\Controller;
use Think\Controller;

/**
* 	sort out the archives
*/
class ArchiveController extends Controller {
	public function index() 
	{
		$table = M('article');
		$where = array('id', 'title', 'label', 'time', 'label', 'pageview');
		$result = $table->order('time desc')->field($where)->select();	//取出博文标题

		foreach ($result as $key => $value) 
		{
			$time = arrangeTime($value['time']);	//将格式化后的时间整合到结果中
			$merge = array_merge($time, $value);
			$mrgres[$key] = $merge;
		}

		// var_dump($mrgres);die;
		$count = count($mrgres);	   						//统计博文数目
		$cmptime = arrangeTime($mrgres[$count]['time']);	//取得最近博文的日期 Y m d


		foreach ($mrgres as $key => $value) 
		{
			$year = $value['year'];
			$month = $value['month'];
			$day = $value['day'];
			$final[$year][$month][$day][]=$value;
		}
		
		M('webinfo')->where('id=1')->setInc('webview',1);	//访问量+1
    	$info = M('webinfo')->select();						//获取网站信息

    	$field = array('title', 'label', 'id');
    	$bloglist = $table->order('pageview desc')->field($field)->limit(4)->select();//获取热门博文

    	$assign = array(
    			'info' 		=> $info,
    			'archive' 	=> $final,
    			'bloglist'	=> $bloglist
    		);
    	$this->assign($assign);
		$this->display();
	}
}