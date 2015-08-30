<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index()
    {
        header('Content-Type:text/html; charset=utf-8');
    	M('webinfo')->where('id=0')->setInc('webview',1);	//访问量+1
    	$info = M('webinfo')->select();						//获取网站信息


        $field = array('title', 'type', 'id', 'img');
        $bloglist = M('articles')->order('pageview desc')->field($field)->limit(4)->select();//获取热门博文
        // var_dump($bloglist);die;
        $count = M('articles')->count();                    // 查询总记录数
        $page = new \Think\Page($count,10);                  // 实例化分页类，每页显示8页                            // 分页显示输出
        $limit = $page->firstRow.','.$page->listRows;
        $show = $page->show();
        $list = M('articles')->order('time desc')->limit($limit)->select(); // 进行分页数据查询   	
        //var_dump($list);die;
        // attain the tags
        $tags = M("tags")->select();

        $assign = array(                 // 模板变量分配
            'article' => $list,
            'page' => $show,
    		'bloglist' => $bloglist, 
    		'info'	   => $info,
            'tags'   => $tags
    		);

    	$this->assign($assign);
       	$this->display();
    }
}