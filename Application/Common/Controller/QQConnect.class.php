<?php 
namespace Common\Controller;
class QQConnect{

/**
* 获取QQconnect Login 跳转到的地址值
* @return array 返回包含code state
* 
**/ 

 	public function login($app_id, $callback, $scope)
 	{
        $_SESSION['state'] = md5(uniqid(rand(), TRUE)); //CSRF protection
        $login_url = "https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=" 
            .$app_id. "&redirect_uri=" . urlencode($callback)
            . "&state=" . $_SESSION['state']
            . "&scope=".urlencode($scope);
		//显示出登录地址
        header('Location:'.$login_url);
    }

    /**
    * 请求URL地址，返回callback得到返回字符串
    * @param $url qq提供的api接口地址
    * */

    public function callback($app_id, $app_key, $callback) 
    {
        $code = $_GET['code'];
        $state = $_GET['state'];
        $token = $this->get_token($app_id,$app_key,$code,$callback,$state);
        $openid = $this->get_openid($token);
        if(!$token || !$openid) 
        {
            return false;
            exit();
        }
        return array('openid' => $openid, 'token' => $token);
    }
    /**
     * 获取access_token值
     * @return array 返回包含access_token,过期时间的数组
     * */

	private function get_token($app_id,$app_key,$code,$callback,$state)
	{
        if($state !== $_SESSION['state'])
        {
			return false;
			exit();
        }

        $url = "https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&client_id="
        .$app_id."&client_secret=".$app_key."&code=".$code."&redirect_uri=".$callback;


        $result = $this->post_url($url);
        $index = strpos(substr($result, 13), '&');
        $token = substr($result, 13, $index);

        return $token;
	}


    /*
     * HTTP POST Request
     */
    private  function post_url($url) 
    {
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); 
        $result = curl_exec($ch);
        return $result;
    }
    /**
     * 获取client_id 和 openid
     * @param $access_token access_token验证码
     * @return array 返回包含 openid的数组
     * */

    private  function get_openid($access_token) 
    {

        $url = "https://graph.qq.com/oauth2.0/me?"."access_token=".$access_token; 
        $result = $this->post_url($url);
        // $str = 'callback({"client_id":"YOUR_APPID","openid":"YOUR_OPENID"});';
        $lpos = strpos($result, "(");
        $rpos = strrpos($result, ")");
        $str = substr($result, $lpos+1, $rpos-$lpos-1);
        $json = json_decode($str); 
        
        return $json->openid;
    }

    /**
     * 获取用户信息
     * @param $client_id
     * @param $access_token
     * @param $openid
     * @return array 用户的信息数组
     * */

    public function get_user_info($app_id,$token,$openid)
    {

		$url = 'https://graph.qq.com/user/get_user_info?oauth_consumer_key='
		.$app_id.'&access_token='.$token.'&openid='.$openid.'&format=json';

        $result = $this->post_url($url);

        $arr = json_decode($result,true);
        return $arr;
	}
}