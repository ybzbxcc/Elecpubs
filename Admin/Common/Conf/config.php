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

	'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
	'URL_HTML_SUFFIX'       =>  '',  // URL伪静态后缀设置
);
