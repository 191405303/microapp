<?php

$env = YII_ENV == 'dev' ? require(__DIR__.'/env/dev.php') : require(__DIR__.'/env/prod.php');

return [
    'id' => 'micro-app',
    // the basePath of the application will be the `micro-app` directory
    'basePath' => __DIR__,
    // this is where the application will find all controllers
    'controllerNamespace' => 'micro\controllers',
    // set an alias to enable autoloading of classes from the 'micro' namespace
    'aliases' => [
        '@micro' => __DIR__,
    ],
    'language' => 'zh-CN',
    'timeZone' => 'Asia/Shanghai',
//    'bootstrap' => ['log'],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => $env['DB_DSN'],
            'username' => $env['DB_USERNAME'],
            'password' => $env['DB_PASSWORD'],
            'charset' => 'utf8',
        ],
        'redis' => [
            'class' => 'yii\redis\Cache',
            'redis' => [
                'hostname' => '127.0.0.1',
                'port' => 6379,
                'database' => 0
            ]
        ],
		'urlManager' => [
		    'enablePrettyUrl' => true,
		    'suffix' => '',
		    'showScriptName' => false,
		    'rules' => [
//		        ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
		    ],
		],
//	     'errorHandler' => [
//	         'errorAction' => "site/error",
//	     ],
	    'log' => [
	        'traceLevel' => YII_DEBUG ? 3 : 0,
	        'targets' => [
	            [
	                'class' => 'yii\log\FileTarget',
	                'levels' => ['info','error'],
                    'logVars' => [],
	            ],
	        ],
	    ],
	    'request' => [
	        'parsers' => [
	            'application/json' => 'yii\web\JsonParser',
	            'text/json' => 'yii\web\JsonParser',
	            'text/plain' => 'yii\web\JsonParser',
	            'text/html' => 'yii\web\JsonParser',
	        ],
//            'cookieValidationKey' => '9rEuhVyOhaOFlGLMMExTQqkrdkcOss',
            "enableCsrfValidation"=>false,
		],

//        'response' => [
//            'formatters' => [
//                \yii\web\Response::FORMAT_JSON => [
//                    'class' => 'yii\web\JsonResponseFormatter',
//                    'prettyPrint' => YII_DEBUG, // use "pretty" output in debug mode
//                    'encodeOptions' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
//                ],
//            ],
//        ],
	],

//	'on beforeRequest' => function ($event) {
//			$url=yii::$app->request->getUrl();
//			yii::$app->request->setUrl(strtolower($url));
//	},

//    'defaultRoute' => 'site/index',
//    'catchAll' => ['site/index'],
    'params' => [],

];