<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 下载类的定义
 */
class DownloadController extends Controller 
{
    public function index()
    {
    	M('webinfo')->where('id=0')->setInc('webview',1);	//访问量+1
    	$info = M('webinfo')->select();						//获取网站信息

    	$this->assign('info', $info);
       	$this->display();
    }

    public function STC()
    {
        $id = I('path.2');

    	$http = new \Org\Net\Http();
        $filename='Uploads/STC/'.$id.'.pdf';

        $showname='STC'.$id.'.pdf';
        $http::download($filename, $showname);
    }

    public function c()
    {
    	$http = new \Org\Net\Http();
        $filename="Uploads/高质量c编程指南.pdf";
        //exit($filename);
        $showname="高质量c编程指南.pdf";
        $http::download($filename, $showname);
    }
}