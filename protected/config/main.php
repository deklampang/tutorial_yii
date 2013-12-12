<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// Define a path alias for the Bootstrap extension as it's used internally.
// In this example we assume that you unzipped the extension under protected/extensions.
//Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Tutorial Yii Framework',
        'language' => 'th',     
        'theme'=>'bootstrap', 
        'timeZone'=>'Asia/Bangkok', // กำหนด TimeZone เป็น “Asia/Bangkok” (+7)
        //
	// preloading 'log','bootstrap' component
	'preload' => array(
            'bootstrap',
            'log'
        ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'12345',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths'=>array(
                            'bootstrap.gii',
                        ),
		),
            
                'admin',
                'Sale',
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
                    'urlFormat'=>'path',
                    'rules'=>array(
                        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                    ),
                    'showScriptName' => false,   // เพิ่มเติมคำสั่งนี้ลงไป  
		),
		
            /*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
           
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=db_tutorial_yii',
			'emulatePrepare' => true, // อันนี้ sql บางตัวมันเรียกใช้
			'username' => 'root', // ชื่อผู้ใช้งานฐานข้อมูล
			'password' => '1234', // รหัสผ่านฐานข้อมูล
			'charset' => 'utf8', // character set
		),
/*
                // คำสั่งที่เพิ่มเข้าไปใหม่
                'dbadvert' => array( // ตั้งชื่อการเชื่อมต่อ ใหม่
                    'connectionString' => 'mysql:host=adserver2;dbname=advertisingDB',
                    'username' => 'advertuser', // ชื่อผู้ใช้งานฐานข้อมูล
                    'password' => '***********', // รหัสผ่านฐานข้อมูล
                    'class' => 'CDbConnection' // ชื่อ คลาสเชื่อมต่อฐานข้อมูลหลัก เพื่อใช้สืบทอดคุณสมบัติ        
                ),
*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
                'bootstrap' => array(
                    'class' => 'ext.booster.components.Bootstrap',
                    'responsiveCss' => true
                ),
            
                'message'=>array(
                    'basePath'=>YiiBase::getPathOfAlias('application.messages')
                ),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);