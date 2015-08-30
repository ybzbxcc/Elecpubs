<?php
namespace Home\Controller;
use Think\Controller;
class PostController extends Controller 
{
    public function index()
    {
        $tags = M('tags')->field('id,tagname')->select();
        // var_dump($tags);die;
        $this->assign('tags', $tags);
       	$this->display();
    }
    public function sendBlog()
    {
        header('Content-Type:text/html;Charset=UTF-8');
        // upload the excerpt image
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/'; // 设置附件上传根目录
        $upload->savePath  =     'images/excerpt_images/'; // 设置附件上传（子）目录
        $uplaod->savename  =     '';
        $upload->subName   =     '';
        // 上传文件 
        $info   =   $upload->upload();
        // excerpt image 的路径
        $excerptimg = __ROOT__.'/Public/images/excerpt_images/'.$info['img']['savename'];
        var_dump($excerptimg);die;
        // get the excerpt
        $excerpt = getExcerpt($_POST['content']);
        // final uploading content
        $article=array(
            'time'    => time(),
            'title'   => $_POST['title'],
            'img'     => $excerptimg,
            'excerpt' => $excerpt,
            'type'    => $_POST['tag'],
            'content' => $_POST['content']
        );
        //var_dump($article);die;
        
        if (M('articles')->data($article)->add()) 
        {
            $this->success('success');
        }
        else
        {
            $this->error('fail');
        }
    }
}