<?php
namespace Home\Controller;
use Think\Controller;

class OauthController extends Controller {

    /* 
    * Type类型，初始化
    * QQConnet  WeiboConnect 
    */
    public function index()
    {
        switch ($_GET['type']) 
        {
            /* QQ互联登录 */
            case qq:
                $app_id = C('QQ_AUTH.APP_ID');
                $scope = C('QQ_AUTH.SCOPE');
                $callback = C('QQ_AUTH.CALLBACK');
                $sns = new \Common\Controller\QQConnect;
                $sns->login($app_id, $callback, $scope);
            break;

             /* 新浪微博登录 */

            case sina:
                $app_id = C('SINA_AUTH.APP_ID');
                $scope = C('SINA_AUTH.SCOPE');
                $callback = C('SINA_AUTH.CALLBACK');
                $sns = new \Common\Controller\WeiboConnect;
                $sns->login($app_id, $callback, $scope);
            break;

            /* 默认无登录 */
            default:
                $this->error("无效的第三方方式",U(''));
        }

    }  

  /*    
   * 互联登录返回信息
   * 获取code 和 state状态，查询数据库 
   *  */

    public function callback() 
    {
        switch ($_GET['type']) 
        {
        /* 接受QQ互联登录返回值 */
        case qq:
            // empty($_GET['code']) && $this->error("无效的第三方方式",U(''));
            $app_id = C('QQ_AUTH.APP_ID');
            $app_key = C('QQ_AUTH.APP_KEY');
            $callback = C('QQ_AUTH.CALLBACK');

            $qq = new \Common\Controller\QQConnect;

            /* callback返回openid和access_token */
            $back = $qq->callback($app_id, $app_key, $callback);

            $openid = $back['openid'];
            $token = $back['token'];
            $result = $qq->get_user_info($app_id,$token,$openid);

            // handle the value of callback
            $this->handleValue($result, $openid);
            //防止刷新
            empty($back) && $this->error("请重新授权登录",U(''));

        //此处省略数据库查询，查询返回的$back['openid']
        break;

        /* 接受新浪微博登录返回值     */
        case sina:
            empty($_GET['code']) && $this->error("无效的第三方方式",U(''));
            $app_id = C('SINA_AUTH.APP_ID');
            $app_key = C('SINA_AUTH.APP_KEY');
            $scope = C('SINA_AUTH.SCOPE');
            $callback = C('SINA_AUTH.CALLBACK');
            $weibo = new \Common\Api\WeiboConnect;

            /* callback返回openid和access_toke */
            $back = $weibo->callback($app_id , $app_key, $callback);
            empty($back) && $this->error("请重新授权登录",U(''));
            //此处省略数据库查询，查询返回的$back['openid']
        break;

        /* 默认错误跳转到登录页面  */
        default:
            $this->error("无效的第三方方式",U(''));

        }

    }

    /*
    *   function handleValue()
    *   handle the value of callback
    */
    public function handleValue($result, $openid)
    {
        // 获取QQ昵称
        $nickname = $result['nickname'];
        // get the logo Url
        $figureUrl = $result['figureurl_qq_1'];
        // set session about the value of callback 
        $_SESSION['nickname'] = $nickname;
        $_SESSION['figureUrl'] = $figureUrl;
        $_SESSION['openid'] = $openid;

        @setcookie("openid", $openid, time() + 3600*24*66,"/");

        $user = array(
                "openid"    => $openid,
                "nickname"  => $nickname,
                "figureUrl" => $figureUrl
            );
        // insert the value to database
        if (M('users')->where("openid='%s'",$openid)->find())
        {
            M('users')->where("openid='%s'",$openid)->save($user);
            $id = M('users')->where("openid='%s'",$openid)->getField('id');
        }
        else
        {
            $id = M('users')->data($user)->add();
        }
        
        $_SESSION['id'] = $id;
        @setcookie("id", $id, time() + 3600*24*66,"/");

        echo "<script>window.opener.location.href=window.opener.location.href;</script>";
        echo "<script>window.close();</script>";
        
    }
}  