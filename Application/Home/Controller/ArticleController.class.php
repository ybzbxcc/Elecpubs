<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 
 */
class ArticleController extends Controller {

    public function _empty($subject)
    {
        $id=I('path.2');
        $this->subject($subject, $id);
    }

    protected function subject($subject, $id)
    {
        // increment the pageview
        M('articles')->where('id='.$id)->setInc('pageview',1); 

        // obtain the webinfo
        $info=M('webinfo')->select();

        // obtain article and tag
        $result=M('articles')->where('id='.$id)->select();
        $label = $result[0]['type'];

        // obtain relative article
        $relative = M('articles')->where('type='.$label)->field('id,type,title,img')->limit(5)->select();

        //获取热门博文
        $field = array('title', 'type', 'id', 'img');
        $bloglist = M('articles')->order('pageview desc')->field($field)->limit(4)->select();

        //get the comments
        $comment = M('comments')->where('article_id='.$id)->order('time desc')->select();   
        $comnums = count($comment);

        // obtain the previous and next article
        $previous = M("articles")->where("id=".($id-1))->field("title,id")->select();
        $next = M("articles")->where("id=".($id+1))->field("title,id")->select();
        // attain the tags
        $tags = M("tags")->select();

        // judge whether exist the cookie
        if (isset($_COOKIE['openid'])) 
        {
            $userinfo = M('users')->where("openid='%s'",$_COOKIE['openid'])->select();
        }
        
        $assign = array(
            'relative' =>   $relative,
            'bloglist' =>   $bloglist, 
            'article'  =>   $result,
            'info'     =>   $info,
            'comment'  =>   $comment,
            'comnums'  =>   $comnums,
            'tags'     =>   $tags,
            'userinfo' =>   $userinfo,
            'previous' =>   $previous,
            'next'     =>   $next
        );

        $this->assign($assign);
        $this->display('index');
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

        $result = M('comments')->data($data)->add(); //add the comment into the table

        M('articles')->where('id='.$_POST['articleid'])->setInc('reply',1); // add the reply numbers;
         
        $str = '';  //return the ajax string
        if ($result) 
        {
            $str .='<div class="comment-left">';
            $str .='<div class="comment-img">';
            $str .='<img src="/PUBLIC/images/c.jpg" /></div></div>';
            $str .='</div><div class="comment-right">';
            $str .='<div class="comment-title">';
            $str .='<span class="comment-name">';
            $str .=$_POST['username'];
            $str .='</span>';
            $str .='<span class="comment-time">';
            $str .='•'.formatTime(time() - 1);
            $str .='</span></div>';
            $str .='<div class="comment-body">';
            $str .='<div class="comment-content">';
            $str .=$_POST['comment'];
            $str .='</div></div></div></div>';

            echo $str;
        }
        else
        {
            echo 'false';
        }
    }
}