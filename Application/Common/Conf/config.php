<?php
return array(
	// 'DB_TYPE'               =>  'mysql',     			// 数据库类型
	// 'DB_HOST'               =>  'qdm12736411.my3w.com', // 服务器地址
	// 'DB_NAME'               =>  'qdm12736411_db',       // 数据库名
	// 'DB_USER'               =>  'qdm12736411',      	// 用户名
	// 'DB_PWD'                =>  'zzyd00ooybzb',         // 密码
	// 'DB_PORT'               =>  '',        			// 端口
	// 'DB_PREFIX'             =>  'mb_',    					// 数据库表前缀
	// 'DB_CHARSET'            =>  'utf8',      			// 数据库编码默认采用utf8
	
	'DB_TYPE'               =>  'mysql',     			// 数据库类型
	'DB_HOST'               =>  'localhost', // 服务器地址
	'DB_NAME'               =>  'blog',      // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  '',          // 密码
	'DB_PORT'               =>  '',        			// 端口
	'DB_PREFIX'             =>  'mb_',    					// 数据库表前缀
	'DB_CHARSET'            =>  'utf8',      			// 数据库编码默认采用utf8

	'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
	'URL_HTML_SUFFIX'       =>  '',      // URL伪静态后缀设置
	'DEFAULT_CHARSET'       =>  'utf-8',  // 默认输出编码

	'QQ_AUTH' => array(
		'APP_ID'         => '101236487', //你的QQ互联APPID
		'APP_KEY'   	 => 'e7ac91347633136ec9bc969011393cea',
		'SCOPE'          => 'get_user_info,get_repost_list,add_idol,add_t,del_t,add_pic_t,del_idol',
		'CALLBACK'       => 'http://www.elecpubs.com/Oauth/callback/type/qq'
	)
);