<?php
namespace Home\Controller;
use Think\Controller;
class GuestbookController extends Controller {
    public function index(){
    	M('webinfo')->where('id=0')->setInc('webview',1);	//访问量+1
    	$info = M('webinfo')->select();						//获取网站信息

    	$comment = M('comment')->where('aid=0')->order('time desc')->select();   //get the comments
        $comnums = count($comment);

        $assign = array(
            'info'     => $info,
            'comment'  =>   $comment,
            'comnums'  =>   $comnums
            );

    	$this->assign($assign);
    	$this->display();
    }

    public function comment()
    {
    	//get the asyn data
        $data = array(
                'aid' => $_POST['articleid'],
                'time' => time(),
                'username' => $_POST['username'],
                'content' => $_POST['comment']
            );

        $result = M('comment')->data($data)->add(); //add the comment into the table
         
        $str = '';  //return the ajax string
        if ($result) 
        {
            $str .='<div class="comment-title">';
            $str .='<div class="comment-img">';
            $str .='<img src="/Public/images/c.jpg" alt=":)">';
            $str .='</div>';
            $str .='<div class="comment-name">';
            $str .=$_POST['username'];
            $str .='</div>';
            $str .='<div class="comment-time">';
            $str .=formatTime(time()-1);
            $str .='</div>';
            $str .='<div class="clear"></div></div>';
            $str .='<div class="comment-body"><div class="quote-icon"></div>';
            $str .='<div class="comment-content">';
            $str .=$_POST['comment'];
            $str .='</div>';
            $str .='<div class="rotate-quote-icon"></div><div class="clear"></div></div>';

            echo $str;
        }
        else
        {
            echo 'false';
        }
    }
}